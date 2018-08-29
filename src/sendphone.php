<?php

namespace sendphone;

// require_once __DIR__ . '/../vendor/autoload.php';



class sendphone
{
    private static $ins       = array();
    private static $traceid   = "";
    private static $out_level = Analog\Analog::DEBUG;
    private static $app       = null;
    private static $sysErrDir = "_sys_error";
    private static $appErrDir = "_app_error";
	
    public function  __construct()
    {
		echo "start";
    }
	
    public static function logger($tag)
    {
        echo $tag;
    }
}
