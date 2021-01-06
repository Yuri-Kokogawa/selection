@extends('layouts.app')

@section('title', '投稿したアンケート')


@section('content')
<div class="container">
    <h3>Laravelで簡単なアンケートフォームを作る</h3>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="get" action="{{ action('Admin\SelectController@info') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 
        <div class="form-group">
            <label>ニックネーム</label><span class="label label-danger">必須</span>
 
            <input type="text" class="form-control" name="name" placeholder="ニックネームを入力してください">
        </div>
        <div class="form-group">
            <label>メールアドレス</label><span class="label label-danger">必須</span>
            <input type="text" class="form-control" name="email" placeholder="メールアドレスを入力してください">
        </div>
        <div class="form-group">
            <label>性別</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="1">男性
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="2">女性
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>内容</label><span class="label label-danger">必須</span>
            <textarea class="form-control" name="content" rows="3" placeholder="内容を入力してください"></textarea>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">確認する</button>
            </div>
        </div>
    </form>
</div>

@endsection