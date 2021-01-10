@extends('layouts.app')

@section('title', 'アンケートの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>アンケート編集</h2>
                <form action="{{ action('Contributor\ContributorsController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">カテゴリ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" value="{{ $contributor_form->category}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body1">アンケート</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $contributor_form->body}}</textarea>
                        </div>
                    </div>
                    
                   
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $contributor_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection