@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            @if (count($posts)>0)
            @foreach ($posts as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!---temp---->
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Temperature</p>
                                    <p class="card-title" id="temperature">
                                            {{$item->temp}}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----hum --->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-umbrella-13  text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Humidite</p>
                                    <p class="card-title" id="humidite">
                                        {{$item->hum}}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----moisture ---->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-sound-wave text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">moisture</p>
                                    <p class="card-title" id="moisture">
                                        {{$item->moisture}}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----waterlvl ----->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">niveau d'eau</p>
                                    <p class="card-title" id="waterlvl">
                                        {{$item->waterlvl}}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Stat</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class=" col-12 col-lg-12 col-md-12" style="margin-bottom:  320px">
                <!---display warn - no posts found--->
                <div class="alert alert-danger" style="margin:15px ; padding-top: 30px ">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons" style="color:white">warning</i>
                        </div>
                        <b>No posts found  </b> <p> data cannot be retrieved due to an unexpected error</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush
