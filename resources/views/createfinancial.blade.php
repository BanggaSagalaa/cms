<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts/header')

    <body>
      <div class="wrapper">
      <div id="sidebar">
            @include('layouts.sidebar')
        </div>
        <div class="container-fluid p-3">
            
          <div class="container-fluid content-wrapper-right">
          <h3>Create Financial</h3>
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-3">
                    <form method="POST" action="/createfinancial">
                        @csrf
                        <div class="card rounded-0 border-0">
                        <input type="hidden" name="financial_id" class="form-control rounded-0" value="{{ $financial->financial_id ?? '' }}">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="custom-color">Select Church Branch *</label>
                                            <select name="church_id" class="form-control rounded-0" required>
                                            <option value="{{ $financial->church_id ?? '' }}">{{ $financial->church_address ?? 'Select' }}</option>

                                            @foreach($church as $row)
                                            <option value="{{ $row->id }}">{{ $row->address }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label class="custom-color">Amount *</label>
                                            <input type="number" name="amount" class="form-control rounded-0" value="{{ $financial->financial_amount ?? '' }}">
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
      @include('layouts/footer')
    </body>
</html>
