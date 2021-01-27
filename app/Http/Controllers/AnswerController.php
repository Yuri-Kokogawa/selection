<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;


use App\Contributors;
use App\Categories;
use Auth;
use App\Answers;
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
    
      public function create(int $id ,Request $request)
  {
      
      $contributor= Contributors::find($id);
      if (empty($contributor)) {
        abort(404);    
      }
      
       $auth = Auth::user();
       
       $form=$request->all();
       $answer = new Answers([
          'user_id' =>$auth->id,
          'contributor_id'=>$contributor->id,
          'answer'=>$form['answer'],
        ]);
        $answer->save();
       
      return redirect("answer/view/{$contributor->id}");
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


