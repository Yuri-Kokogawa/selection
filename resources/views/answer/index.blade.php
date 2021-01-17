@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
          <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
               
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6" style="fixed;width:80%;">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="age">
                                    {{$auth->age_id}}
                                </div>
                                {{$auth->gender == 0 ? "男性" : "女性"}}
                                <div class="category">
                                   カテゴリ（ {{ str_limit($post->category_name_id, 150) }}）
                                </div>
                                <div class="body mt-3"　style="word-wrap:break-word;">
                                    {{ str_limit($post->body, 500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection