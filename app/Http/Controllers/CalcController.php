<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calcs($i1, $operator, $i2)
    {
        if ($operator == 'addition') {
            $result = $i1 + $i2;
        } elseif ($operator == 'subtraction') {
            $result = $i1 - $i2;
        } elseif ($operator == 'multiplication') {
            $result = $i1 * $i2;
        } elseif ($operator == 'division') {
            $result = $i1 / $i2;
        } else {
            $result = 'エラー';
        }

        return view('calcs.result1', ['result' => $result]);
    }
}
