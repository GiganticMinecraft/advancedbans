<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

require_once "include/functions/parse.php";
require_once "include/functions/clean.php";

require_once "static/database.php";

require_once "AdvancedBan/User/Language.class.php";
require_once "AdvancedBan/User/Theme.class.php";

require_once "AdvancedBan/Storage/Cookie.class.php";

require_once "AdvancedBan/Database.class.php";
require_once "AdvancedBan/Configuration.class.php";
require_once "AdvancedBan/Template.class.php";
require_once "AdvancedBan/Request.class.php";
require_once "AdvancedBan/Network.class.php";

require_once "AdvancedBan/AdvancedBan.class.php";

AdvancedBan::initialize(__DIR__);