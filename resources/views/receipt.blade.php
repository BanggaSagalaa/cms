<div style="width: 350px;border: 1px solid rgba(0, 0, 0, 0.2);padding: 20px;">
  <div style="text-align: center;">
    <img src="{{ asset('asset/images/logo.png') }}" width="50px">
  </div>
  <h3 style="text-align: center;">Church Management System</h3>
  <br>
  <p style="display: flex;justify-content: space-between;"><strong>Date:</strong> {{ $financial->financial_date_received }} </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Location:</strong> {{ $financial->church_address }} </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Amount:</strong> {{ $financial->financial_amount }} </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>CM Building:</strong> {{ $financial->financial_amount }} </p>
  <hr />
  <p style="display: flex;justify-content: space-between;"><strong>Total:</strong> {{ $financial->financial_amount + $financial->financial_amount }} </p>
</div>
<script>
  window.print();
  window.onafterprint = window.close; 
</script>