<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use Illuminate\Http\Request;

class Calculatorcontroller extends Controller
{
    public function index(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $op = $request->input('op');
        $result=0;

        if($op=='+')
        {
            $result=$num1+$num2;
            return $result;
        }

        else if($op=='-')
        {
            $result=$num1-$num2;
            return $result;
        }

         else if($op=='*')
        {
            $result=$num1*$num2;
            return $result;
        }

        else if($op=='/')
        {
            $result=$num1/$num2;
            return $result;
        }
        echo $result;
    }
}
