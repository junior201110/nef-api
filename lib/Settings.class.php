<?
Class Settings{
    public static $HOST ;
    public static $USER ;
    public static $PASSWORD ;

    /**
     * @return mixed
     */
    public static function getHOST()
    {
        return self::$HOST;
    }

    /**
     * @param mixed $HOST
     */
    public static function setHOST($HOST)
    {
        self::$HOST = $HOST;
    }

    /**
     * @return mixed
     */
    public static function getUSER()
    {
        return self::$USER;
    }

    /**
     * @param mixed $USER
     */
    public static function setUSER($USER)
    {
        self::$USER = $USER;
    }

    /**
     * @return mixed
     */
    public static function getPASSWORD()
    {
        return self::$PASSWORD;
    }

    /**
     * @param mixed $PASSWORD
     */
    public static function setPASSWORD($PASSWORD)
    {
        self::$PASSWORD = $PASSWORD;
    }

    /**
     * @return mixed
     */
    public static function getDATABASENAME()
    {
        return self::$DATABASE_NAME;
    }

    /**
     * @param mixed $DATABASE_NAME
     */
    public static function setDATABASENAME($DATABASE_NAME)
    {
        self::$DATABASE_NAME = $DATABASE_NAME;
    }
    public static $DATABASE_NAME ;
    public static function getDefaultHost(){
        if(HOST_NAME != 'localhost'){
            self::setHOST('mysql.hostinger.com.br');
            self::setDATABASENAME('u771591478_nefdb');
            self::setUSER('u771591478_user');
            self::setPASSWORD('123404789');
        }else{
            self::setHOST('ec2-107-22-184-127.compute-1.amazonaws.com');
            self::setDATABASENAME('d3bn1e03hiioqj');
            self::setUSER('rvyizvfsixmgsa');
            self::setPASSWORD('_nZcZdlEfDrW0sPMH6PJrXne2o');
        }
    }
}