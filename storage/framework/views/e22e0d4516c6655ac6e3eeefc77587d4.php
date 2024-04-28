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
            <h3>Financial</h3>
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
                        <?php if(session('type') === 'Members'): ?>
                        <a href="/createfinancial" class="btn btn-primary btn-sm btn-flat" style='width: 60px;'><i class="fas fa-plus"></i>Add</a>
                        <?php endif; ?>
                        <div class="card-body">
                        <div class="">
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Date Received</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $financial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($row->church_address); ?></td>
                                    <td><?php echo e($row->financial_amount); ?></td>
                                    <td><?php echo e($row->financial_date_received); ?></td>
                                    <td>
                                        <?php if(session('type') === 'Members'): ?>
                                        <a href="/createfinancial/<?php echo e($row->financial_id); ?>" class="btn btn-success btn-sm btn-flat"><i class="fas fa-edit"></i> Edit</a>
                                        <?php endif; ?>
                                        <a href="/receipt/<?php echo e($row->financial_id); ?>" target="_blank" class="btn btn-success btn-sm btn-flat"><i class="fas fa-print"></i> Receipt</a>
                                        <a href="/map/<?php echo e($row->church_id); ?>" class="btn btn-warning btn-sm btn-flat"><i class="fas fa-location"></i> View Map</a>
                                    </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Date Received</th>
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
<?php /**PATH C:\xampp\htdocs\churchmanagementsystem\resources\views/financial.blade.php ENDPATH**/ ?>