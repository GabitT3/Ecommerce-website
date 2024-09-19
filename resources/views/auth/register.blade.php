@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




  <style>

p{
    text-align: center;
    margin-top: 50px;
    font-size: 16px;
}

  body {

background: gray;

display: flex;

justify-content: center;

align-items: center;

height: 90vh;

flex-direction: column;

}

*{

font-family:"Kaushan script",cursive ;

box-sizing: padding-box;

}

form {

width: 380px;
height: 590px;
position: relative;
border: 3px solid rgb(177, 142, 142);

padding: 15px;

background: rgb(85, 54, 54);

border-radius: 20px;

}



input {

display: block;

border: 2px solid #ccc;

width: 80%;

padding: 5px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: #888;

font-size: 18px;

padding: 10px;

}

button {

float: right;

background: rgb(30, 17);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

/* button:hover{

opacity: .10;

} */

/* .error {

background: #F2DEDE;

color: #0c0101;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

} */

/* h1 {

text-align: center;

color: rgb(134, 3, 3);

} */

a {

float: right;

background: rgb(183, 225, 233);

padding: 8px 10px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}


</style>
</head>
<body>
  
  <p>Enter Your Login Credentials</p>

  <form method="POST" action="{{ route('register') }}">
                        @csrf
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <!-- <label for="Tel">Tel:</label>
  <input type="number" id="Tel" name="Tel" > -->
  <label for="Password">Password:</label>
  <input type="password" id="password" name="password" >
    <label for="password-confirm">
        <!-- {{ __('Confirm Password') }} -->
        Confirm Password
    </label>
    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            
                        

  <button type="submit" class="btn btn-primary">
                                    <!-- {{ __('SIGN UP') }} -->
                                    SIGN UP
                                </button>
  
 
    
</form>
@endsection
