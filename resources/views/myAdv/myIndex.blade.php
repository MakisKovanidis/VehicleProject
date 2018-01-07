@extends('layouts.app')

@section('content')

    <div class="col-sm-3 col-md-3 col-lg-3  pull-left">
        <div class="well">
            <h3 align="center">Φιλτρά Αναζήτησης</h3>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="abs" class="control-label">Abs</label>
                    <select class="form-control" name="" id="location1">
                        <option value="">Any</option>
                        <option value="">ΝΑΙ</option>
                        <option value="">ΟΧΙ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aluminium_wheels" class="control-label">Ζάντες Αλουμίνιου</label>
                    <select class="form-control" name="" id="type1">
                        <option value="">Any</option>
                        <option value="">ΝΑΙ</option>
                        <option value="">ΟΧΙ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pricefrom" class="control-label">Min Price</label>
                    <div class="input-group">
                        <div class="input-group-addon" id="basic-addon1">$</div>
                        <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="priceto" class="control-label">Max Price</label>
                    <div class="input-group">
                        <div class="input-group-addon" id="basic-addon2">$</div>
                        <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
                    </div>
                </div>
                <p class="text-center"><a class="btn btn-primary" href="#"  role="button">Search</a></p>
            </form>
        </div>
    </div>
    <div class="col-md-9 col-lg-9 col-sm-3 pull-right">
        <div class="panel panel-primary">
            <div class="panel-heading">ΑΓΓΕΛΙΕΣ</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($advertisements as $advertisement)
                        <li class="list-group-item">{{$advertisement->title}},{{$advertisement->model}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@endsection