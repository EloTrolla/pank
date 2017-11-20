<?php

namespace App;

class pank extends Controller
{

    function AJAX_get()
    {
        if (empty($_POST['kasutaja'])) {
            stop(400, 'Sisesta kasutaja');
        }

        $kasutaja = $_POST['kasutaja'];

/*
        try {
            $kasutaja_andmed = Pank::get($kasutaja);
        }
        catch (\Exception $e) {
            stop(500, $e->getMessage());
        }

        stop(200, $filmi_andmed);
*/

    }
}