@extends('layouts.app')

@section('content')

    <div class="col-md-12 col-lg-12 col-sm-3 pull-right">
        <div class="panel panel-primary">
            <div class="panel-heading">{{$advertisement->title}}</div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">ΜΑΡΚΑ :{{$advertisement->brand}}</li>
                    <li class="list-group-item">ΜΟΝΤΕΛΟ{{$advertisement->model}}</li>
                    <li class="list-group-item">ΧΙΛΙΟΜΕΤΡΑ:{{$advertisement->kilometers}} ΧΛΜ</li>
                    <li class="list-group-item">ΧΡΟΝΟΛΟΓΙΑ:{{$advertisement->month}}/{{$advertisement->year}}</li>
                    <li class="list-group-item">ΠΕΡΙΓΡΑΦΗ:{{$advertisement->description}}</li>
                    <li class="list-group-item">ABS:{{$advertisement->abs}}</li>
                    <li class="list-group-item">ESP:{{$advertisement->esp}}</li>
                </ul>
                <div class="row pad">
                    <div class="col-md-2 col-xs-2 ">
                        <p class="text-center"><a class="btn btn-primary" href="{{route('advertisements.index')}}"  role="button">Επιστροφή</a></p>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

