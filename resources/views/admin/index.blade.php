@extends('admin.master')
@section('master')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="dashboard-main mb-5">
        <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">A+<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">1</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">B+<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">12</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">O+<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">5</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">AB+<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">8</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">A-<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">10</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">B-<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">4</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">O-<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">16</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2">AB-<img src="{{asset('/assets/img/blood.png')}}" class="ms-1 me-2" alt=""></h3>
                    <h6 class="mt-4 ms-4">20</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2"><img src="{{asset('/assets/img/blood.png')}}" class="me-2" alt=""></h3>
                    <h6 class="mt-1 ms-4">Total Doners</h6>
                    <h6 class="mt-4 ms-4">{{$bloods->count()}}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2"><img src="{{asset('/assets/img/blood.png')}}" class="me-2" alt=""></h3>
                    <h6 class="mt-1 ms-4">Total Requests</h6>
                    <h6 class="mt-4 ms-4">{{$blood_requests->count()}}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2"><img src="{{asset('/assets/img/blood.png')}}" class="me-2" alt=""></h3>
                    <h6 class="mt-1 ms-4">Approve Requests</h6>
                    <h6 class="mt-4 ms-4">19</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="box">
                    <h3 class="text-end pt-2"><img src="{{asset('/assets/img/blood.png')}}" class="me-2" alt=""></h3>
                    <h6 class="mt-1 ms-4">Total Blood Unit(in ml)</h6>
                    <h6 class="mt-4 ms-4">11</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
