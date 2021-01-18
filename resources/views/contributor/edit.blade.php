@extends('layouts.app')

@section('title', 'アンケートの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>アンケート編集</h2>
                <form action="{{ action('Contributor\ContributorsController@update', ['id' => $contributor_form->id]) }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5>カテゴリ
                            <select name="category_name_id"　value="{{ $contributor_form->category_name_id}}">
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
                            <textarea id="body"  name="body" rows="10" cols="100" required autofocus>{{ $contributor_form->body}}</textarea>
                                @if ($errors->has('body'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('body') }}</strong>
                                                </span>
                                @endif
                        </div>
                    </div>
                    
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection