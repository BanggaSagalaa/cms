<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts/header')
    
    <body class="bg-light">
        <div class="wrapper">
            <div class="box-form rounded m-auto bg-white p-5 shadow-sm">
                <h4 class="text-center">Forgot Password</h4>
                <br>
                <form method="POST" action="/forgotpassword">
                    @csrf
                    @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

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
                    <div>
                        <input type="submit" class="btn btn-dark form-control" value="Send Email">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
