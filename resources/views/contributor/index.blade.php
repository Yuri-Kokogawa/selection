@extends('layouts.app')

@section('title', '投稿したアンケート')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ __('messages.List') }}</h2>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-right mb-2">
                <form action="{{ action('Contributor\ContributorsController@index') }}" method="get" >
                    <div class="row">
                        <div class="col-md-2 offset-md-6">
                            <h5>カテゴリ</h5>
                        </div>
                        <div class="col-md-2 text-left">
                            <select name="cond_category">
                                <option value="">全て</option>
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
                        </div>
                        <div class="col-md-2 text-center ">
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
                    <table class="table" style="table-layout:fixed;width:100%;">
                        <thead>
                            <tr>
                                <th width="10%">id</th>
                                <th width="20%">カテゴリ</th>
                                <th width="60%">アンケート</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $contributor)
                                <tr>
                                    <th>{{ $contributor->id }}</th>
                                    <td>{{ $contributor->categories->category_name }}</td>
                                    <td style="word-wrap:break-word;">{{ \Str::limit($contributor->body, 500) }}</td>
                                    <td>
                                        
                                        <div class="row mb-2" >
                                            <a href="{{ action('Contributor\ContributorsController@edit', ['id' => $contributor->id])}}" class="btn btn-primary">編集</a>
                                        </div>
                                        
                                        <div class="row mb-2">
                                        <form action="{{ action('Contributor\ContributorsController@delete', ['id' => $contributor->id]) }}"  method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-primary" onclick='return confirm("本当に削除しますか？");'>削除</button>
                                        </form>
                                        </div>
                                        
                                        <div class="row" >
                                            <a href="{{ action('AnswerController@view', ['id' => $contributor->id])}}" class="btn btn-primary">集計</a>
                                        </div>
                                         
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



