<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiIngestionController extends Controller
{

    public function apiIngestion()
    {
        return Http::get(url: 'https://dummyjson.com/posts')->json();
    }
}
