@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-6">
                                    <div class="form-check">
                                        
                                        <label class="form-check-label" for="hasAccount" style="color: blue">Quên mật khẩu?</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
