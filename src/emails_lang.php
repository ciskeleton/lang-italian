<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Aggiornamenti di sistema disponibili';
$lang['emails_updates_available_message'] = <<<EOT
Ciao,

Sono stati rilevati nuovi aggiornamenti di sistema per {site_anchor}.

Questi aggiornamenti possono includere correzioni di sicurezza, miglioramenti delle prestazioni o nuove funzionalità.
Ti consigliamo di esaminarli il prima possibile.

È possibile esaminare e gestire gli aggiornamenti disponibili dalla dashboard di amministrazione:
{link}

Se gli aggiornamenti sono già stati esaminati o applicati, non è necessaria alcuna ulteriore azione.

Questo è un messaggio di sistema automatico inviato da {site_name}.
Si prega di non rispondere a questa e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Attivazione dell\'account';
$lang['emails_account_activation_request_message'] = <<<EOT
Ciao {name},

Grazie per esserti registrato su {site_anchor}. Il tuo account è stato creato e deve essere attivato prima di poterlo utilizzare.

Per attivare il tuo account, fai clic sul seguente link o copialo e incollalo nel tuo browser: {link}

Cordiali saluti,
-- Team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nuovo link di attivazione';
$lang['emails_account_activation_resend_message'] = <<<EOT
Ciao {name},

Hai recentemente richiesto un nuovo link di attivazione su {site_anchor} perché il tuo account non era attivo.
Per attivare il tuo account, clicca sul seguente link o copialo e incollalo nel tuo browser:
{link}

Se non hai fatto questa richiesta, non è necessaria alcuna ulteriore azione.

Questa azione è stata richiesta da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Account attivato';
$lang['emails_account_activation_success_message'] = <<<EOT
Ciao {name},

Il tuo account su {site_anchor} è stato attivato con successo. Ora puoi effettuare il <a href="{login_url}" target="_blank" rel="noopener">login</a> ogni volta che desideri.

Speriamo che tu possa goderti la tua permanenza, per favore accetta i nostri cordiali saluti.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Account in attesa di approvazione';
$lang['emails_account_approval_pending_message'] = <<<EOT
Ciao {name},

Grazie per esserti unito a noi su {site_anchor}. Il tuo account è stato creato ma necessita dell’approvazione da parte di un amministratore del sito prima di diventare attivo.
Ci scusiamo sinceramente per questo passaggio cruciale, ma è solo a scopo di sicurezza.

Riceverai una email di conferma non appena il tuo account verrà approvato.

Speriamo che tu possa goderti la tua permanenza, per favore accetta i nostri cordiali saluti.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Account approvato';
$lang['emails_account_approval_success_message'] = <<<EOT
Ciao {name},

Ottime notizie! Il tuo account su {site_anchor} è stato approvato.

Ora puoi accedere e iniziare subito a utilizzare il tuo account:
{link}

Siamo felici di averti con noi.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Account ripristinato';
$lang['emails_account_restored_message'] = <<<EOT
Ciao {name},

Questa email conferma che il tuo account su {site_anchor} è stato ripristinato con successo.

Benvenuto di nuovo con noi e speriamo che questa volta tu possa goderti il tuo soggiorno.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Benvenuto in {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Ciao {name},

Molte persone hanno sequenze di benvenuto molto lunghe dopo che ti registri sul loro sito.

Buone notizie: noi non siamo come la maggior parte delle persone.
Ma, vogliamo darti comunque il benvenuto e ringraziarti per esserti unito a noi su {site_anchor}.

Speriamo che tu apprezzi il tuo soggiorno, per favore accetta i nostri cordiali saluti.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Richiesta di cambio email';
$lang['emails_email_change_request_message'] = <<<EOT
Ciao {name},

Stai ricevendo questa email perché abbiamo ricevuto una richiesta di cambio email per il tuo account su {site_anchor}.

Clicca sul seguente link o copialo e incollalo nel tuo browser se desideri procedere:
{link}

Se non hai richiesto il cambio dell’email, non è necessaria alcuna ulteriore azione.

Questa azione è stata richiesta da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Indirizzo email modificato';
$lang['emails_email_change_success_message'] = <<<EOT
Ciao {name},

Questa email conferma che il tuo indirizzo email utilizzato su {site_anchor} è stato cambiato con successo.

Se non hai eseguito questa azione, ti preghiamo di contattarci il prima possibile per risolvere questo problema.

Questa azione è stata eseguita da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Avviso di accesso non riuscito';
$lang['emails_login_alert_failure_message'] = <<<EOT
Ciao {name},

Qualcuno ha recentemente utilizzato password errate per tentare di accedere al tuo account {site_name}.

Data del server: {date}
Dispositivo: {browser}, {platform}
Indirizzo IP: {ip_link}

Se non sei stato tu, non preoccuparti, il tentativo di accesso non ha avuto successo.

Se sei stato tu e non ricordi la password, clicca sul link qui sotto per reimpostarla:
{reset_link}

Se hai problemi ad accedere al tuo account, contatta il nostro team o richiedi un link di accesso rapido.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notifica di accesso riuscito';
$lang['emails_login_alert_success_message'] = <<<EOT
Ciao {name},

Ti inviamo questa email dopo aver effettuato correttamente l’accesso al tuo account {site_name}.

Data del server: {date}
Dispositivo: {browser}, {platform}
Indirizzo IP: {ip_link}

Se sei stato tu ad accedere, puoi tranquillamente ignorare questa email.

Se non sei stato tu, cambia immediatamente la tua password per proteggere il tuo account.

Per qualsiasi assistenza, contatta il nostro team di supporto.

-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Link di accesso rapido';
$lang['emails_login_magic_link_message'] = <<<EOT
Ciao {name},

Hai richiesto un accesso con un clic al tuo account su {site_anchor}.

Fai clic sul link qui sotto, oppure copialo e incollalo nel browser per accedere immediatamente:
{link}

Questo link scadrà tra 15 minuti. Se non hai richiesto questo accesso, ignora questa email.

Questa azione è stata richiesta da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autenticazione a due fattori';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Ciao {name},

Il tuo codice di autenticazione a due fattori è: <strong>{code}</strong>

Puoi sempre disattivare l’autenticazione a due fattori nelle impostazioni del tuo account.

Questa azione è stata eseguita da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Richiesta di reimpostazione password';
$lang['emails_password_change_request_message'] = <<<EOT
Ciao {name},

Stai ricevendo questa email perché abbiamo ricevuto una richiesta di reset della password per il tuo account su {site_anchor}.

Clicca sul seguente link o copialo e incollalo nel tuo browser se desideri procedere:
{link}

Se non hai richiesto il reset della password, non è necessaria alcuna ulteriore azione.

Questa azione è stata richiesta da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Password modificata con successo';
$lang['emails_password_change_success_message'] = <<<EOT
Ciao {name},

Questa email conferma che la tua password su {site_anchor} è stata cambiata con successo. Ora puoi effettuare il <a href="{login_url}" target="_blank" rel="noopener">login</a> utilizzando quella nuova.

Se non hai eseguito questa azione, ti preghiamo di contattarci il prima possibile per risolvere questo problema.

Questa azione è stata eseguita da questo indirizzo IP: {ip_link}.

Cordiali saluti,
-- Il team di {site_name}.
EOT;
