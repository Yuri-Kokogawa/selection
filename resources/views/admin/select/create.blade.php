{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.app')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'アンケート投稿')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <h2>アンケート新規作成</h2><br>
                <p>※ジャンルとアンケート1は必須項目です。</p>
                <p>※作成できる数は10個までです。</p>
                <p>※本文は二択（Yes/No）で回答できるものに限ります。</p>
                <form action="{{ action('Admin\SelectController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-4">ジャンル</label>
                        <div class="col-md-10">
                            <input  id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                            
                            @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6">アンケート1</label>
                        <div class="col-md-10">
                            <textarea id="body1" class="form-control" name="body1" rows="5" required autofocus>{{ old('body1') }}</textarea>
                            @if ($errors->has('body1'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('body1 ') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート2</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body2" rows="5">{{ old('body2') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート3</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body3" rows="5">{{ old('body3') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート4</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body4" rows="5">{{ old('body4') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート5</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body5" rows="5">{{ old('body5') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート6</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body6" rows="5">{{ old('body6') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート7</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body7" rows="5">{{ old('body7') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート8</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body8" rows="5">{{ old('body8') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート9</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body9" rows="5">{{ old('body9') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-6">アンケート10</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body10" rows="5">{{ old('body10') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection