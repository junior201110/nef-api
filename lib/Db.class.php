<?
require_once ('Settings.class.php');
Class DB{
    private static $PDOCONN;

    public static function openConnection(){
        Settings::getDefaultHost();
        self::$PDOCONN = new PDO('pgsql:host='.Settings::getHOST().';dbname='.Settings::getDATABASENAME(),
            Settings::getUSER(),
            Settings::getPASSWORD()
        );
        var_dump(self::$PDOCONN);
    }
}