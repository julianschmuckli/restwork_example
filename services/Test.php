<?php

use Julianschmuckli\Restwork\Helper\HttpMethod;
use Julianschmuckli\Restwork\Interfaces\Service;
use Julianschmuckli\Restwork\ServiceController;

class Test extends ServiceController implements Service {
    public function setup() {
        parent::registerRoute("helloWorld", HttpMethod::GET, "HelloWorld");
    }
}