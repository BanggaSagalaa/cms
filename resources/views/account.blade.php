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
            <h3>Account</h3>
                <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 mt-3">
                    <div class="card p-3 rounded-0 border-0 shadow">
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
                                @foreach($account as $row)
                                    <tr>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->type }}</td>
                                    <td><a href="/createaccount/{{ $row->id }}" class="btn btn-success btn-sm btn-flat"><i class="fas fa-edit"></i>Edit</a></td>
                                    </tr>
                                @endforeach
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
      @include('layouts/footer')
    </body>
</html>
