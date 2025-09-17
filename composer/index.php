<?php

use Egulias\EmailValidator\EmailValidator;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$validator = new EmailValidator();
