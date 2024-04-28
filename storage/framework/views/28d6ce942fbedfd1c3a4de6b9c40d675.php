<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>
      <div class="wrapper">
      <div id="sidebar">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="container-fluid p-3">
            
            <div class="container-fluid content-wrapper-right">
            <h3>Account</h3>
                <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 mt-3">
                    <div class="card p-3 rounded-0 border-0 shadow">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <a href="/createaccount" class="btn btn-primary btn-sm btn-flat" style='width: 60px;'><i class="fas fa-plus"></i>Add</a>
                        <div class="card-body">
                        <div class="">
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->type); ?></td>
                                    <td><a href="/createaccount/<?php echo e($row->id); ?>" class="btn btn-success btn-sm btn-flat"><i class="fas fa-edit"></i>Edit</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            </table>
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
<?php /**PATH D:\laravel\churchmanagementsystem\resources\views/account.blade.php ENDPATH**/ ?>