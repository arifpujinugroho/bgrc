@extends('layouts.app')

@section('title')
Employee Status
@endsection

@section('navigation')
@include('employ.hr.left-sidebar')
@endsection

@section('content')
<div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- HTML5 Export Buttons table start -->
                                            <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Name : {{Auth::user()->name}}<br>Department : {{Auth::user()->depart}}</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                        <p>Date : {{$tanggal}}</p>
                                                            <table class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Exit Pass ID</th>
                                                                        <th>Created Form</th>
                                                                        <th>Purpose</th>
                                                                        <th>HOD Approved</th>
                                                                        <th>Date/Time Out</th>
                                                                        <th>Date/Time In</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                            @forelse($data_employ as $dexitps)
                                                            <tr>
                                                                <td>{{$dexitps->id}}</td>
                                                                <td>{{$dexitps->created_at}}</td>
                                                                <td>{{$dexitps->purpose}}</td>
                                                                <td><span style="color:green;">{{$dexitps->hod_status}}<br>{{$dexitps->hod_date}} {{$dexitps->hod_time}}</span></td>
                                                                <td>Name Police : {{$dexitps->name_police_out}}<br>Date out : {{$dexitps->date_out}}<br>Time out : {{$dexitps->time_out}}</td>
                                                                <td>Name Police : {{$dexitps->name_police_in}}<br>Date in : {{$dexitps->date_in}}<br>Time in : {{$dexitps->time_in}}</td>
                                                            </tr>
                                                            @empty
                                                            <tr>    
                                                                <td colspan="6" style="text-align: center;"><b><i>NO DATA SHOWN</i></b></td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>      
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->

                                                <!-- DOM/Jquery table start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Report Database Exitpass</h5><br><br>
                                                <p>Name   : {{Auth::user()->name}}<br>Department : {{Auth::user()->depart}}</p>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                                    <tr>
                                                                        <th>Date/ Time</th>
                                                                        <th>Name</th>
                                                                        <th>Type</th>
                                                                        <th>Purpose</th>
                                                                        <th>HOD Approved</th>
                                                                        <th>Date/Time Out</th>
                                                                        <th>Date/Time In</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                            @forelse($data_employ2 as $dexitps2)
                                                            <tr>
                                                                <td>{{$dexitps2->created_at}}</td>
                                                                <td>{{$dexitps2->name}}</td>
                                                                <td>{{$dexitps2->tipe}}</td>
                                                                <td>{{$dexitps2->purpose}}</td>
                                                                <td>{{$dexitps2->apr_name}}<br>{{$dexitps2->hod_date}} {{$dexitps2->hod_time}}</td>
                                                                <td>Name Police : {{$dexitps2->name_police_out}}<br>Date out : {{$dexitps2->date_out}}<br>Time out : {{$dexitps2->time_out}}</td>
                                                                <td>Name Police : {{$dexitps2->name_police_in}}<br>Date in : {{$dexitps2->date_in}}<br>Time in : {{$dexitps2->time_in}}</td>
                                                            </tr>
                                                            @empty
                                                            <tr>    
                                                                <td colspan="7" style="text-align: center;"><b><i>NO DATA SHOWN</i></b></td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DOM/Jquery table end -->

                                        </div>                 
                                    </div>
                                </div>
                                <!-- Page-header end -->
</div>
@endsection


@section('header')
   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/menu-search/css/component.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.mCustomScrollbar.css')}}">
@endsection


@section('scriptnya')
<script type="text/javascript" src="{{url('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="{{url('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- data-table js -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{url('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{url('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Custom js -->
<script src="{{url('assets/pages/data-table/js/data-table-custom.js')}}"></script>
    <script src="{{url('assets/js/pcoded.min.js')}}"></script>
    <script src="{{url('assets/js/demo-12.js')}}"></script>
    <script src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/script.js')}}"></script>
@endsection