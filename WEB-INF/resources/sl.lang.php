<?php
/* Copyright (c) Anuko International Ltd. https://www.anuko.com
License: See license.txt */

// Note: escape apostrophes with THREE backslashes, like here:  'choisir l\\\'option'.
// Alternatively: use one backslash and surround by double-quotes: "choisir l\'option".
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

// Note to translators: Use proper capitalization rules for your language.

$i18n_language = 'Slovenian (Slovenščina)';
$i18n_months = array('Januar', 'Februar', 'Marec', 'April', 'Maj', 'Junij', 'Julij', 'Avgust', 'September', 'Oktober', 'November', 'December');
$i18n_weekdays = array('Nedelja', 'Ponedeljek', 'Torek', 'Sreda', 'Četrtek', 'Petek', 'Sobota');
$i18n_weekdays_short = array('Ned', 'Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Prijava',
'menu.logout' => 'Odjava',
'menu.forum' => 'Forum',
'menu.help' => 'Pomoč',
'menu.register' => 'Registriraj se',
'menu.profile' => 'Profil',
'menu.group' => 'Skupina',
'menu.plugins' => 'Vtičnik',
'menu.time' => 'Čas',
// 'menu.puncher' => 'Punch', // TODO
'menu.week' => 'Teden',
'menu.expenses' => 'Stroški',
'menu.reports' => 'Poročila',
// 'menu.timesheets' => 'Časovni listi', // TODO
'menu.charts' => 'Grafi',
'menu.projects' => 'Projekti',
'menu.tasks' => 'Naloge',
'menu.users' => 'Uporabniki',
'menu.groups' => 'Skupine',
'menu.export' => 'Izvozi',
'menu.clients' => 'Stranke',
'menu.options' => 'Možnosti',

// Footer - strings on the bottom of most pages.
//'You can contribute to Time Tracker in different ways.',
'footer.contribute_msg' => 'Time Trackerju lahko prispevate na različne načine.',
'footer.credits' => 'Zasluge',
'footer.license' => 'Licenca',
'footer.improve' => 'Izboljšaj', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
'error.access_denied' => 'Dostop zavrnjen.',
'error.sys' => 'Sistemska napaka.',
'error.db' => 'Napaka pri dostopu do baze podatkov.',
'error.registered_recently' => 'Registracija je bila nedavno.',
'error.feature_disabled' => 'Funkcija je onemogočena.',
'error.field' => 'Napačno "{0}" podatkovno polje.',
'error.empty' => 'Polje "{0}" je prazno.',
'error.not_equal' => 'Polje "{0}" ni enako polju "{1}".',
'error.interval' => 'Polje "{0}" mora biti večje od "{1}".',
'error.project' => 'Izberite projekt.',
'error.task' => 'Izberite nalogo.',
'error.client' => 'Izberite stranko.',
'error.report' => 'Izberite poročilo.',
'error.record' => 'Izberite zapis.',
'error.auth' => 'Napačno uporabniško ime ali geslo.',
'error.2fa_code' => 'Napačna 2FA koda.',
'error.weak_password' => 'Geslo je prešibko.',
'error.user_exists' => 'Uporabnik s tem elektronskim naslovom že obstaja.',
'error.object_exists' => 'Objekt s tem imenom že obstaja.',
'error.invoice_exists' => 'Račun s tem številom že obstaja.',
'error.role_exists' => 'Vloga s to pozicijo že obstaja.',
'error.no_invoiceable_items' => 'Ni računljivih zapisov.',
'error.no_records' => 'Ni zapisov.',
'error.no_login' => 'Ni uporabnika s tem uporabniškim imenom.',
'error.no_groups' => 'Vaša baza podatkov je prazna. Prijavite se kot administrator in ustvarite novo skupino.',
'error.upload' => 'Napaka pri nalaganju datoteke.',
'error.range_locked' => 'Datum je zaklenjen.',
'error.mail_send' => 'Napaka pri pošiljanju elektronske pošte. Uporabite MAIL_SMTP_DEBUG za pomoč pri odpravljanju težave.',
'error.no_email' => 'Ni elektronskega naslova povezanega s tem uporabniškim imenom.',
'error.uncompleted_exists' => 'Nedokončan zapis že obstaja. Zapri ali izbriši ga.',
'error.goto_uncompleted' => 'Pojdi na nedokončan zapis.',
'error.overlap' => 'Časovni interval se prekriva z obstoječimi zapisi.',
'error.future_date' => 'Datum je v prihodnosti.',
'error.xml' => 'Napaka v XML datoteki na vrstici %d: %s.',
'error.cannot_import' => 'Ni mogoče uvoziti: %s.',
'error.format' => 'Napačen format datoteke.',
'error.user_count' => 'Omejitev uporabnikov.',
'error.expired' => 'Datum je potekel.',
'error.file_storage' => 'Napaka datotečnega strežnika.', // See comment in English file.

// Warning messages.
'warn.sure' => 'Ste prepričani?',
'warn.confirm_save' => 'Datum je spremenjen. Potrdite shranjevanje obrazca še enkrat.',

// Success messages.
'msg.success' => 'Operacija je bila uspešno izvedena.',

// Labels for buttons.
'button.login' => 'Prijava',
'button.now' => 'Zdaj',
'button.save' => 'Shrani',
'button.copy' => 'Kopiraj',
'button.cancel' => 'Prekliči',
'button.submit' => 'Potrdi',
'button.add' => 'Dodaj',
'button.delete' => 'Izbriši',
'button.generate' => 'Ustvari',
'button.reset_password' => 'Ponastavi geslo',
'button.send' => 'Pošlji',
'button.send_by_email' => 'Pošlji preko elektronske pošte',
'button.create_group' => 'Ustvari skupino',
'button.export' => 'Izvozi skupino',
'button.import' => 'Uvozi skupino',

'button.close' => 'Zapri',
'button.start' => 'Začni',
'button.stop' => 'Končaj',
'button.approve' => 'Potrdi',
'button.disapprove' => 'Zavrni',
'button.sync' => 'Sinhroniziraj',

// Labels for controls on forms. Labels in this section are used on multiple forms.
'label.menu' => 'Meni',
'label.group_name' => 'Ime skupine',
'label.address' => 'Naslov',
'label.currency' => 'Valuta',
'label.manager_name' => 'Ime vodje',
'label.manager_login' => 'Uporabniško ime vodje',
'label.person_name' => 'Ime',
'label.thing_name' => 'Ime',
'label.login' => 'Uporabniško ime',
'label.password' => 'Geslo',
'label.confirm_password' => 'Potrdi geslo',
'label.email' => 'Email',
'label.cc' => 'Cc',
'label.bcc' => 'Bcc',
'label.subject' => 'Predmet',
'label.date' => 'Datum',
'label.start_date' => 'Začetni datum',
'label.end_date' => 'Končni datum',
'label.user' => 'Uporabnik',
'label.users' => 'Uporabniki',
'label.group' => 'Skupina',
'label.subgroups' => 'Podskupine',
'label.roles' => 'Vloge',
'label.client' => 'Stranka',
'label.clients' => 'Stranke',
'label.option' => 'Možnost',
'label.invoice' => 'Račun',
'label.project' => 'Projekt',
'label.projects' => 'Projekti',
'label.task' => 'Naloga',
'label.tasks' => 'Naloge',
'label.description' => 'Opis',
'label.start' => 'Začetek',
'label.finish' => 'Konec',
'label.duration' => 'Trajanje',
'label.note' => 'Opomba',
'label.notes' => 'Opombe',
'label.item' => 'Postavka',
'label.cost' => 'Cena',
'label.ip' => 'IP',
'label.day_total' => 'Dnevni seštevek',
'label.week_total' => 'Tedenski seštevek',
'label.month_total' => 'Mesečni seštevek',
'label.today' => 'Danes',
'label.view' => 'Poglej',
'label.edit' => 'Uredi',
'label.delete' => 'Izbriši',
'label.configure' => 'Konfiguriraj',
'label.select_all' => 'Izberi vse',
'label.select_none' => 'Odstrani vse',
'label.day_view' => 'Prikaz dneva',
'label.week_view' => 'Prikaz tedna',
'label.puncher' => 'Časovni zapisovalnik',
'label.id' => 'ID',
'label.language' => 'Jezik',
'label.decimal_mark' => 'Decimalna ločila',
'label.date_format' => 'Oblika datuma',
'label.time_format' => 'Oblika časa',
'label.week_start' => 'Prvi dan v tednu',
'label.comment' => 'Komentar',
'label.status' => 'Status',
'label.tax' => 'Davek',
'label.subtotal' => 'Delna vsota',
'label.total' => 'Skupaj',
'label.client_name' => 'Ime stranke',
'label.client_address' => 'Naslov stranke',
'label.or' => 'ali',
'label.error' => 'Napaka',
'label.ldap_hint' => 'Vnesite svoje <b>uporabniško ime Windows</b> in <b>geslo</b> v spodnja polja.',
'label.required_fields' => '* - obvezna polja',
'label.on_behalf' => 'v imenu',
'label.page' => 'Stran',
'label.condition' => 'Pogoj',
'label.yes' => 'da',
'label.no' => 'ne',
'label.sort' => 'Razvrsti',
// Labels for plugins (extensions to Time Tracker that provide additional features).
'label.custom_fields' => 'Polja po meri',
'label.monthly_quotas' => 'Mesečne kvote',
'label.entity' => 'Entiteta',
'label.type' => 'Vrsta',
'label.type_dropdown' => 'spustni seznam',
'label.type_text' => 'besedilo',
'label.required' => 'Obvezno',
'label.fav_report' => 'Priljubljeni poročilo',
'label.schedule' => 'Urnik',
'label.what_is_it' => 'Kaj je to?',
'label.expense' => 'Strošek',
'label.quantity' => 'Količina',
'label.paid_status' => 'Stanje plačila',
'label.paid' => 'Plačano',
'label.mark_paid' => 'Označi kot plačano',
'label.week_note' => 'Opomba tedna',
'label.week_list' => 'Seznam tedna',
'label.weekends' => 'Vikendi',
'label.work_units' => 'Delovne enote',
'label.work_units_short' => 'Enote',
'label.totals_only' => 'Samo skupaj',
'label.quota' => 'Kvota',
'label.timesheet' => 'Časovni list',
'label.submitted' => 'Oddano',
'label.approved' => 'Potrjeno',
'label.approval' => 'Potrditev poročila',
'label.mark_approved' => 'Označi kot potrjeno',
'label.template' => 'Predloga',
'label.bind_templates_with_projects' => 'Poveži predloge s projekti',
'label.prepopulate_note' => 'Predhodno izpolni polje Opomba',
'label.attachments' => 'Priloge',
'label.files' => 'Datoteke',
'label.file' => 'Datoteka',
'label.active_users' => 'Aktivni uporabniki',
'label.inactive_users' => 'Neaktivni uporabniki',

// Entity names. We use lower case (in English) because they are used in dropdowns, too.
// They are used to associate a custom field with an entity type.
'entity.time' => 'čas',
'entity.user' => 'uporabnik',
'entity.project' => 'projekt',

// Form titles.
'title.error' => 'Napaka',
'title.success' => 'Uspeh',
'title.login' => 'Prijava',
'title.2fa' => 'Dvo-stopenjska avtentikacija',
'title.groups' => 'Skupine',
'title.add_group' => 'Dodajanje skupine',
'title.edit_group' => 'Urejanje skupine',
'title.delete_group' => 'Brisanje skupine',
'title.reset_password' => 'Ponastavitev gesla',
'title.change_password' => 'Spreminjanje gesla',
'title.time' => 'Čas',
'title.edit_time_record' => 'Urejanje zapisa časa',
'title.delete_time_record' => 'Brisanje zapisa časa',
'title.time_files' => 'Datoteke zapisa časa',
'title.puncher' => 'Časovni zapisovalnik',
'title.expenses' => 'Stroški',
'title.edit_expense' => 'Urejanje postavke stroškov',
'title.delete_expense' => 'Brisanje postavke stroškov',
'title.expense_files' => 'Datoteke postavke stroškov',
'title.predefined_expenses' => 'Vnaprej določeni stroški',
'title.add_predefined_expense' => 'Dodajanje vnaprej določenih stroškov',
'title.edit_predefined_expense' => 'Urejanje vnaprej določenih stroškov',
'title.delete_predefined_expense' => 'Brisanje vnaprej določenih stroškov',
'title.reports' => 'Poročila',
'title.report' => 'Poročilo',
'title.send_report' => 'Pošiljanje poročila',
'title.timesheets' => 'Časovni listi',
'title.timesheet' => 'Časovni list',
'title.timesheet_files' => 'Datoteke časovnega lista',
'title.invoice' => 'Račun',
'title.send_invoice' => 'Pošiljanje računa',
'title.charts' => 'Grafikoni',
'title.projects' => 'Projekti',
'title.project_files' => 'Datoteke projekta',
'title.add_project' => 'Dodajanje projekta',
'title.edit_project' => 'Urejanje projekta',
'title.delete_project' => 'Brisanje projekta',
'title.tasks' => 'Naloge',
'title.add_task' => 'Dodajanje naloge',
'title.edit_task' => 'Urejanje naloge',
'title.delete_task' => 'Brisanje naloge',
'title.users' => 'Uporabniki',
'title.add_user' => 'Dodajanje uporabnika',
'title.edit_user' => 'Urejanje uporabnika',
'title.delete_user' => 'Brisanje uporabnika',
'title.roles' => 'Vloge',
'title.add_role' => 'Dodajanje vloge',
'title.edit_role' => 'Urejanje vloge',
'title.delete_role' => 'Brisanje vloge',
'title.clients' => 'Stranke',
'title.add_client' => 'Dodajanje stranke',
'title.edit_client' => 'Urejanje stranke',
'title.delete_client' => 'Brisanje stranke',
'title.invoices' => 'Računi',
'title.add_invoice' => 'Dodajanje računa',
'title.view_invoice' => 'Ogled računa',
'title.delete_invoice' => 'Brisanje računa',
'title.notifications' => 'Obvestila',
'title.add_notification' => 'Dodajanje obvestila',
'title.edit_notification' => 'Urejanje obvestila',
'title.delete_notification' => 'Brisanje obvestila',
'title.add_timesheet' => 'Dodajanje časovnega lista',
'title.edit_timesheet' => 'Urejanje časovnega lista',
'title.delete_timesheet' => 'Brisanje časovnega lista',
'title.monthly_quotas' => 'Mesečne kvote',
'title.export' => 'Izvoz podatkov skupine',
'title.import' => 'Uvoz podatkov skupine',
'title.options' => 'Možnosti',
'title.display_options' => 'Možnosti prikaza',
'title.profile' => 'Profil',
'title.plugins' => 'Vtičniki',
'title.cf_custom_fields' => 'Polja po meri',
'title.cf_add_custom_field' => 'Dodajanje polja po meri',
'title.cf_edit_custom_field' => 'Urejanje polja po meri',
'title.cf_delete_custom_field' => 'Brisanje polja po meri',
'title.cf_dropdown_options' => 'Možnosti spustnega seznama',
'title.cf_add_dropdown_option' => 'Dodajanje možnosti',
'title.cf_edit_dropdown_option' => 'Urejanje možnosti',
'title.cf_delete_dropdown_option' => 'Brisanje možnosti',
'title.locking' => 'Zaklepanje',
'title.week_view' => 'Pogled tedna',
'title.swap_roles' => 'Zamenjava vlog',
'title.work_units' => 'Delovne enote',
'title.templates' => 'Predloge',
'title.add_template' => 'Dodajanje predloge',
'title.edit_template' => 'Urejanje predloge',
'title.delete_template' => 'Brisanje predloge',
'title.edit_file' => 'Urejanje datoteke',
'title.delete_file' => 'Brisanje datoteke',
'title.download_file' => 'Prenos datoteke',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- vse ---',
'dropdown.no' => '--- nič ---',
'dropdown.current_day' => 'danes',
'dropdown.previous_day' => 'včeraj',
'dropdown.selected_day' => 'dan',
'dropdown.current_week' => 'ta teden',
'dropdown.previous_week' => 'prejšnji teden',
'dropdown.selected_week' => 'teden',
'dropdown.current_month' => 'ta mesec',
'dropdown.previous_month' => 'prejšnji mesec',
'dropdown.selected_month' => 'mesec',
'dropdown.current_year' => 'letos',
'dropdown.previous_year' => 'prejšnje leto',
'dropdown.selected_year' => 'leto',
'dropdown.all_time' => 'vse čase',
'dropdown.projects' => 'projekti',
'dropdown.tasks' => 'naloge',
'dropdown.clients' => 'stranke',
'dropdown.select' => '--- izberi ---',
'dropdown.select_invoice' => '--- izberi račun ---',
'dropdown.select_timesheet' => '--- izberi časovni list ---',
'dropdown.status_active' => 'aktivno',
'dropdown.status_inactive' => 'neaktivno',
'dropdown.delete' => 'izbriši',
'dropdown.do_not_delete' => 'ne izbriši',
'dropdown.approved' => 'odobreno',
'dropdown.not_approved' => 'ni odobreno',
'dropdown.paid' => 'plačano',
'dropdown.not_paid' => 'ni plačano',
'dropdown.ascending' => 'naraščajoče',
'dropdown.descending' => 'padajoče',

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Pozabljeno geslo?',
'form.login.about' => 'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> je sistem za sledenje časa z odprto kodo.',

// Email subject and body for two-factor authentication.
'email.2fa_code.subject' => 'Anuko Time Tracker koda za dvostopenjsko overjanje',
'email.2fa_code.body' => "Spoštovani uporabnik,\n\nVaša koda za dvostopenjsko overjanje je:\n\n%s\n\n",

// Two-factor authentication form. See example at https://timetracker.anuko.com/2fa.php.
'form.2fa.hint' => 'Preverite vaš e-poštni predal za kodo 2FA in jo vnesite tukaj.',
'form.2fa.2fa_code' => 'Koda 2FA',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Zahteva za razveljavitev gesla je bila poslana po e-pošti.',
'form.reset_password.email_subject' => 'Anuko Time Tracker zahteva za razveljavitev gesla',
'form.reset_password.email_body' => "Spoštovani uporabnik,\n\nNekdo, IP %s, je zahteval razveljavitev vašega Anuko Time Tracker gesla. Prosimo obiščite to povezavo, če želite razveljaviti vaše geslo.\n\n%s\n\nAnuko Time Tracker je sistem za sledenje časa z odprto kodo. Za več informacij obiščite https://www.anuko.com.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
'form.change_password.tip' => 'Vnesite novo geslo in kliknite Shrani.',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(hh:mm ali 0.0h)',
'form.time.billable' => 'Fakturabilno',
'form.time.uncompleted' => 'Nedokončano',
'form.time.remaining_quota' => 'Preostala kvota',
'form.time.over_quota' => 'Prekoračena kvota',
'form.time.remaining_balance' => 'Preostali znesek',
'form.time.over_balance' => 'Prekoračen znesek',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Ta zapis je bil shranjen samo z začetnim časom. To ni napaka.',

// Week view form. See example at https://timetracker.anuko.com/week.php.
'form.week.new_entry' => 'Nov zapis',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Shrani kot priljubljeno',
'form.reports.confirm_delete' => 'Ali ste prepričani, da želite izbrisati to priljubljeno poročilo?',
'form.reports.include_billable' => 'fakturabilno',
'form.reports.include_not_billable' => 'nefakturabilno',
'form.reports.include_invoiced' => 'zaračunano',
'form.reports.include_not_invoiced' => 'nezaračunano',
'form.reports.include_assigned' => 'dodeljeno',
'form.reports.include_not_assigned' => 'nedodeljeno',
'form.reports.include_pending' => 'v teku',
'form.reports.select_period' => 'Izberi časovno obdobje',
'form.reports.set_period' => 'ali nastavi datume',
'form.reports.note_containing' => 'Opomba vsebuje',
'form.reports.show_fields' => 'Prikaži polja',
'form.reports.time_fields' => 'Polja časa',
'form.reports.user_fields' => 'Polja uporabnika',
'form.reports.project_fields' => 'Polja projekta',
'form.reports.group_by' => 'Razvrsti po',
'form.reports.group_by_no' => '--- brez razvrstitve ---',
'form.reports.group_by_date' => 'datum',
'form.reports.group_by_user' => 'uporabnik',
'form.reports.group_by_client' => 'stranka',
'form.reports.group_by_project' => 'projekt',
'form.reports.group_by_task' => 'naloga',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Izvozi',
'form.report.per_hour' => 'Na uro',
'form.report.assign_to_invoice' => 'Dodeli računu',
'form.report.assign_to_timesheet' => 'Dodeli časovnemu listu',

// Timesheets form. See example at https://timetracker.anuko.com/timesheets.php
'form.timesheets.active_timesheets' => 'Aktivni časovni listi',
'form.timesheets.inactive_timesheets' => 'Neaktivni časovni listi',

// Templates form. See example at https://timetracker.anuko.com/templates.php
'form.templates.active_templates' => 'Aktivne predloge',
'form.templates.inactive_templates' => 'Neaktivne predloge',

// Invoice form. See example at https://timetracker.anuko.com/invoice_view.php
// (you can get to this form after generating an invoice).
'form.invoice.number' => 'Številka računa',
'form.invoice.person' => 'Oseba',

// Deleting Invoice form. See example at https://timetracker.anuko.com/invoice_delete.php
'form.invoice.invoice_to_delete' => 'Račun za brisanje',
'form.invoice.invoice_entries' => 'Vnosi računa',
'form.invoice.confirm_deleting_entries' => 'Prosimo, potrdite brisanje vnosov računa iz Time Tracker.',

// Charts form. See example at https://timetracker.anuko.com/charts.php
'form.charts.interval' => 'Interval',
'form.charts.chart' => 'Graf',

// Projects form. See example at https://timetracker.anuko.com/projects.php
'form.projects.active_projects' => 'Aktivni projekti',
'form.projects.inactive_projects' => 'Neaktivni projekti',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
'form.tasks.active_tasks' => 'Aktivne naloge',
'form.tasks.inactive_tasks' => 'Neaktivne naloge',

// Users form. See example at https://timetracker.anuko.com/users.php
'form.users.uncompleted_entry_today' => 'Uporabnik ima nedokončan zapis časa danes',
'form.users.uncompleted_entry' => 'Uporabnik ima nedokončan zapis časa',
'form.users.role' => 'Vloga',
'form.users.manager' => 'Vodja',
'form.users.comanager' => 'Pomočnik vodje',
'form.users.rate' => 'Stopnja',
'form.users.default_rate' => 'Privzeta urna stopnja',

// Editing User form. See example at https://timetracker.anuko.com/user_edit.php
'form.user_edit.swap_roles' => 'Zamenjaj vloge',

// Roles form. See example at https://timetracker.anuko.com/roles.php
'form.roles.active_roles' => 'Aktivne vloge',
'form.roles.inactive_roles' => 'Neaktivne vloge',
'form.roles.rank' => 'Razvrstitev',
'form.roles.rights' => 'Pravice',
'form.roles.assigned' => 'Dodeljeno',
'form.roles.not_assigned' => 'Ni dodeljeno',

// Clients form. See example at https://timetracker.anuko.com/clients.php
'form.clients.active_clients' => 'Aktivne stranke',
'form.clients.inactive_clients' => 'Neaktivne stranke',

// Deleting Client form. See example at https://timetracker.anuko.com/client_delete.php
'form.client.client_to_delete' => 'Stranka za brisanje',
'form.client.client_entries' => 'Vnosi stranke',

// Exporting Group Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'Vse podatke skupine lahko izvozite v xml datoteko. To je lahko koristno, če podatke selite na svoj strežnik.',
'form.export.compression' => 'Stiskanje',
'form.export.compression_none' => 'brez stiskanja',
'form.export.compression_bzip' => 'bzip',

// Importing Group Data form. See example at https://timetracker.anuko.com/import.php (login as admin first).
'form.import.hint' => 'Uvozi podatke skupine iz xml datoteke.',
'form.import.file' => 'Izberi datoteko',
'form.import.success' => 'Uvoz je bil uspešno zaključen.',

// Groups form. See example at https://timetracker.anuko.com/admin_groups.php (login as admin first).
'form.groups.hint' => 'Ustvari novo skupino z ustvarjanjem novega upravitelja skupine.<br>Podatke skupine lahko tudi uvozite iz xml datoteke iz drugega strežnika Anuko Time Tracker (dvojnih prijav ni dovoljeno).',

// Group Settings form. See example at https://timetracker.anuko.com/group_edit.php.
'form.group_edit.12_hours' => '12 ur',
'form.group_edit.24_hours' => '24 ur',
'form.group_edit.display_options' => 'Možnosti prikaza',
'form.group_edit.holidays' => 'Prazniki',
'form.group_edit.tracking_mode' => 'Način sledenja',
'form.group_edit.mode_time' => 'čas',
'form.group_edit.mode_projects' => 'projekti',
'form.group_edit.mode_projects_and_tasks' => 'projekti in naloge',
'form.group_edit.record_type' => 'Vrsta zapisa',
'form.group_edit.type_all' => 'vse',
'form.group_edit.type_start_finish' => 'začetek in konec',
'form.group_edit.type_duration' => 'trajanje',
'form.group_edit.punch_mode' => 'Način odbitka',
'form.group_edit.one_uncompleted' => 'En nedokončan',
'form.group_edit.allow_overlap' => 'Dovoli prekrivanje',
'form.group_edit.future_entries' => 'Prihodnji vnosi',
'form.group_edit.uncompleted_indicators' => 'Indikatorji nedokončanega',
'form.group_edit.confirm_save' => 'Potrdi shranjevanje',
'form.group_edit.advanced_settings' => 'Napredne nastavitve',

// Advanced Group Settings form. See example at https://timetracker.anuko.com/group_advanced_edit.php.
'form.group_advanced_edit.allow_ip' => 'Dovoli IP',
'form.group_advanced_edit.password_complexity' => 'Zapletenost gesla',
'form.group_advanced_edit.2fa' => 'Dvo-faktorska avtentikacija',

// Deleting Group form. See example at https://timetracker.anuko.com/delete_group.php
'form.group_delete.hint' => 'Ali ste prepričani, da želite izbrisati celotno skupino?',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.to' => 'Za',
'form.mail.report_subject' => 'Poročilo o času Time Tracker',
'form.mail.footer' => 'Anuko Time Tracker je sistem za sledenje času z odprto kodo. Za več informacij obiščite <a href="https://www.anuko.com">www.anuko.com</a>.',
'form.mail.report_sent' => 'Poročilo poslano.',
'form.mail.invoice_sent' => 'Račun poslan.',

// Quotas configuration form. See example at https://timetracker.anuko.com/quotas.php after enabling Monthly quotas plugin.
'form.quota.year' => 'Leto',
'form.quota.month' => 'Mesec',
'form.quota.workday_hours' => 'Ure v delovnem dnevu',
'form.quota.hint' => 'Če so vrednosti prazne, se kvote samodejno izračunajo na podlagi delovnih ur in praznikov.',

// Swap roles form. See example at https://timetracker.anuko.com/swap_roles.php.
'form.swap.hint' => 'Zamenjajte vloge z drugim uporabnikom. Tega ni mogoče razveljaviti.',
'form.swap.swap_with' => 'Zamenjaj vloge z',

// Work Units configuration form. See example at https://timetracker.anuko.com/work_units.php after enabling Work units plugin.
'form.work_units.minutes_in_unit' => 'Minut v enoti',
'form.work_units.1st_unit_threshold' => 'Prag prve enote',

// Roles and rights. These strings are used in multiple places. Grouped here to provide consistent translations.
'role.user.label' => 'Uporabnik',
'role.user.low_case_label' => 'uporabnik',
'role.user.description' => 'Običajni član brez upravljalskih pravic.',
'role.client.label' => 'Stranka',
'role.client.low_case_label' => 'stranka',
'role.client.description' => 'Stranka lahko vidi svoje podatke.',
'role.supervisor.label' => 'Nadzornik',
'role.supervisor.low_case_label' => 'nadzornik',
'role.supervisor.description' => 'Oseba z majhnim naborom upravljalskih pravic.',
'role.comanager.label' => 'So-upravitelj',
'role.comanager.low_case_label' => 'so-upravitelj',
'role.comanager.description' => 'Oseba z velikim naborom upravljalskih funkcij.',
'role.manager.label' => 'Upravitelj',
'role.manager.low_case_label' => 'upravitelj',
'role.manager.description' => 'Upravitelj skupine. Lahko naredi večino stvari za skupino.',
'role.top_manager.label' => 'Vrhovni upravitelj',
'role.top_manager.low_case_label' => 'vrhovni upravitelj',
'role.top_manager.description' => 'Vrhovni upravitelj skupine. Lahko naredi vse v drevesu skupin.',
'role.admin.label' => 'Skrbnik',
'role.admin.low_case_label' => 'skrbnik',
'role.admin.description' => 'Skrbnik spletnega mesta.',

// Timesheet View form. See example at https://timetracker.anuko.com/timesheet_view.php.
'form.timesheet_view.submit_subject' => 'Zahteva za odobritev časovnega lista',
'form.timesheet_view.submit_body' => "Nov časovni list zahteva odobritev.<p>Uporabnik: %s.",
'form.timesheet_view.approve_subject' => 'Časovni list odobren',
'form.timesheet_view.approve_body' => "Vaš časovni list %s je bil odobren.<p>%s",
'form.timesheet_view.disapprove_subject' => 'Časovni list ni odobren',
'form.timesheet_view.disapprove_body' => "Vaš časovni list %s ni bil odobren.<p>%s",

// Display Options form. See example at https://timetracker.anuko.com/display_options.php.
'form.display_options.note_on_separate_row' => 'Opomba na ločeni vrstici',
'form.display_options.not_complete_days' => 'Dnevi, ki niso dokončani',
'form.display_options.inactive_projects' => 'Neaktivni projekti',
'form.display_options.cost_per_hour' => 'Cena na uro',
'form.display_options.custom_css' => 'Prilagojen CSS',
'form.display_options.custom_translation' => 'Prilagojen prevod',
);
