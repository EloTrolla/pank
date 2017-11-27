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

        $kasutaja_andmed = Pank1::get($kasutaja);


        if (empty($kasutaja_andmed)) {
            stop(500, 'Kasutajat ei leitud');
        }

        if (!empty($kasutaja_andmed)) {
            Pank1::send($kasutaja_andmed);
        }

        stop(200, $kasutaja_andmed);

    }
}
