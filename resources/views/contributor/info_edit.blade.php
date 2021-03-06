@extends('layouts.app')


@section('title', 'プロフィール変更')



@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
    <form action="{{ action('Contributor\ContributorsController@info_update',['id' => $auth->id])}}" method="POST"　enctype="multipart/form-data">
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
                <option value="{{$auth->age_id}}">選択してください</option>
                <option value="1">20歳未満</option>
                <option value="2">20-29歳</option>
                <option value="3">30-39歳</option>
                <option value="4">40-49歳</option>
                <option value="5">50-59歳</option>
                <option value="6">60歳以上</option>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>性別</td>
            <td>
              <div class="row">
                <div class="col-md-12 text-left">
                <input id="radio-a" type="radio" name="gender" value="0" checked><label for="radio-a">男</label>
                <input id="radio-b" type="radio" name="gender" value="1"><label for="radio-b">女</label>
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