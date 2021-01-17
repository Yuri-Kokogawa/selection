@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
    <form action="info_edit">
      @csrf
    <table class="table">
      <tbody>
        <tr>
          <td>ユーザ名</td>
          <td>{{$auth->name}}</td>
        </tr>
        
        <tr>
          <td>ユーザid</td>
          <td>{{$auth->id}}</td>
        </tr>
        
        <tr>
          <td>メールアドレス</td>
          <td>{{$auth->email}}</td>
        </tr>
        
        <tr>
          <td>年齢</td>
          <td>{{$auth->age}}</td>
        </tr>
        
        <tr>
          <td>性別</td>
          <td>{{$auth->gender == 0 ? "男性" : "女性"}}</td>
        </tr>
      </tbody>
      
      </table>
      <div class="col-md-12 text-left">
          <button type="submit" class="btn btn-primary">変更</button>
      </div>
    </form>
    </div>
  </div>
</div>


@endsection