@extends('layouts.app')

@section('title', 'アンケートの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>アンケート編集</h2>
                <form action="{{ action('Contributor\ContributorsController@update', ['id' => $contributor_form->id]) }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        
                            @foreach($errors->all() as $e)
                               <div class="alert alert-danger" role="alert"> {{ $e }}</div>
                            @endforeach
                        
                    @endif
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5>カテゴリ
                            <select name="category_name_id"　value="{{ $contributor_form->category_name_id}}">
                                <option value="">選択してください</option>
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
                            </h5>
                            
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-12 text-center">
                            <textarea id="body"  name="body" rows="10" cols="100" required autofocus>{{ $contributor_form->body}}</textarea>
                                
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