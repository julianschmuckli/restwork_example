<?php

use Julianschmuckli\Restwork\Helper\DB;
use Julianschmuckli\Restwork\Interfaces\Entity;

class Planet extends Entity {
    public int $radius;

    public function loadFromDB(DB $db): bool
    {
        return false;
    }

    public function saveToDB(DB $db): ?Planet
    {
        return $this;
    }
}