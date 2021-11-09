<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
    public function index(){
        return DB::table('news')->get();
    }
}
