@extends('layouts.app')

@section('title', '投稿したアンケート')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ __('messages.List') }}</h2>
        </div>
        <div class="row">
            
            <div class="col-md-4">
                <a href="{{ action('Contributor\ContributorsController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            
            <div class="col-md-8">
                <form action="{{ action('Contributor\ContributorsController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2 form-inline">カテゴリ</label>
                        <div class="col-md-8 ">
                            <input type="text" class="form-control" name="cond_category" value="{{ $cond_category }}">
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
                    <table class="table table">
                        <thead>
                            <tr>
                                <th width="10%">id</th>
                                <th width="20%">カテゴリ</th>
                                <th width="50%">アンケート</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $contributor)
                                <tr>
                                    <th>{{ $contributor->id }}</th>
                                    <td>{{ \Str::limit($contributor->category, 100) }}</td>
                                    <td>{{ \Str::limit($contributor->body, 300) }}</td>
                                    <td>
                                        
                                        <div>
                                            <form action="{{ action('Contributor\ContributorsController@edit', ['id' => $contributor->id]) }}"　method="get" >
                                                @csrf
                                            <button type="submit" >編集</button>
                                            </form>
                                        </div>
                                        
                                        
                                        <form action="{{ action('Contributor\ContributorsController@delete', ['id' => $contributor->id]) }}"  method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"  onclick='return confirm("本当に削除しますか？");'>削除</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection



