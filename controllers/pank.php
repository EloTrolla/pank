<?php

namespace App;

//use App\Controller;
//use App\Pank1;

class pank extends Controller
{

    function AJAX_get()
    {
        if (empty($_POST['kasutaja'])) {
            stop(400, 'Sisesta kasutaja');
        }

        $kasutaja = $_POST['kasutaja'];

        try {

            $kasutaja_andmed = Pank1::get($kasutaja);

            if ($kasutaja_andmed != false) {
                Pank1::send($kasutaja_andmed);
            }

        }
        catch (\Exception $e) {
        stop(500, $e->getMessage());
        }

        stop(200, $kasutaja_andmed);

    }
}
