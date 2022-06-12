<?php

use Julianschmuckli\Restwork\Helper\HttpResponse;
use Julianschmuckli\Restwork\Interfaces\Route;
use Julianschmuckli\Restwork\RouteController;

class HelloWorld extends RouteController implements Route {
    public function input($data) {

    }

    public function output() : HttpResponse {
        $response = new HttpResponse(200);
        $response->setMessage("Hello world!");
        return $response;
    }
}