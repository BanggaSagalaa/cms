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
            <h3>Financial</h3>
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
                        @if(session('type') === 'Members')
                        <a href="/createfinancial" class="btn btn-primary btn-sm btn-flat" style='width: 60px;'><i class="fas fa-plus"></i>Add</a>
                        @endif
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
                                @foreach($financial as $row)
                                    <tr>
                                    <td>{{ $row->church_address }}</td>
                                    <td>{{ $row->financial_amount }}</td>
                                    <td>{{ $row->financial_date_received }}</td>
                                    <td>
                                        @if(session('type') === 'Members')
                                        <a href="/createfinancial/{{ $row->financial_id }}" class="btn btn-success btn-sm btn-flat"><i class="fas fa-edit"></i> Edit</a>
                                        @endif
                                        <a href="/receipt/{{ $row->financial_id }}" target="_blank" class="btn btn-success btn-sm btn-flat"><i class="fas fa-print"></i> Receipt</a>
                                        <a href="/map/{{ $row->church_id }}" class="btn btn-warning btn-sm btn-flat"><i class="fas fa-location"></i> View Map</a>
                                    </td>
                                    </tr>
                                @endforeach
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
      @include('layouts/footer')
    </body>
</html>
