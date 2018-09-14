<?

ini_set('default_charset', 'UTF-8');
mb_internal_encoding("UTF-8");
define("HOST", "localhost");
define("DBNAME", "test");
define("DBUSER", "root");
define("DBPASSWORD", "");
//PDO connect
try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

