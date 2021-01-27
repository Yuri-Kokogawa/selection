@extends('layouts.app')

@section('title', '回答ページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
             <h4 class="text-danger">投稿者</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center">
             <h5>年齢/{{$contributor_form->user->ages->age_name}}</h5>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center">
             <h5>性別/{{$contributor_form->user->gender == 0 ? "男性" : "女性"}}</h5>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>カテゴリ/{{ str_limit($contributor_form->categories->category_name, 150) }}</h5>
        </div>
    </div>
    
    <div class="row mb-4">
         <div class="col-md-12 text-center">
                 <textarea readonly rows="10" cols="100">{{$contributor_form->body }}</textarea>
         </div>
     </div>
      
      
    
        <form action="{{ action('AnswerController@create', ['id' => $contributor_form->id])}}" method="post" enctype="multipart/form-data">
           @csrf
             <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1" value="0" checked>
                          <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault2" value="1">
                          <label class="form-check-label" for="flexRadioDefault2"> No</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mb-2">
                    <input type="submit" class="btn btn-primary" value="送信">
                </div>
            </div>
        </form>
     </div>
</div>

@endsection