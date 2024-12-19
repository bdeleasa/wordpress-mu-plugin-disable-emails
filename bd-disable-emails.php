<?php
/**
 * Plugin Name:       Disable Emails
 * Plugin URI:        https://loudmouse.com
 * Description:       A small plugin for disabling emails locall.
 * Version:           1.0.0
 * Author:            Brianna Deleasa
 * Author URI:        https://briannadeleasa.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bd-disable-emails
 * Domain Path:       /languages
 */

namespace BriannaDeleasa\Plugin\DisableEmails;

/**
 * Disable emails on local environments manually.
 *
 * @since 1.0.0
 *
 * @param $phpmailer PHPMailer instance.
 * @return void
 */
function phpmailer_disable_emails( $phpmailer ) {
    $phpmailer->ClearAllRecipients();
}
add_action( 'phpmailer_init', 'phpmailer_disable_emails' );