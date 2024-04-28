<div style="width: 350px;border: 1px solid rgba(0, 0, 0, 0.2);padding: 20px;">
  <div style="text-align: center;">
    <img src="<?php echo e(asset('asset/images/logo.png')); ?>" width="50px">
  </div>
  <h3 style="text-align: center;">Church Management System</h3>
  <br>
  <p style="display: flex;justify-content: space-between;"><strong>Date:</strong> <?php echo e($financial->financial_date_received); ?> </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Location:</strong> <?php echo e($financial->church_address); ?> </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Amount:</strong> <?php echo e($financial->financial_amount); ?> </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>CM Building:</strong> <?php echo e($financial->financial_amount); ?> </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Total:</strong> <?php echo e($financial->financial_amount + $financial->financial_amount); ?> </p>
</div>
<script>
  window.print();
  window.onafterprint = window.close; 
</script><?php /**PATH C:\xampp\htdocs\churchmanagementsystem\resources\views/receipt.blade.php ENDPATH**/ ?>