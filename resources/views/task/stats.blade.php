@extends('master.app')
@section('title','Task Stats')
@section('head-script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="{{asset('js/services/task.js')}}"></script>
<script src="{{asset('js/task/stats.js')}}"></script>
@endsection
@section('content')
    <div data-ng-controller="TaskStats" class="row mt-5">
        <div class="col-md-3">
            <h4>Task Stats</h4>
        </div>
        <div class="col-md-9">
            <div id="chart"></div>
        </div>
    </div>
@endsection
