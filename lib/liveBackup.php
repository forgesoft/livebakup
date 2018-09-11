<?php

namespace LiveBackup;

class liveBackup{

    CONST VERSION = 1.0;

    public static function init($argv, $options){
        if(isset($options['v'])){
            return self::getVersion();
        }


    }

    public static function getVersion(){
        return self::VERSION;
    }


}