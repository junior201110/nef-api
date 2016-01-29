<?
require_once ('Settings.class.php');
Class DB{
    private static $PDOCONN;

    public static function openConnection(){
        //TODO stop here
        self::$PDOCONN = new PDO('host='.Settings::$HOST.';db=');
    }
}