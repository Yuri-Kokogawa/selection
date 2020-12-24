@extends('layouts.app')

@section('title', '投稿したアンケート')

@section('content')
    <div class="container">
        <div class="row">
            <h2>アンケート投稿一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\SelectController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\SelectController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2 form-inline">ジャンル</label>
                        <div class="col-md-8 ">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-select col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">ジャンル</th>
                                <th width="50%">アンケート１</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $select)
                                <tr>
                                    <th>{{ $select->id }}</th>
                                    <td>{{ \Str::limit($select->title, 100) }}</td>
                                    <td>{{ \Str::limit($select->body, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection