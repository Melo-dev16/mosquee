<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $ev = $this->event->findAll();

        foreach ($ev as $e) {
            echo "Event N°$e->id: $e->image<br>";
        }
    }
}
