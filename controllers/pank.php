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


    }
}