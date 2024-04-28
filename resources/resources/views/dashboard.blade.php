<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header')
<body>
    <div class="wrapper">
        <div id="sidebar">
            @include('layouts.sidebar')
        </div>
        <div id="main-content" class="container-fluid p-0">
            <div class="container-fluid content-wrapper-right">
                <div class="container-fluid p-0">
                    <div class="row m-0">
                    <div class="col-xl-4 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Users
                            </div>
                            <div class="d-flex total-customers-text">
                            <div class="text-center">
                                <i class="fas fa-users h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong class="p-2">{{ $totalusers }}</strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Church
                            </div>
                            <div class="d-flex total-pending-text">
                            <div class="text-center">
                                <i class="fas fa-place-of-worship h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong class="p-2">{{ $totalchurch }}</strong>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mt-3">
                        <div class="card rounded-0 border">
                        <div class="card-body p-3">
                            <div class="p-1 custom-color card-title">
                            Total Financial
                            </div>
                            <div class="d-flex total-revenue-text">
                            <div class="text-center">
                                <i class="fas fa-money-bill-alt h1 m-0 card-content-left"></i>
                            </div>
                            <div class="w-100 text-end m-0">
                                <strong class="p-2">{{ number_format($totalfinancial, 2) }}</strong>
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
