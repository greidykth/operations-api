<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ResetController extends Controller
{
    public function Reset()
    {
        Artisan::call('migrate:refresh');
        return 'OK';
    }
}
