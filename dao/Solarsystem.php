<?php

use Julianschmuckli\Restwork\Interfaces\DAO;

class Solarsystem implements DAO {
    public function __construct()
    {
        
    }

    public function getAllPlanets() {
        $planets = [];
        $planets[] = new Planet(40000);

        return $planets;
    }
}