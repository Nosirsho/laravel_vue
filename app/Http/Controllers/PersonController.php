<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons =[
            [
                "id" => 1,
                "name" => "Max",
                "age" => 22,
                "job" => "Tasher"
            ],
            [
                "id" => 2,
                "name" => "Zollo",
                "age" => 23,
                "job" => "Juker"
            ],
            [
                "id" => 3,
                "name" => "Noize",
                "age" => 27,
                "job" => "Tasher"
            ],
            [
                "id" => 4,
                "name" => "Thanos",
                "age" => 19,
                "job" => "Juker"
            ],
            [
                "id" => 5,
                "name" => "Aziz",
                "age" => 17,
                "job" => "Loxer"
            ],
        ];
        return $persons;
    }
}
