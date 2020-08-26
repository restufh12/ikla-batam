<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'mail.iklabatam.com', 
    'smtp_port' => 465,
    'smtp_user' => 'admin@iklabatam.com',
    'smtp_pass' => 'admin@iklabatam.com',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset'=>'utf-8',
    'wordwrap' => TRUE,
    'mailtype' => 'html'
);
