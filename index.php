<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'libs/database.php';
require_once 'libs/model.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/app.php';
include_once 'includes/user_session.php';
include_once 'includes/sessionController.php';
require_once 'config/config.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$app = new App();

$nemail = new PHPMailer(true);


?>