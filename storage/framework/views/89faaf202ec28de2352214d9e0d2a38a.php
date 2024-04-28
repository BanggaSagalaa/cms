<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="wrapper">
        <div id="sidebar">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div id="main-content" class="container-fluid p-0">
            <div class="container-fluid content-wrapper-right">
                <div class="container-fluid p-0">
                    <div class="row m-0">
                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Users
                            </div>
                            <div class="d-flex total-customers-text">
                            <div class="text-center">
                                <i class="fas fa-users h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong class="p-2"><?php echo e($totalusers); ?></strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Pending
                            </div>
                            <div class="d-flex total-pending-text">
                            <div class="text-center">
                                <i class="fas fa-times h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong>10</strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Approved
                            </div>
                            <div class="d-flex total-approved-text">
                            <div class="text-center">
                                <i class="fas fa-check h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong>10</strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Revenue
                            </div>
                            <div class="d-flex total-revenue-text">
                            <div class="text-center">
                                <i class="fas fa-money-bill-alt h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong>10</strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\laravel\churchmanagementsystem\resources\views/dashboard.blade.php ENDPATH**/ ?>