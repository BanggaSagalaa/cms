<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <body class="bg-light">
        <div class="wrapper">
            <div class="box-form rounded m-auto bg-white p-5 shadow-sm">
                <h4 class="text-center">Forgot Password</h4>
                <br>
                <form method="POST" action="/forgotpassword">
                    <?php echo csrf_field(); ?>
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
<?php /**PATH D:\laravel\churchmanagementsystem\resources\views/forgotpassword.blade.php ENDPATH**/ ?>