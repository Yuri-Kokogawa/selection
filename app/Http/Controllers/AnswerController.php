<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;


use App\Contributors;
use App\Categories;
class AnswerController extends Controller
{
    public function index(Request $request)
    {
        $posts = Contributors::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // answer/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('answer.index', ['headline' => $headline, 'posts' => $posts]);
    }
    
    
    
      public function create()
  {
      
      return view('answer.create');
  }
}


