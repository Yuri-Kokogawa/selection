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
             <h3>年齢/({{$auth->age}})</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
             <h3>性別/({{$auth->gender == 0 ? "男性" : "女性"}})</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>カテゴリ/({{ str_limit($post->categories->category_name, 150) }})</h3>
        </div>
    </div>
    
    <div class="row mb-4">
         <div class="col-md-12 text-center">
                 <textarea readonly rows="10" cols="100">
                     
                 </textarea>
         </div>
     </div>
     
     <div class="row">
        <div class="col-md-6 text-center">
            <button type="submit" class="btn btn-primary w-25">Yes</button>
        </div>
        <div class="col-md-6 text-center">
            <button type="submit" class="btn btn-danger w-25">No</button>
        </div>
        
     </div>
</div>

@endsection