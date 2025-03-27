<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma(){
        $x = 28;
        $y = 150;
        $result = $x+$y;

        return 'La suma es : ' . $result;
    }

    public function resta(){
        $x = 28;
        $y = 150;
        $result = $x-$y;

        return 'La resta es : ' . $result;
    }

    public function multiplicacion(){
        $x = 28;
        $y = 150;
        $result = $x*$y;

        return 'La multiplicacion es :';
    }

    public function division(){
        $x = 28;
        $y = 0;

        if($y== 0){
            return "el dividendo no puede ser cero";
        }

        $result = $x/$y;

        return 'La division es :';
    }
}
