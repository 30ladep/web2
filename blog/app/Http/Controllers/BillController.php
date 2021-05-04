<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class BillController extends Controller
{
    public function paid(){
         return view('admin-pages.paid');
    }

    public function unpaid(){
         return view('admin-pages.unpaid');
    }
}
