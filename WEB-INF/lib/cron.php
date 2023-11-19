<?php
require_once('initialize.php');

// Script to insert fake employee time data into the DB
// Cron should be started when you want the 1st employee to start working (some random variation will be applied anyways)
class CronJob
{
  private $WORK_AS_USER = 2;

  private $USER_IDS = null; // if null, all users from group specified in below line will be used
  private $GROUP_ID = 1;
  private $apply_to_roles = [3]; // if empty, all roles will be used
  private $ORG_ID = 1;

  private $PROJECT_ID = 1;
  private $BILLABLE = 1;
  private $APPROVED = 0;
  private $PAID = 0;
  private $STATUS = 1;

  private $IP  = '127.0.0.1';

  private $start_time_from = '06:53:00';
  private $start_time_to = '07:05:00';
  private $end_time_from = '14:53:00';
  private $end_time_to = '15:05:00';

  private $break_start_time = '10:00';
  private $break_end_time = '10:30';
  private $break_msg = 'Malica od %s do %s';

  // How far from the event time should the created/modified time be (at most)
  private $entry_time_variation_after_event_seconds = 60 * 2;


  private $DB = null;

  public function __construct($db)
  {
    $this->DB = $db;
  }

  public function run($action = 'start')
  {
    if ($action == 'start') {
      $this->start();
    } else if ($action == 'end') {
      $this->end();
    } else {
      echo "Invalid action";
    }
  }

  private function getUsersInGroup($group_id, $roles = [])
  {
    $sql = "SELECT `id`, `role_id` FROM `tt_users` WHERE `group_id`='$group_id';";
    $result = $this->DB->query($sql);

    $user_ids = [];

    while ($row = $result->fetchRow()) {
      if (empty($roles)) {
        $user_ids[] = $row['id'];
      } else {
        if (in_array($row['role_id'], $roles)) {
          $user_ids[] = $row['id'];
        }
      }
    }

    return $user_ids;
  }

  private function getUsers()
  {
    if (!empty($this->USER_IDS)) {
      $user_ids = $this->USER_IDS;
    } else {
      $user_ids = $this->getUsersInGroup($this->GROUP_ID, $this->apply_to_roles);
    }

    return $user_ids;
  }

  private function start()
  {
    /*
INSERT INTO `tt_log`(`id`, `user_id`, `group_id`, `org_id`, `date`, `start`, `duration`, `client_id`, `project_id`, `task_id`, `timesheet_id`, `invoice_id`, `comment`, `billable`, `approved`, `paid`, `created`, `created_ip`, `created_by`, `modified`, `modified_ip`, `modified_by`, `status`) VALUES (...values...)
    */

    $date = date('Y-m-d');


    foreach ($this->getUsers() as $user_id) {

      // If there is already an entry for this user, skip
      $sql = "SELECT `id` FROM `tt_log` WHERE `user_id`='$user_id' AND `date`='$date';";
      $result = $this->DB->query($sql);
      if ($result->numRows() > 0) {
        echo "Entry for user $user_id already exists, skipping\n";
        continue;
      }

      $this_user_start_time = $this->getRandomTime($this->start_time_from, $this->start_time_to);
      $created = $this->applyRandomOffset($this_user_start_time, $this->entry_time_variation_after_event_seconds, 'after');

      // Round start time to minutes
      $this_user_start_time = $this->roundToMinutes($this_user_start_time);

      $sql = "INSERT INTO `tt_log`(`user_id`, `group_id`, `org_id`, `date`, `start`, `project_id`, `billable`, `approved`, `paid`, `created`, `created_ip`, `created_by`, `status`) VALUES ('$user_id', '$this->GROUP_ID', '$this->ORG_ID', '$date', '$this_user_start_time', '$this->PROJECT_ID', '$this->BILLABLE', '$this->APPROVED', '$this->PAID', '$created', '$this->IP', '$this->WORK_AS_USER', '$this->STATUS');";

      $this->execute($sql);
    }
  }

  private function end()
  {
    $date = date('Y-m-d');

    foreach ($this->getUsers() as $user_id) {
      // Get start time
      $sql = "SELECT `start` FROM `tt_log` WHERE `user_id`='$user_id' AND `date`='$date';";
      $result = $this->DB->query($sql);
      if ($result->numRows() == 0) {
        echo "Entry for user $user_id does not exist, cannot end\n";
        continue;
      }
      $row = $result->fetchRow();

      $start_time = $row['start'];

      // Get end time
      $end_time = $this->getRandomTime($this->end_time_from, $this->end_time_to);

      // Get modified time
      $modified = $this->applyRandomOffset($end_time, $this->entry_time_variation_after_event_seconds, 'after');

      // Round end time to minutes
      $end_time = $this->roundToMinutes($end_time);

      // Get duration
      $duration = $this->getDuration($start_time, $end_time);
      $duration = gmdate('H:i:s', $duration);

      $comment = sprintf($this->break_msg, $this->break_start_time, $this->break_end_time);

      $sql = "UPDATE `tt_log` SET `duration`='$duration',`comment`='$comment',`modified`='$modified',`modified_ip`='$this->IP',`modified_by`='$this->WORK_AS_USER' WHERE `user_id`='$user_id' AND `date`='$date';";

      $this->execute($sql);
    }
  }

  /**
   * Rounds to minutes (always rounds down)
   * @param string $time
   * @param string $format
   * @return string
   */
  private function roundToMinutes($time, $format = 'H:i:s')
  {
    $unixTime = strtotime($time);

    $rounded = round($unixTime / 60) * 60;
    $rounded = date($format, $rounded);

    return $rounded;
  }


  /**
   * Calculates duration between two times
   * @param string $start_time
   * @param string $end_time
   * @return string
   */
  private function getDuration($start_time, $end_time)
  {
    $start_time = strtotime($start_time);
    $end_time = strtotime($end_time);

    $duration = $end_time - $start_time;

    return $duration;
  }

  /**
   * Applies a +- random offset to a datetime
   * @param string $datetime
   * @param int $seconds
   * @param string $direction - both, before, after
   * @param string $format
   * @return string
   */
  private function applyRandomOffset($datetime, $seconds, $direction = 'both', $format = 'Y-m-d H:i:s')
  {
    $datetime = strtotime($datetime);
    $before = ($direction == 'both' || $direction == 'before') ? -$seconds : 0;
    $after = ($direction == 'both' || $direction == 'after') ? $seconds : 0;
    $datetime = $datetime + rand($before, $after);
    $datetime = date($format, $datetime);

    return $datetime;
  }

  /**
   * Adds seconds to a datetime
   * @param string $datetime
   * @param int $seconds
   * @param string $format
   * @return string
   */
  private function addSeconds($datetime, $seconds, $format = 'Y-m-d H:i:s')
  {
    $datetime = strtotime($datetime);
    $datetime = $datetime + $seconds;
    $datetime = date($format, $datetime);

    return $datetime;
  }

  /**
   * Gets a random time between two times
   * @param string $from
   * @param string $to
   * @param string $format
   * @return string
   */
  private function getRandomTime($from, $to, $format = 'H:i:s')
  {
    $from = strtotime($from);
    $to = strtotime($to);
    $time = rand($from, $to);
    $time = date($format, $time);

    return $time;
  }


  private function execute($sql)
  {

    echo $sql . "\n";

    $result = $this->DB->query($sql);

    if ($result) {
      echo "Success\n";
    } else {
      echo "Error\n";
      echo $this->DB->lastErrorMsg();
    }
  }
}


$db = getConnection();
$cron = new CronJob($db);

// This is a cli tool, run with "php cron.php start" or "php cron.php end"
$action = $argv[1];
if (empty($action)) {
  $action = 'start';
}

if ($action != 'start' && $action != 'end') {
  echo "Invalid action\n";
  exit;
}

$cron->run($action);
