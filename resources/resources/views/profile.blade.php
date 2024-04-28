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
          <h3>Update Profile</h3>
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-3">
                    <form method="POST" action="/profile">
                        @csrf
                        <div class="card rounded-0 border-0">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @foreach($data as $item)
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ session('user_id') }}">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="custom-color">Name *</label>
                                            <input type="text" name="name" class="form-control rounded-0" value="{{ $item->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label class="custom-color">Email *</label>
                                            <input type="text" name="email" class="form-control rounded-0" value="{{ $item->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group text-end">
                                            <input type="submit" value="Save" class="btn btn-dark rounded-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
