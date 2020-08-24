<?php

### EDIT HERE ###

// DB CONNECT INFO
$db_host = "nwhazdrp7hdpd4a4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "pp9re17jou3m8tki";
$db_user = "zyon0b15hu56mfzf";
$db_pw = "soqikf537ljqn829";

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "page_hits";
$GLOBALS['info_table_name'] = "visitor_info";

### STOP EDITING HERE ###

// CONNECT TO DB
try {
	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>
