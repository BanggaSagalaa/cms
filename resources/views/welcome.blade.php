<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts/header')
    
    <body class="bg-light">
        <div class="wrapper">
            <div class="box-form rounded m-auto bg-white p-5 shadow-sm">
                <div class="text-center">
                    <img src="asset/images/logo.png" width="100px">
                </div>
                <h4 class="text-center">Cavite Mission Church</h4>
                <br>
                <form method="POST" action="/">
                    @csrf
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@email.com">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="******">
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-dark form-control" value="Login">
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="/forgotpassword" class="small text-decoration-none text-dark">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
