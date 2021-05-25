@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/registerStyle.css')}}">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="register">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="reister-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <h3 class="text-center text-info"></h3>

                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="phone" class="text-info">Phone:</label><br>
                            <input type="text" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label for="password-confirm" class="text-info">{{ __('Confirm Password') }}</label>
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                        <div class="form-group">
                                
                                <button type="submit" class="btn btn-info btn-md">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            


                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
