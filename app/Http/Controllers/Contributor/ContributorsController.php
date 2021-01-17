<?php

namespace App\Http\Controllers\Contributor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contributors;
use App\Categories;
use Auth;
class ContributorsController extends Controller
{
    
    
    public function add()
  {
      
      return view('contributor.create');
  }
  
  
  
     public function create(Request $request)
  {
       // 以下を追記
      // Varidationを行う
      $this->validate($request, Contributors::$rules);
      $contributor = new Contributors;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      
      // データベースに保存する
      $contributor->fill($form);
      $contributor->save();
      
      // contributor/createにリダイレクトする
      return redirect('contributor/create');
  }  
  
  
  
     public function index(Request $request)
  {
    
      
      $cond_category = $request->cond_category;
      if ($cond_category != '') {
          // 検索されたら検索結果を取得する
          $posts = Contributors::where('category_name_id', $cond_category)->get();
      } else {
          // それ以外はすべてのアンケートを取得する
          $posts = Contributors::all();
      }
      
       
      
      return view('contributor.index', ['posts' => $posts, 'cond_category' => $cond_category]);
  }
  
  
     public function edit(int $id)
  {
      // Contributors Modelからデータを取得する
      $contributor= Contributors::find($id);
      if (empty($contributor)) {
        abort(404);    
      }
      return view('contributor.edit', ['contributor_form' => $contributor]);
  }
     
     
     public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Contributors::$rules);
      // Contibutors Modelからデータを取得する
      $contributor = Contributors::find($request->id);
      // 送信されてきたフォームデータを格納する
      $contributor_form = $request->all();
      unset($contributor_form['_token']);

      // 該当するデータを上書きして保存する
      $contributor->fill($contributor_form)->save();

      return redirect('contributor/index');
  }
  
  
     public function delete(int $id)
  {
      // 該当するContibutors Modelを取得
      $contributor = Contributors::destroy($id);
      // 削除する
     
      return redirect('contributor/index');
  }

   
    public function info()
  {
      $auth = Auth::user();

      return view('contributor/info',[ 'auth' => $auth ]);
  }
  
    
    public function info_edit()
  {
      $auth = Auth::user();
      
      return view('contributor.info_edit',[ 'auth' => $auth ]);
  }
  
    public function password()
  {
      $auth = Auth::user();
      
      return view('contributor.password',[ 'auth' => $auth ]);
  }
  
}

    