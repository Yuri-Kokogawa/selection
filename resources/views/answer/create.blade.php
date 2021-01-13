@extends('layouts.app')

@section('title', '回答ページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>回答ページ</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>投稿者/()</h3>
        </div>
        <div class="col-md-6 text-center">
            <h3>カテゴリ/()</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
             <h3>年齢/()</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
             <h3>性別/()</h3>
        </div>
    </div>
    
    <div class="row">
         <div class="col-md-12 text-center">
                 <textarea readonly rows="10" cols="100">
                     This is some text within a card body.
                 </textarea>
         </div>
     </div>
     
     <div class="row">
        <div class="col-md-6 text-center">
            <button type="submit" class="btn btn-primary">Yes</button>
        </div>
        <div class="col-md-6 text-center">
            <button type="submit" class="btn btn-danger">No</button>
        </div>
        
     </div>
</div>

@endsection