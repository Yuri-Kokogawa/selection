{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


@section('title', 'アンケート投稿')


@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h2>アンケート作成</h2><br>
                
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
                            </select>
                            </h5>
                            @if ($errors->has('category_name_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('category_name_id') }}</strong>
                                        </span>
                            @endif
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <textarea id="body"  name="body" rows="10" cols="100" required autofocus>{{ old('body') }}</textarea>
                                @if ($errors->has('body'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('body') }}</strong>
                                                </span>
                                @endif
                        </div>
                    </div>
                    
                    <p>※本文は二択（Yes/No）で回答できる内容のものに限ります。</p>
                    
                    {{ csrf_field() }}
                    
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection