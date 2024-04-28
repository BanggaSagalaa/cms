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
          <h3>Create Financial</h3>
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-3">
                    <form method="POST" action="/createfinancial">
                        <?php echo csrf_field(); ?>
                        <div class="card rounded-0 border-0">
                        <input type="hidden" name="financial_id" class="form-control rounded-0" value="<?php echo e($financial->financial_id ?? ''); ?>">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="custom-color">Select Church Branch *</label>
                                            <select name="church_id" class="form-control rounded-0" required>
                                            <option value="<?php echo e($financial->church_id ?? ''); ?>"><?php echo e($financial->church_address ?? 'Select'); ?></option>

                                            <?php $__currentLoopData = $church; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->address); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label class="custom-color">Amount *</label>
                                            <input type="number" name="amount" class="form-control rounded-0" value="<?php echo e($financial->financial_amount ?? ''); ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group text-end">
                                            <input type="submit" value="Save" class="btn btn-dark rounded-0">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\churchmanagementsystem\resources\views/createfinancial.blade.php ENDPATH**/ ?>