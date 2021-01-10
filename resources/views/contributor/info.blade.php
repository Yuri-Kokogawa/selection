@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
<div class="index-content">
    <div class="books-list">
        <div class="books-list_title mypage-color">
            マイページトップ
        </div>
         
        <div class="book-table">
            <div class="book-table__profile-list">

                <div class="profile-group">
                
                     <div class="profile-group__title">ユーザー名</div>
                
                        <div class="profile-group__element">{{$auth->id}}</div>
                
                </div>
                
                <div class="profile-group">
                
                     <div class="profile-group__title">ユーザーID</div>
                
                         <div class="profile-group__element">{{$auth->name}}</div>
                
                </div>
                
                <div class="profile-group">
                
                    <div class="profile-group__title">パスワード</div>
                
                        <div class="profile-group__element">{{$auth->password}}</div>
                
                </div>
                
                <div class="profile-group">
                
                    <div class="profile-group__title">メールアドレス</div>
                
                         <div class="profile-group__element">{{$auth->email}}</div>
                
                </div>
                
                
                
                <div class="profile-group">
                
                    <div class="profile-group__title">年齢</div>
                
                        <div class="profile-group__element">{{$auth->age}}</div>
                
                </div>
                
                <div class="profile-group">
                
                    <div class="profile-group__title">性別</div>
                
                        <div class="profile-group__element">{{$auth->gender}}</div>
                
                </div>
                
             </div>
                
        </div>


        
    </div>
</div>

@endsection