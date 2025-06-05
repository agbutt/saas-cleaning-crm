<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class UpdateController extends Controller
{
    public function index()
    {
        return view('update');
    }

    public function run()
    {
        Artisan::call('migrate', ['--force' => true]);
        Artisan::call('config:cache');

        return redirect()->route('update')->with('status', 'Application updated');
    }
}
