<?php namespace App;
/**
 * Created by PhpStorm.
 * User: henno
 * Date: 29/10/16
 * Time: 22:24
 */
class Pank
{
    public static function get($kasutaja) {

        if (self::get_local($kasutaja) == false) {
            return "Sellist kasutajat ei ole";
            exit();
        }
        else {
            mysqli_connect();
        }


        public function get_local($kasutaja) {

            return get_first("SELECT * FROM konto WHERE kasutaja = '$kasutaja'");

        }
    }
}