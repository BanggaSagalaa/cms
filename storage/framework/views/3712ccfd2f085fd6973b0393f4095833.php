<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <body class="bg-light">
        <div class="wrapper">
            <div class="box-form rounded m-auto bg-white p-5 shadow-sm">
                <div class="text-center">
                    <img src="asset/images/logo.png" width="100px">
                </div>
                <h4 class="text-center">Cavite Mission Church</h4>
                <br>
                <form method="POST" action="/">
                    <?php echo csrf_field(); ?>
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
<?php /**PATH D:\laravel\churchmanagementsystem\resources\views/welcome.blade.php ENDPATH**/ ?>