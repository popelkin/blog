<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request,
    App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function dashboard() {
        return view('admin.dashboard');
    }

}