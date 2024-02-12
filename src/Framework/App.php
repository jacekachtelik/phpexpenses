<?php

declare(strict_types=1);

namespace Framework;

/**
 * Główna klasa uruchamiająca aplikację.
 * 
 * Dodatkowy opis klasy
 * 
 * @package Framework
 * @author Jacek Achtelik <jacekachtelik@gmail.com>
 * @version 0.0.1 
 *
 */
class App {

    /**
     * Obiekt routera
     *
     * @var Router
     */
    private Router $router;

    public function __construct() {

        $this->router = new Router();
        
    }

    /**
     * Uruchamia aplikację
     *
     * @return void
     */
    public function run() {
        echo "Application is running";
    }

    /**
     * Metoda dodająca ścieżkę do routera
     *
     * @param string $path
     * @return void
     */
    public function add(string $path) {

        $this->router->add($path);

    }

}