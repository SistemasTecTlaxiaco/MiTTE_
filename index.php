<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'libs/database.php';
require_once 'libs/model.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/app.php';
include_once 'includes/user_session.php';
require_once 'config/config.php';
$app = new App();

$nemail = new PHPMailer(true);


?>