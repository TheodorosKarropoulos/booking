<?php

/*
 * Define database
 * */

define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','ws-1');
define('DB_USER','root');
define('DB_PASS','');
define('DB_CHARSET', 'UTF8');


/*
 * Define paths
 * */
define('BASE_URL','http://localhost/booking');
define('LOGIN_PATH','login/');
define('MODEL_PATH','models/');
define('VIEW_PATH','views/');
define('CONTROLLER_PATH','controllers/');
define('LIBS_PATH','libs/');
define('HEADER_HTML','header.php');
define('FOOTER_HTML','footer.php');
define('CSS_PATH','css/');
define('JS_PATH','js/');
define('IMG_PATH','img/');
define('BOOTSTRAP_PATH','bootstrap/');
define('VIDEO_PATH', 'vid/');

//---- MENU ITEM'S PATH ----//
define('DASHBOARD_PATH','dashboard/');
define('STAFF_URL', 'staff/');
define('CLIENT_URL', 'client/');
define('SERVICE_URL','service/');
define('CALENDAR_PATH', 'calendar/');
define('USER_URL', 'user/');
define('SETUP_URL', 'setup/');

//---- Define Application's Formats ----//
define('DATE_FORMAT', 'yyyy-mm-dd');

/**
 * Define hash keys
 */

// This is for other hask keys
define('HASH_GENERAL_KEY', 'miaMYg@tonaugOUSt0');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'd7fn6y98w74dy2q7y#!@EWfsdf7612873y1');
// This is the hash algorithm
define('HASH_ALGO', 'sha256');