<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculatorcontroller extends Controller
{
    public function index(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $op1=$request->submit('+');
        $op2=$request->submit('-');
        $op3=$request->submit('/');
        $op4=$request->submit('*');
        $result=0;

        if($op1==true)
        {
            $result=$num1+$num2;
            echo $result;
        }

        if($op2==true)
        {
            $result=$num1-$num2;
            echo $result;
        }

        if($op3==true)
        {
            $result=$num1/$num2;
            echo $result;
        }

        if($op4==true)
        {
            $result=$num1*$num2;
            echo $result;
        }
    }
}
