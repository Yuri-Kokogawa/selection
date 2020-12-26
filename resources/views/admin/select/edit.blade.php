@extends('layouts.app')

@section('title', 'アンケートの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>アンケート編集</h2>
                <form action="{{ action('Admin\SelectController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $select_form->title }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body1">アンケート１</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body1" rows="5">{{ $select_form->body1 }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート２</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート３</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート４</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート５</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート６</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート７</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート８</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート９</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">アンケート10</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $select_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $select_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection