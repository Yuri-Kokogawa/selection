@extends('layouts.app')

@section('title', 'パスワード変更')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
        <form action="info" method="POST">
          @csrf
            <table class="table">
                <tbody>
                  <tr>
                    <td>既存パスワード</td>
                  <td><input class="form-input__input  w-100" type="password" name="password"></td>
                  </tr>
                  
                  <tr>
                    <td>新規パスワード</td>
                    <td><input class="form-input__input  w-100" type="password" name="password_confirmation" ></td>
                  </tr>
                  
                  <tr>
                    <td>新規パスワード確認</td>
                    <td><input class="form-input__input  w-100" type="password" name="password_confirmation"></td>
                  </tr>
                </tbody>
            </table>
         </form>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">完了</button>
                </div>
            </div>
     </div>
  </div>
</div>
@endsection