<?php
/**
 * Project: zed
 * Author: Zorca
 */

namespace Oxlib\Zed;

class Database
{
    protected $path;

    public function __construct($path)
    {
        if (! is_dir($path)) {
            throw new \Exception('Oxlib/Zed: Database directory not found');
        }
        if (! is_writeable($path)) {
            throw new \Exception('Oxlib/Zed: Database directory not writeable');
        }
        $this->path = $path;
    }
}
