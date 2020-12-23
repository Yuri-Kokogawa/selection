<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SelectController extends Controller
{
    public function add()
  {
      return view('admin.select.create');
  }
  
  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/select/create');
  }  
}
