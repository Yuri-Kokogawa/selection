{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


@section('title', 'アンケート投稿')


@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <h2>アンケート新規作成</h2><br>
                <p>※本文は二択（Yes/No）で回答できるものに限ります。</p>
                <form action="{{ action('Contributor\ContributorsController@create') }}" method="post" enctype="multipart/form-data">

                    
                    <div class="form-group row">
                        <label class="col-md-4">カテゴリ</label>
                        <div class="col-md-6 form-inline">
                                <select name="category">
                                    <option value="">選択してください</option>
                                </select>
                            </div>
                        <div class="col-md-10">
                            @if ($errors->has('category'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート</label>
                        <div class="col-md-10">
                            <textarea id="body" class="form-control" name="body" rows="10" required autofocus>{{ old('body') }}</textarea>
                            @if ($errors->has('body'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection