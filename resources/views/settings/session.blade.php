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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Session</h3>
                    </div>
                    <div class="card-body">
                        <form id="addSessionForm">
                            <div class="form-group">
                                <label for="sessionName">Session Name</label>
                                <input type="text" class="form-control" id="sessionName" name="sessionName"
                                    placeholder="Enter Session Name">
                            </div>
                            <div class="form-group">
                                <label for="sessionFrom">Session From</label>
                                <input type="date" class="form-control" id="sessionFrom" name="sessionFrom"
                                    placeholder="Enter Session From">
                            </div>
                            <div class="form-group">
                                <label for="sessionTo">Session To</label>
                                <input type="date" class="form-control" id="sessionTo" name="sessionTo"
                                    placeholder="Enter Session To">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xl-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- <div class="row d-flex justify-content-between"> --}}
                                            <div class="col-12 d-flex justify-content-between align-items-center">
                                                <h3 class="card-title align-items-center">Sessions</h3>
                                                <button type="button"
                                                    class="btn btn-primary btn-sm  align-items-center">Add Session</button>
                                            </div>
                                            {{-- </div> --}}
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom"
                                                    id="responsive-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">S.No</th>
                                                            <th class="wd-15p border-bottom-0">Session Name</th>
                                                            <th class="wd-10p border-bottom-0">Delete </th>
                                                            <th class="wd-25p border-bottom-0">Update</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
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
        <!-- CONTAINER END -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script>
            // load all session
            $(document).ready(function() {
                $(document).ready(function() {
                    $.ajax({
                        url: "{{ route('viewSession') }}",
                        type: "GET",
                        success: function(response) {
                            console.log(response);
                            var html = '';
                            $.each(response, function(key, value) {
                                html += '<tr>';
                                html += '<td>' + (key + 1) + '</td>';
                                html += '<td>' + value.session_name + '</td>';
                                html +=
                                    '<td><button class="btn btn-danger btn-sm deleteSession" data-id="' +
                                    value.id + '">Delete</button></td>';
                                html +=
                                    '<td><button class="btn btn-primary btn-sm updateSession" data-id="' +
                                    value.id + '">Update</button></td>';
                                html += '</tr>';
                            });
                            $('tbody').html(html);
                        },
                        error: function(xhr) {
                            console.error('Error fetching session data:', xhr);
                        }
                    });
                });
            });
        </script>
    @endsection
