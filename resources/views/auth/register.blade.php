@extends('layouts.app')

@section('title', '新規登録')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mx-auto">{{ __('messages.Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('messages.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('messages.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('messages.Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="age_id" class="col-md-4 col-form-label text-md-right">{{ __('messages.Age') }}</label>

                            <div class="col-md-6 form-inline">
                                <select name="age_id">
                                    <option value="">選択してください</option>
                                    <option value="20歳未満">20歳未満</option>
                                    <option value="20-29歳">20-29歳</option>
                                    <option value="30-39歳">30-39歳</option>
                                    <option value="40-49歳">40-49歳</option>
                                    <option value="50-59歳">50-59歳</option>
                                    <option value="60歳以上">60歳以上</option>
                                </select>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('messages.Gender') }}</label>
                            <div class="col-md-6 form-check form-inline">
                                <input id="radio-a" type="radio" name="gender" value="男" checked><label for="radio-a">男</label>
                                <input id="radio-b" type="radio" name="gender" value="女"><label for="radio-c">女</label>
                            </div>
                    　　</div>


                        <div class="form-group row justify-content-center">
                            <button type="submit" class="btn btn-primary ">
                                {{ __('messages.Register2') }}
                            </button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

