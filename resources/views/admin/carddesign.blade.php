@extends('layouts.main')
@section('title')
    Dashboard
@endsection

@section('spasific-stylesheets')
@endsection

@section('page-wise-style')
    <style>
    </style>
@endsection

@section('maincontent')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Apps</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Card Design</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apps</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Users</h6>
                                        <h2 class="mb-0 number-font">44,278</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="saleschart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTAINER END -->
@endsection
