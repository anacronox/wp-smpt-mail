<?php
/**
 * Plugin Name: Module SMTP MAIL
 * Plugin URI: https://github.com/anacronox/wp-smtp-mail
 * Description: Simple smtp configuration for wordpress
 * Version: 1.0
 * Author: Anacronox
 * Author URI: https://github.com/anacronox/
 */



add_action( 'phpmailer_init', 'customPhpmailerSmtp' );
function customPhpmailerSmtp( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = SMTP_server;  
    $phpmailer->SMTPAuth = SMTP_AUTH;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_username;
    $phpmailer->Password = SMTP_password;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->FromName = SMTP_NAME;
}