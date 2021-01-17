@extends('layouts.app')


@section('title', 'プロフィール変更')



@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
    <form action="info" method="POST">
      @csrf
      
    <table class="table">
        <tbody>
          <tr>
            <td>ユーザ名</td>
            <td><input class="form-input__input w-100" type="text" name="name" value="{{$auth->name}}"></td>
          </tr>
          
          
          <tr>
            <td>メールアドレス</td>
            <td><input class="form-input__input w-100" type="text" name="email" value="{{$auth->email}}"></td>
          </tr>
          
          <tr>
            <td>年齢</td>
            <td>
              <select name="age_id" class="w-100">
                <option value="">選択してください</option>
                <option value="20歳未満">20歳未満</option>
                <option value="20-29歳">20-29歳</option>
                <option value="30-39歳">30-39歳</option>
                <option value="40-49歳">40-49歳</option>
                <option value="50-59歳">50-59歳</option>
                <option value="60歳以上">60歳以上</option>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>性別</td>
            <td>
              <div class="row">
                <div class="col-md-12 text-left">
                <input id="radio-a" type="radio" name="gender" value="男" checked><label for="radio-a">男</label>
                <input id="radio-b" type="radio" name="gender" value="女"><label for="radio-b">女</label>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
        
        </table>
        <div class="row">
        <div class="col-md-12 text-left">
            <button type="submit" class="btn btn-primary">完了</button>
        </div>
        </div>
     </form>
     </div>
  </div>
</div>



@endsection