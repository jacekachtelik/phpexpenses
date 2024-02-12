<?php

declare(strict_types=1);

namespace Framework;


/**
 * Klasa routera 
 * 
 * @package Framework
 * @author Jacek Achtelik <jacekachtelik@gmail.com>
 * @version 0.0.1
 */
class Router {

    private array $routes = [];

    public function add(string $path) {

        $this->routes[] = [
            'path'  =>  $path,
        ];

    }

}