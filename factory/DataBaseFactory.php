<?php

namespace factory;

use classes\MySql;

const  MYSQL = "MYSQL";
const  SQLSERVER = "SQLSERVER";

class DataBaseFactory
{

    public static function create($dbConfig, $driver) {

        switch($driver) {
            case MYSQL:
                return new MySql($dbConfig);
                break;
            case SQLSERVER:
                //return new SqlServer();
                break;
        }
    }
}

?>