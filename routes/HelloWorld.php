<?php

use Julianschmuckli\Restwork\Helper\HttpResponse;
use Julianschmuckli\Restwork\Interfaces\Route;
use Julianschmuckli\Restwork\RouteController;

class HelloWorld extends RouteController implements Route {
    private ?string $customText;

    public function input($data) {
        $this->customText = $data["text"];
    }

    public function output() : HttpResponse {
        $response = new HttpResponse(200);

        if (isset($this->customText)) {
            $response->setMessage($this->customText);
        } else {
            $response->setMessage("Hello world!");
        }

        return $response;
    }
}