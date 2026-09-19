<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componenti';
$lang['admin_content'] = 'Contenuto';
$lang['admin_database_backup'] = 'Backup del Database';
$lang['admin_extensions'] = 'Estensioni';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Aiuto';
$lang['admin_languages'] = 'Lingue';
$lang['admin_logs'] = 'Log di Sistema';
$lang['admin_media'] = 'Libreria Media';
$lang['admin_modules'] = 'Moduli';
$lang['admin_plugins'] = 'Plugin';
$lang['admin_reports'] = 'Registro attività';
$lang['admin_settings'] = 'Impostazioni di Sistema';
$lang['admin_sysinfo'] = 'Informazioni di Sistema';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Firewall di sistema';
$lang['admin_themes'] = 'Temi';
$lang['admin_updates'] = 'Aggiornamenti di Sistema';
$lang['admin_users'] = 'Utenti';
$lang['admin_view_site'] = 'Vedi Sito';
$lang['per_page'] = 'Per Pagina';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Grazie per la creazione con <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nessun elemento attivo.} other{<b>#</b> su <b>%s</b> elementi sono attivi.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Installa';
$lang['admin_install_error'] = 'Installazione del pacchetto non riuscita.';
$lang['admin_install_error_com'] = 'Installazione non riuscita: %s';
$lang['admin_install_location_app'] = 'Solo questa applicazione';
$lang['admin_install_location_core'] = 'Tutte le applicazioni';
$lang['admin_install_location_select'] = '&#151; Seleziona posizione &#151;';
$lang['admin_install_success'] = 'Pacchetto installato correttamente.';
$lang['admin_install_upload'] = 'Carica';
$lang['admin_install_upload_error'] = 'Caricamento del pacchetto non riuscito.';
$lang['admin_install_upload_success'] = 'Pacchetto caricato correttamente.';
$lang['admin_install_upload_tip'] = 'Installa un pacchetto caricando qui il suo file <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Impossibile eliminare i vecchi file di backup.';
$lang['admin_database_backup_clean_success'] = '%d file di backup eliminati. %d spazio su disco liberato.';
$lang['admin_database_backup_create'] = 'Crea Backup';
$lang['admin_database_backup_create_confirm'] = 'Sei sicuro di voler creare un backup adesso?';
$lang['admin_database_backup_create_error'] = 'Impossibile creare il file di backup. Assicurati che la cartella <b>%s</b> sia scrivibile.';
$lang['admin_database_backup_create_success'] = 'File di backup del database <b>%s</b> creato con successo.';
$lang['admin_database_backup_delete_confirm'] = 'Sei sicuro di voler eliminare questi file di backup?';
$lang['admin_database_backup_delete_error'] = 'Impossibile eliminare i file di backup selezionati.';
$lang['admin_database_backup_delete_success'] = 'File di backup eliminati con successo.';
$lang['admin_database_backup_download_error'] = 'Impossibile scaricare il file di backup selezionato.';
$lang['admin_database_backup_download_success'] = 'File di backup scaricato con successo.';
$lang['admin_database_backup_lock_confirm'] = 'Sei sicuro di voler bloccare questi file di backup?';
$lang['admin_database_backup_lock_error'] = 'Impossibile bloccare i file di backup selezionati.';
$lang['admin_database_backup_lock_success'] = 'File di backup bloccati con successo.';
$lang['admin_database_backup_locked_error'] = 'Impossibile eliminare i file di backup bloccati.';
$lang['admin_database_backup_missing_error'] = 'Impossibile trovare il file di backup.';
$lang['admin_database_backup_unlock_confirm'] = 'Sei sicuro di voler sbloccare questi file di backup?';
$lang['admin_database_backup_unlock_error'] = 'Impossibile sbloccare i file di backup selezionati.';
$lang['admin_database_backup_unlock_success'] = 'File di backup sbloccati con successo.';
$lang['admin_database_prune'] = 'Pulizia';
$lang['admin_database_prune_confirm'] = 'Sei sicuro di voler pulire il database? Verrà creato un backup prima dell’esecuzione.';
$lang['admin_database_prune_error'] = 'Impossibile pulire il database.';
$lang['admin_database_prune_next'] = 'Prossima pulizia: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Database pulito con successo.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Elimina Logs';
$lang['admin_logs_delete_confirm'] = 'Sei sicuro di voler eliminare i file di log selezionati?';
$lang['admin_logs_delete_error'] = 'Impossibile eliminare i file di log.';
$lang['admin_logs_delete_success'] = 'File di log eliminati con successo.';
$lang['admin_logs_error_disabled'] = 'Il logging non è attualmente abilitato.';
$lang['admin_logs_error_empty'] = 'Nessun log trovato.';
$lang['admin_logs_error_missing'] = 'O il file di log non poteva essere trovato o era vuoto.';
$lang['admin_logs_tip'] = 'Il logging può creare rapidamente file molto grandi. Per siti in produzione, considera l’eliminazione di quelli vecchi.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Sei sicuro di voler eliminare le email selezionate?';
$lang['admin_emails_delete_error'] = 'Impossibile eliminare le email selezionate.';
$lang['admin_emails_delete_success'] = 'Le email selezionate sono state eliminate con successo.';
$lang['admin_emails_email_from'] = 'Inviato da';
$lang['admin_emails_mail_queue'] = 'Coda email';
$lang['admin_emails_mailer'] = 'Mail di Massa';
$lang['admin_emails_search'] = 'Cerca e-mail per oggetto o contenuto...';
$lang['admin_emails_send_error'] = 'Impossibile accodare l’email. Riprova.';
$lang['admin_emails_send_none'] = 'Nessun utente corrisponde ai criteri selezionati.';
$lang['admin_emails_send_success'] = 'L’email è stata accodata e verrà inviata a breve.';
$lang['admin_emails_send_to_banned'] = 'Invia agli utenti bannati.';
$lang['admin_emails_send_to_deleted'] = 'Invia agli utenti eliminati.';
$lang['admin_emails_send_to_disabled'] = 'Invia agli utenti inattivi.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Aggiungi Utente';
$lang['admin_users_all_users'] = 'Tutti gli Utenti';
$lang['admin_users_ban_confirm'] = 'Sei sicuro di voler bannare gli utenti selezionati?';
$lang['admin_users_ban_error'] = 'Impossibile bannare gli utenti selezionati.';
$lang['admin_users_ban_success'] = 'Gli utenti selezionati sono stati bannati con successo.';
$lang['admin_users_delete_confirm'] = 'Sei sicuro di voler eliminare gli utenti selezionati?';
$lang['admin_users_delete_error'] = 'Impossibile eliminare gli utenti selezionati.';
$lang['admin_users_delete_success'] = 'Gli utenti selezionati sono stati eliminati con successo.';
$lang['admin_users_disable_confirm'] = 'Sei sicuro di voler disabilitare gli utenti selezionati?';
$lang['admin_users_disable_error'] = 'Impossibile disabilitare gli utenti selezionati.';
$lang['admin_users_disable_success'] = 'Gli utenti selezionati sono stati disabilitati con successo.';
$lang['admin_users_edit'] = 'Modifica Utente';
$lang['admin_users_edit_error'] = 'Impossibile aggiornare l’utente.';
$lang['admin_users_edit_success'] = 'Utente aggiornato con successo.';
$lang['admin_users_enable_confirm'] = 'Sei sicuro di voler abilitare gli utenti selezionati?';
$lang['admin_users_enable_error'] = 'Impossibile abilitare gli utenti selezionati.';
$lang['admin_users_enable_success'] = 'Gli utenti selezionati sono stati abilitati con successo.';
$lang['admin_users_groups'] = 'Gruppi';
$lang['admin_users_lock_confirm'] = 'Sei sicuro di voler bloccare gli utenti selezionati?';
$lang['admin_users_lock_error'] = 'Impossibile bloccare gli utenti selezionati.';
$lang['admin_users_lock_success'] = 'Utenti selezionati bloccati con successo.';
$lang['admin_users_logged'] = 'Utenti Connessi';
$lang['admin_users_manage'] = 'Gestisci Utenti';
$lang['admin_users_remove_confirm'] = 'Sei sicuro di voler eliminare definitivamente gli utenti selezionati e tutti i loro dati?';
$lang['admin_users_remove_error'] = 'Impossibile eliminare definitivamente gli utenti selezionati e tutti i loro dati.';
$lang['admin_users_remove_success'] = 'Gli utenti selezionati e tutti i loro dati sono stati eliminati con successo.';
$lang['admin_users_restore_confirm'] = 'Sei sicuro di voler ripristinare gli utenti selezionati?';
$lang['admin_users_restore_error'] = 'Impossibile ripristinare gli utenti selezionati.';
$lang['admin_users_restore_success'] = 'Gli utenti selezionati sono stati ripristinati con successo.';
$lang['admin_users_search'] = 'Cerca nome o email...';
$lang['admin_users_unban_confirm'] = 'Sei sicuro di voler sbannare gli utenti selezionati?';
$lang['admin_users_unban_error'] = 'Impossibile sbannare gli utenti selezionati.';
$lang['admin_users_unban_success'] = 'Gli utenti selezionati sono stati sbannati con successo.';
$lang['admin_users_unlock_confirm'] = 'Sei sicuro di voler sbloccare gli utenti selezionati?';
$lang['admin_users_unlock_error'] = 'Impossibile sbloccare gli utenti selezionati.';
$lang['admin_users_unlock_success'] = 'Utenti selezionati sbloccati con successo.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Cancella Log';
$lang['admin_reports_clear_confirm'] = 'Sei sicuro di voler cancellare il registro delle azioni?';
$lang['admin_reports_clear_error'] = 'Impossibile cancellare il registro delle azioni.';
$lang['admin_reports_clear_success'] = 'Registro delle azioni cancellato con successo.';
$lang['admin_reports_latest_actions'] = 'Ultime Azioni';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Sei sicuro di voler eliminare i file selezionati?';
$lang['admin_media_delete_error'] = 'Impossibile eliminare i file.';
$lang['admin_media_delete_success'] = 'File eliminati con successo.';
$lang['admin_media_file_delete_error'] = 'Impossibile eliminare il file.';
$lang['admin_media_file_delete_success'] = 'File eliminato con successo.';
$lang['admin_media_file_update_error'] = 'Impossibile aggiornare il file.';
$lang['admin_media_file_update_success'] = 'File aggiornato con successo.';
$lang['admin_media_search'] = 'Cerca per nome, descrizione o nome file...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nessun modulo attivo.} other{<b>#</b> su <b>%s</b> moduli sono attivi.}';
$lang['admin_modules_add'] = 'Aggiungi Modulo';
$lang['admin_modules_delete_confirm'] = 'Sei sicuro di voler eliminare il modulo: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Impossibile eliminare il modulo.';
$lang['admin_modules_delete_success'] = 'Modulo eliminato con successo.';
$lang['admin_modules_disable_all_confirm'] = 'Sei sicuro di voler disabilitare tutti i moduli?';
$lang['admin_modules_disable_all_error'] = 'Impossibile disabilitare tutti i moduli.';
$lang['admin_modules_disable_all_success'] = 'Tutti i moduli sono stati disabilitati con successo.';
$lang['admin_modules_disable_confirm'] = 'Sei sicuro di voler disabilitare il modulo: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Impossibile disattivare il modulo.';
$lang['admin_modules_disable_success'] = 'Modulo disattivato con successo.';
$lang['admin_modules_enable_all_confirm'] = 'Sei sicuro di voler abilitare tutti i moduli?';
$lang['admin_modules_enable_all_error'] = 'Impossibile abilitare tutti i moduli.';
$lang['admin_modules_enable_all_success'] = 'Tutti i moduli sono stati abilitati con successo.';
$lang['admin_modules_enable_confirm'] = 'Sei sicuro di voler abilitare il modulo: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Impossibile attivare il modulo.';
$lang['admin_modules_enable_success'] = 'Modulo attivato con successo.';
$lang['admin_modules_install_tip'] = 'I moduli aggiungono nuove funzionalità al tuo sito. Esplora i moduli disponibili nella <a href="%s" target="_blank" rel="noopener">directory dei moduli</a> o carica un pacchetto <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nessun plugin attivo.} other{<b>#</b> su <b>%s</b> plugin sono attivi.}';
$lang['admin_plugins_add'] = 'Aggiungi Plugin';
$lang['admin_plugins_delete_confirm'] = 'Sei sicuro di voler eliminare il plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Impossibile eliminare il plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin eliminato con successo.';
$lang['admin_plugins_disable_all_confirm'] = 'Sei sicuro di voler disabilitare tutti i plugin?';
$lang['admin_plugins_disable_all_error'] = 'Impossibile disabilitare tutti i plugin.';
$lang['admin_plugins_disable_all_success'] = 'Tutti i plugin sono stati disabilitati con successo.';
$lang['admin_plugins_disable_confirm'] = 'Sei sicuro di voler disattivare il plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Impossibile disattivare il plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin disattivato con successo.';
$lang['admin_plugins_enable_all_confirm'] = 'Sei sicuro di voler abilitare tutti i plugin?';
$lang['admin_plugins_enable_all_error'] = 'Impossibile abilitare tutti i plugin.';
$lang['admin_plugins_enable_all_success'] = 'Tutti i plugin sono stati abilitati con successo.';
$lang['admin_plugins_enable_confirm'] = 'Sei sicuro di voler attivare il plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Impossibile attivare il plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin attivato con successo.';
$lang['admin_plugins_install_tip'] = 'I plugin estendono le funzionalità esistenti con opzioni o integrazioni extra. Installa dal <a href="%s" target="_blank" rel="noopener">directory dei plugin</a> o carica un file <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Aggiungi Tema';
$lang['admin_themes_delete_confirm'] = 'Sei sicuro di voler eliminare il tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Impossibile eliminare il tema.';
$lang['admin_themes_delete_error_active'] = 'Non puoi eliminare il tema attualmente attivo.';
$lang['admin_themes_delete_success'] = 'Tema eliminato con successo.';
$lang['admin_themes_disable_confirm'] = 'Sei sicuro di voler disattivare il tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Impossibile disattivare il tema.';
$lang['admin_themes_disable_success'] = 'Tema disattivato con successo.';
$lang['admin_themes_enable_confirm'] = 'Sei sicuro di voler attivare il tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Impossibile attivare il tema.';
$lang['admin_themes_enable_success'] = 'Tema attivato con successo.';
$lang['admin_themes_install_tip'] = 'I temi modificano l’aspetto e il layout del tuo sito. Scegli dalla <a href="%s" target="_blank" rel="noopener">libreria dei temi</a> o carica un file <b>.zip</b> per installarne uno personalizzato.';
$lang['admin_themes_none_tip'] = 'Questa applicazione è in esecuzione senza un tema. Installane uno per personalizzare l’interfaccia pubblica.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Impossibile aggiornare le posizioni dei menu.';
$lang['admin_menus_assign_success'] = 'Posizioni dei menu aggiornate con successo.';
$lang['admin_menus_header'] = 'Ci sono <b>%s</b> posizioni di menu disponibili.';
$lang['admin_menus_location'] = 'Posizione';
$lang['admin_menus_locations'] = 'Posizioni Menu';
$lang['admin_menus_manage'] = 'Gestisci Menu';
$lang['admin_menus_menu'] = 'Menu Assegnato';
$lang['admin_menus_none'] = '&#151; Nessuno &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Aggiungi lingua';
$lang['admin_languages_default_confirm'] = 'Sei sicuro di voler impostare questa lingua come lingua predefinita del sito?';
$lang['admin_languages_default_error'] = 'Impossibile cambiare la lingua predefinita.';
$lang['admin_languages_default_error_nochange'] = 'Questa lingua è già quella predefinita.';
$lang['admin_languages_default_success'] = 'Lingua predefinita cambiata con successo.';
$lang['admin_languages_disable_all_confirm'] = 'Sei sicuro di voler disabilitare tutte le lingue?';
$lang['admin_languages_disable_all_error'] = 'Impossibile disabilitare tutte le lingue.';
$lang['admin_languages_disable_all_success'] = 'Tutte le lingue sono state disabilitate con successo.';
$lang['admin_languages_disable_confirm'] = 'Sei sicuro di voler disabilitare la lingua: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Impossibile disabilitare la lingua.';
$lang['admin_languages_disable_error_default'] = 'La lingua predefinita non può essere disabilitata.';
$lang['admin_languages_disable_error_nochange'] = 'Questa lingua è già disabilitata.';
$lang['admin_languages_disable_success'] = 'Lingua disabilitata con successo.';
$lang['admin_languages_enable_all_confirm'] = 'Sei sicuro di voler abilitare tutte le lingue?';
$lang['admin_languages_enable_all_error'] = 'Impossibile abilitare tutte le lingue.';
$lang['admin_languages_enable_all_success'] = 'Tutte le lingue sono state abilitate con successo.';
$lang['admin_languages_enable_confirm'] = 'Sei sicuro di voler abilitare la lingua: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Impossibile abilitare la lingua.';
$lang['admin_languages_enable_error_nochange'] = 'Questa lingua è già abilitata.';
$lang['admin_languages_enable_success'] = 'Lingua attivata con successo.';
$lang['admin_languages_install_tip'] = 'Le lingue aggiungono traduzioni per l’interfaccia e i contenuti del tuo sito. Sfoglia le lingue disponibili nella <a href="%s" target="_blank" rel="noopener">directory delle lingue</a> oppure carica un pacchetto <b>.zip</b> per installarne una tua.';
$lang['admin_languages_tip'] = 'Abilita, disabilita e imposta la lingua predefinita del sito. Le lingue abilitate sono disponibili per i visitatori del sito.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nuovi aggiornamenti disponibili!';
$lang['update_backup_error'] = 'Impossibile creare un backup del pacchetto esistente. L’aggiornamento è stato interrotto.';
$lang['update_check_disabled'] = 'I controlli automatici degli aggiornamenti sono disabilitati. Abilitali per visualizzare gli aggiornamenti.';
$lang['update_check_error'] = 'Impossibile eseguire il controllo degli aggiornamenti in questo momento.';
$lang['update_check_success'] = 'Controllo degli aggiornamenti completato con successo.';
$lang['update_install_error'] = 'Il pacchetto non può essere installato. La versione precedente è stata mantenuta.';
$lang['update_install_success'] = 'Pacchetto aggiornato con successo alla versione più recente.';
$lang['update_interval_3days'] = 'Ogni 3 giorni';
$lang['update_interval_biweekly'] = 'Ogni 2 settimane';
$lang['update_interval_daily'] = 'Ogni giorno';
$lang['update_interval_monthly'] = 'Una volta al mese';
$lang['update_interval_weekly'] = 'Una volta a settimana';
$lang['update_not_available'] = 'Il tuo sito web è aggiornato.';
$lang['update_rollback_error'] = 'Impossibile ripristinare la versione precedente. Potrebbe essere necessario un intervento manuale.';
$lang['update_rollback_success'] = 'Versione precedente ripristinata con successo.';
$lang['updates_available'] = 'Aggiornamenti disponibili';
$lang['updates_check_now'] = 'Controlla ora';
$lang['updates_check_now_confirm'] = 'Sei sicuro di voler controllare gli aggiornamenti ora?';
$lang['updates_current_version'] = 'Versione attuale';
$lang['updates_enable'] = 'Abilita aggiornamenti';
$lang['updates_last_check'] = 'Ultimo controllo: %s';
$lang['updates_latest_version'] = 'Versione più recente';
$lang['updates_next_check'] = 'Prossimo controllo programmato: %s';
$lang['updates_previous_version'] = 'Versione precedente';
$lang['updates_recent'] = 'Aggiornati di recente';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blocco dell’indirizzo IP specificato non riuscito.';
$lang['admin_firewall_ban_success'] = 'L’indirizzo IP è stato bloccato con successo.';
$lang['admin_firewall_block_ip'] = 'Blocca indirizzo IP';
$lang['admin_firewall_delete_confirm'] = 'Sei sicuro di voler sbloccare gli indirizzi IP selezionati?';
$lang['admin_firewall_delete_error'] = 'Sblocco degli indirizzi IP selezionati non riuscito.';
$lang['admin_firewall_delete_success'] = 'Gli indirizzi IP selezionati sono stati sbloccati con successo.';
$lang['admin_firewall_duration'] = 'Durata del blocco';
$lang['admin_firewall_permanent'] = 'Permanente';
$lang['admin_firewall_reason'] = 'Motivo del blocco';
$lang['admin_firewall_tip'] = 'Visualizza e gestisci gli indirizzi IP bloccati dal firewall a causa di violazioni ripetute o attività sospette.';

// Settings
$lang['404_ban_duration'] = 'Durata del ban 404';
$lang['404_threshold'] = 'Limite di errori 404';
$lang['uri_ban_duration'] = 'Durata del ban URI';
$lang['uri_strike_threshold'] = 'Limite di strike URI';
