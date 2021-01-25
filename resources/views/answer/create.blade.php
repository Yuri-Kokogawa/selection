@extends('layouts.app')

@section('title', '回答ページ')

@section('content')
<div class="container">
    
    <div class="row">
       
        <div class="col-md-12 text-center">
            <h2>アンケート回答</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
             <h3>年齢/({{$contributor_form->user->ages->age_name}})</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
             <h3>性別/({{$contributor_form->user->gender == 0 ? "男性" : "女性"}})</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>カテゴリ/({{ str_limit($contributor_form->categories->category_name, 150) }})</h3>
        </div>
    </div>
    
    <div class="row mb-4">
         <div class="col-md-12 text-center">
                 <textarea readonly rows="10" cols="100">{{$contributor_form->body }}</textarea>
         </div>
     </div>
      
      
     <div class="row">
        <form action="{{ action('AnswerController@create', ['id' => $contributor_form->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
            <!--<div class="col-md-6 text-center">-->
            <!--    <button type="submit" class="btn btn-primary w-25">Yes</button>-->
            <!--</div>-->
        
        
            <!--<div class="col-md-6 text-center">-->
            <!--    <button type="submit" class="btn btn-danger w-25">No</button>-->
            <!--</div>-->
            
            <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1" value="0">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
            </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault2" value="1">
                  <label class="form-check-label" for="flexRadioDefault2">
                    No
                  </label>
            </div>
            
            <input type="submit" class="btn btn-primary" value="送信">
        </form>
     </div>
     
</div>

@endsection