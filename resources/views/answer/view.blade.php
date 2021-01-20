@extends('layouts.app')


@section('title', '回答結果')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mb-2">
            <h2>集計結果</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 text-center">
            <h4>年齢/()</h4>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-md-6 text-center mb-2">
            <h4>性別/()</h4>
        </div>
    </div> 
    
     <div class="row">
        <div class="col-md-6 text-center">
            <h4>カテゴリ/({{$contributor->categories->category_name}})</h4>
        </div>
    </div>
    
    <div class="row mb-4">
         <div class="col-md-12 text-center">
                 <textarea readonly rows="10" cols="100">{{$contributor->body }}</textarea>
         </div>
     </div>
     
     <div class="row mb-4">
        <div class="col-md-6 text-center">
            <h4　class="text-primary">男性</h4>
        </div>
    
        <div class="col-md-6 text-center">
            <h4 class="text-danger">女性</h4>
        </div>
    　</div>
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>20歳未満...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>20歳未満...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>20--29歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>20--29歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
    　
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>30--39歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>30--39歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>40--49歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>40--49歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>50--59歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>50--59歳...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
    　
    　<div class="row">
        <div class="col-md-6 text-center ">
            <h5>60歳以上...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    
        <div class="col-md-6 text-center">
            <h5>60歳以上...<span class="text-primary">Yes</span>()/<span class="text-danger">No</span>()</h5>
        </div>
    　</div>
</div>

@endsection