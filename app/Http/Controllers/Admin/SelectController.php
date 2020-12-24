<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Selections;

class SelectController extends Controller
{
    
    
    public function add()
  {
      return view('admin.select.create');
  }
  
  
  
  public function create(Request $request)
  {
       // 以下を追記
      // Varidationを行う
      $this->validate($request, Selections::$rules);
      $select = new Selections;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      
      // データベースに保存する
      $select->fill($form);
      $select->save();
      
      // admin/news/createにリダイレクトする
      return redirect('admin/select/create');
  }  
  
  
  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Selections::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Selections::all();
      }
      return view('admin.select.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
}
