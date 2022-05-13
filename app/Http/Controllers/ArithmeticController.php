<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function calc(String $operation, int $v1, int $v2)
    {
        switch($operation){
            case 'soma':
                $sign = '+';
                $result = $v1 + $v2;
                break;
            case 'subtrai':
                $sign = '-';
                $result = $v1 - $v2;
                break;
            case 'multiplica':
                $sign = 'X';
                $result = $v1 * $v2;
                break;
        }
        
        return view("calc", ['sign' => $sign, 'v1' => $v1, 'v2' => $v2, 'result' => $result]);
    }
}
