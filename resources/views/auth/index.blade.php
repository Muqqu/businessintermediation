@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                                data-bs-target="#login-tab-pane" type="button" role="tab"
                                aria-controls="login-tab-pane" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="register-tab" data-bs-toggle="tab"
                                data-bs-target="#register-tab-pane" type="button" role="tab"
                                aria-controls="register-tab-pane" aria-selected="false">Register</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel"
                            aria-labelledby="login-tab" tabindex="0">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login.custom') }}">
                                         @csrf
                                        <div class="input-group-wrapper">
                                            <div class="input-wrapper">
                                                <label for="email1" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="email1" name="email" required autofocus placeholder="Enter your Email">
                                                </div>
                                            </div>
                                            <div class="input-wrapper">
                                                <label for="password1" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password1" name="password" required placeholder="Enter your Password">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                            <div class="input-wrapper">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="" class="forget-pass"><i class="fas fa-lock"></i>Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('register.custom') }}" method="POST">
                                        @csrf
                                        <div class="input-group-wrapper">
                                            <div class="input-wrapper">
                                                <label for="password1" class="form-label">Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter your Name" name="name" required>
                                                </div>
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="input-wrapper">
                                                <label for="email2" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" id="email2" placeholder="Enter your Email" name="email" required>
                                                </div>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="input-wrapper">
                                                <label for="password1" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password1" placeholder="Enter your Password" name="password" required>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="input-wrapper">
                                                <label for="password1" class="form-label">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="Retype your Password" name="cpassword" required>
                                                </div>
                                                @if ($errors->has('cpassword'))
                                                    <span class="text-danger">{{ $errors->first('cpassword') }}</span>
                                                @endif
                                            </div>
                                            <p>
                                                Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="">privacy policy</a>.
                                            </p>
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection