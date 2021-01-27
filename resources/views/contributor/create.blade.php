{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


@section('title', 'アンケート投稿')


@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h3 class="">アンケート作成</h3><br>
                
                <form action="{{ action('Contributor\ContributorsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        
                            @foreach($errors->all() as $e)
                               <div class="alert alert-danger" role="alert"> {{ $e }}</div>
                            @endforeach
                        
                    @endif
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5>カテゴリ
                            <select name="category_name_id">
                                <option value="">選択してください</option>
                                <option value="1">仕事</option>
                                <option value="2">勉強</option>
                                <option value="3">恋愛</option>
                                <option value="4">学校</option>
                                <option value="5">アニメ/漫画</option>
                                <option value="6">ゲーム</option>
                                <option value="7">芸能</option>
                                <option value="8">映画/読書</option>
                                <option value="9">健康</option>
                                <option value="10">ファッション</option>
                                <option value="11">グルメ</option>
                                <option value="12">ニュース/政治</option>
                                <option value="13">スポーツ</option>
                                <option value="14">人生</option>
                                <option value="15">その他</option>
                            </select>
                            </h5>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <textarea id="body"  name="body" rows="10" cols="100" required autofocus>{{ old('body') }}</textarea>
                               
                        </div>
                    </div>
                    
                    <p class="text-danger">※本文は二択（Yes/No）で回答できる内容のものに限ります。</p>
                    
                    {{ csrf_field() }}
                    
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection