<?php

use Julianschmuckli\Restwork\Helper\HttpResponse;
use Julianschmuckli\Restwork\Interfaces\Route;
use Julianschmuckli\Restwork\RouteController;

class GetPlanets extends RouteController implements Route {
    private $planets = [];

    public function input($data)
    {
        $solarSystem = new Solarsystem();
        $this->planets = $solarSystem->getAllPlanets();
    }

    public function output(): ?HttpResponse
    {
        $response = new HttpResponse(200);
        $response->setMessage("Showing all the planets");
        $response->setBody($this->planets);
        return $response;
    }
}