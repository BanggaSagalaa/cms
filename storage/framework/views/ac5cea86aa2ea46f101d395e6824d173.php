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
          <h3>Create Account</h3>
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-3">
                    <form method="POST" action="/createaccount">
                        <?php echo csrf_field(); ?>
                        <div class="card rounded-0 border-0">

                        <input type="text" name="id" class="form-control rounded-0" value="<?php echo e($account->id ?? ''); ?>">


                            <div class="card-body">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="custom-color">User Type *</label>
                                            <select name="type" class="form-control rounded-0" required>
                                            <option value="<?php echo e($account->type ?? ''); ?>"><?php echo e($account->type ?? 'Select'); ?></option>
                                            <option value="Auditor">Auditor</option>
                                            <option value="Treasurer">Treasurer</option>
                                            <option value="Members">Members</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="custom-color">Name *</label>
                                            <input type="text" name="name" class="form-control rounded-0" value="<?php echo e($account->name ?? ''); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label class="custom-color">Email *</label>
                                            <input type="text" name="email" class="form-control rounded-0" value="<?php echo e($account->email ?? ''); ?>">
                                        </div>
                                    </div>

                                    <?php if(isset($account)): ?>

                                    <?php else: ?>
                                        <div class="col-lg-12 mt-3">
                                            <div class="form-group">
                                                <label class="custom-color">Password *</label>
                                                <input type="password" name="password" class="form-control rounded-0">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
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
<?php /**PATH D:\laravel\churchmanagementsystem\resources\views/createaccount.blade.php ENDPATH**/ ?>