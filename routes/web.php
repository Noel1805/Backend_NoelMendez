<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/formulario', function () {

    return view ("form");

});

Route::get('/contacto', function (Request $request) {

    echo "<pre>";
    print_r($request->get("email"));
    print_r($request->get("mensaje"));
     echo "</pre>";

});


Route::get('/php-basico', function () {

    $nombre = "Noel Santiago ";
    $apellido = "Mendez Jaimes";
    $age =rand(10,54);
    $height = 1.77;
    $islogin = (bool) rand (0,1);

    $nombre_completo = $nombre . $apellido;
    echo $nombre_completo;

    echo "<h1>-------Estrcutura de datos-------</h1>";
    $message = "<br> Soy $nombre_completo tengo $age años";
    echo $message;


    if ($age <18 ){
        $message = $message . "Soy menor de edad";
    } else if ($age > 50 ){
        $message = $message . "Soy mayor de edad";
    } else{
                $message = "Esta viejo";
    }

    echo $message;
    $message .= " " .($islogin ? "Estoy Loguenado" : "No estas Loguenado");

    echo "<h1>-------Funciones-------</h1>";


    echo printUser($nombre_completo, $age);

    $productsName = ["Computador", "Teclado", 25, true, false];
    $teclado = [
        "name" => "teclado hp",
        "marca" => "hp",
        "precio" => 20000,
        "distribucion" => [
            "lat",
            "mx" ,
            "use"]
    ];
    
    $tecaldo["marca"] = "LG";
    echo $tecaldo["marca"];

    foreach ($productsName as $ites){
        echo $ites;
    }
});

function printUser(string $name, int $age){
    return "<br> $name tiene $age años";
}

