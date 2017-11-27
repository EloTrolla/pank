<?php

namespace App;
/**
 * Created by PhpStorm.
 * User: henno
 * Date: 29/10/16
 * Time: 22:24
 */
class Pank1
{
    public static function get($kasutaja) {

        $kasutajanimi = addslashes($kasutaja);

        $kasutaja_andmed = get_first("SELECT * FROM konto WHERE kasutaja = '$kasutajanimi'");

        return $kasutaja_andmed;

    }

    public static function send($kasutaja_andmed) {



        $string = http_build_query($kasutaja_andmed);

        $ch = curl_init('www.mingileht.bla');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output=curl_exec($ch);

        if ($output === false) {

            stop(curl_error($ch));
        }

        curl_close($ch);
    }
}