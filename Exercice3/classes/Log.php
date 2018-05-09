<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/05/2018
 * Time: 14:45
 */

class Log
{
    public static function logWrite($data)
    {
        $directory = "/logs/";
        $file = date('Y-m-d') . ".log";
        $path = dirname(__DIR__) . $directory . $file;
        $data = date('H:i:s') . " " . $data;
        $handle = fopen($path, "a");
        if (flock($handle, LOCK_EX)) {
            fwrite($handle, $data . PHP_EOL);
            flock($handle, LOCK_UN);
        }
        fclose($handle);
    }