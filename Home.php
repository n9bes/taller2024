<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){   
        echo view('plantillas/Head');
        echo view('plantillas/pHeader');
        echo view('pages/principal');
        echo view('plantillas/pFooter');
    }

    // public function producto(){
    //     echo view('plantillas/Head');
    //     echo view('plantillas/pHeader');
    //     echo view('pages/producto');
    //     echo view('plantillas/pFooter');
    // }

    public function nosotros(){
        echo view('plantillas/Head');
        echo view('plantillas/pHeader');
        echo view('pages/nosotros');
        echo view('plantillas/pFooter');
    }

    public function comercio(){
        echo view('plantillas/Head');
        echo view('plantillas/pHeader');
        echo view('pages/comercio');
        echo view('plantillas/pFooter');
    }

    public function contacto(){
        echo view('plantillas/Head');
        echo view('plantillas/pHeader');
        echo view('pages/contacto');
        echo view('plantillas/pFooter');
    }

    public function tOs(){
        echo view('plantillas/Head');
        echo view('plantillas/pHeader');
        echo view('pages/tOs');
        echo view('plantillas/pFooter');
    }
     
    // public function carrito(){
    //     echo view('plantillas/pHeader');
    //     echo view('pages/carrito');
    //     echo view('plantillas/pFooter');
    // }
    
    // public function crearCuenta(){
    //     echo view('plantillas/pHeader');
    //     echo view('pages/crearCuenta');
    //     echo view('plantillas/pFooter');
    // }
    
    // public function login(){
    //     echo view('plantillas/pHeader');
    //     echo view('pages/Login');
    //     echo view('plantillas/pFooter');
    // }
}
