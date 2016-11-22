<?php
include_once 'IConnect.php';
class UniversalConnect implements IConnect
{
    private static $server = IConnect::HOST;
    private static $db = IConnect::DBNAME;
    private static $user = IConnect::UNAME;
    private static $pass = IConnect::PW;
    private static $hookup;

    public static function connect()
    {
        self::$hook = mysqli_connect(self::$server,self::$user,self::$pass,self::$db);
        if(self::$hook){
            echo 'connect success';
        }elseif(mysqli_connect_error(self::$hook)){
            printf("fail:%s",mysql_connect_error());
        }
        return self::$hook;
    }
}