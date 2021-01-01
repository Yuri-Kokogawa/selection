@extends('layouts.app')

@section('title', '投稿したアンケート')

@section('content')
<main class="py-4">
                
                    <div class="container">
        <div class="contain-top card mw-100 mh-20 mb-2">
            <div class="row no-gutters mt-2">
    <div class="mx-2 row no-gutters">
        <h5 class="card">Yuri-Kokogawa さん</h5>
    </div>
    <div class="mx-2 row no-gutters">
        <div class="reviews-count">
            <h5 class="card">レビュー投稿: 0 件</h5>
        </div>
        <div class="eval-reviews mt-1 ml-2">
            <h5 class="card d-inline">総合評価:<a class="review_eval"> -</a> [0件]</h5>
        </div>
    </div>
</div>
<div class="row no-gutters mt-2">
    <div class="col-md-6 col-lg-4">
        <div class="row no-gutters">
            <div class="col-4 col-md-5">
                <div class="mx-auto my-auto ml-md-3">
                    <img class="profile-image" src="http://serene-atoll-92507.herokuapp.com/images/figure_standing.png" alt="👤">
                </div>
            </div>
            <div class="col-8 col-md-7">
                <div class="mx-2 mx-md-0 my-2">
                    <h5 class="card text-center">年齢: -</h5>
                </div>
                <div class="mx-2 mx-md-0 my-2">
                    <h5 class="card text-center">性別: -</h5>
                </div>
                <div class="mx-2 mx-md-0 my-2">
                    <h5 class="card text-center">好きなジャンル:<a class="text-center"> -</a></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-8">
        <div class="mt-2 ml-2 row no-gutters">
            <h5 class="card">自己紹介</h5>
        </div>
        <textarea readonly class="card mb-2 mx-2" style="min-width: 95%" rows="3" id="game-summary">よろしくお願いします</textarea>
    </div>
</div>
            
                            <input type="button" class="review_edit mx-auto mb-2 px-5 d-block" value="プロフィールを編集"
                    onclick="location.href='http://serene-atoll-92507.herokuapp.com/profile/edit?user_id=10004'">
                    </div>
        <div class="contain-center card mw-100 mh-70 pb-2">
            <div class="game-info-top row no-gutters align-items-start m-2">
    <h5 class="card">レビューが投稿されていません</h5>
    <span class="d-flex justify-content ml-auto">
        
        </span>
</div>
<div class="game-info-bottom row no-gutters align-items-start m-2">
    <span class="d-flex justify-content-center ml-auto">
        
            </span>
</div>
        </div>
        <div class="contain-bottom card text-center mw-100 mh-10">
            <p class="py-3">Copyright © 20xx - 20xx xxxxxx   Privacy Policy</p>
        </div>
    </div>
            </main>
        </div>
    </body>
</html>




@endsection