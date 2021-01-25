<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;


use App\Contributors;
use App\Categories;
use Auth;
class AnswerController extends Controller
{
    public function index(Request $request)
    {
        $posts = Contributors::all()->sortByDesc('updated_at');
        
        $auth = Auth::user();

        // answer/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('answer.index', ['posts' => $posts],[ 'auth' => $auth ]);
    }
    
     public function create_view(int $id)
    {
        $contributor = Contributors::find($id);
        if (empty($contributor)) {
            abort(404);
        }

        $auth = Auth::user();

        return view('answer.create', ['auth' => $auth], ['contributor_form' => $contributor]);
    }
    
      public function create(int $id ,int $answer_num)
  {
      $contributor= Contributors::find($id);
      if (empty($contributor)) {
        abort(404);    
      }
      
       $auth = Auth::user();
       
       $answer = new Answers([
          'user_id' =>$auth->id,
          'contributor_id'=>$contributor->id,
          'answer'=>$answer_num,
        ]);
        $answer->save();
       
      return view('answer.view',['contributor' => $contributor]);
  }
  
  
      public function view(int $id)
  {
      
       $contributor= Contributors::find($id);
      if (empty($contributor)) {
        abort(404);    
      }
      
       $auth = Auth::user();
       
    
      return view('answer.view',[ 'auth' => $auth ],['contributor' => $contributor]);
  }
}


