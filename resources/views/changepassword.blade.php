<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts/header')
    
    <body class="bg-light">
        <div class="wrapper">
            <div class="box-form rounded m-auto bg-white p-5 shadow-sm">
                <h4 class="text-center">Change Password</h4>
                <br>
                <form method="POST" action="/changepassword">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }} <a href="/">Click here to login</a>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Code</label>
                        <input type="number" name="code" class="form-control" placeholder="Code">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*******">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" placeholder="*******">
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-dark form-control" value="Change Password">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
