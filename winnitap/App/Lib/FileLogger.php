<?php

namespace App\Lib;

class FileLogger implements ILogger
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function write($event)
    {
        // open the path
        $fh = fopen($this->path, 'a');

        // write event to path
        fputs($fh, $event."\n");
    }

    public function __destruct()
    {
        // close event path
        fclose($fh);
    }
}