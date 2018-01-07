@extends('layouts.app')

@section('content')
<div style="background: url({{ URL::asset('images/wallpaper.jpg') }}) no-repeat center center fixed;">
    <div class="col-md-9 col-lg-9 col-sm-3">
        <div class="panel panel-primary">
            <div class="panel-heading">OI ΑΓΓΕΛΙΕΣ MOY</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($advertisements as $advertisement)
                        <li class="list-group-item">{{$advertisement->title}},{{$advertisement->model}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection