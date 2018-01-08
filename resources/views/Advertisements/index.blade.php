@extends('layouts.app')

@section('content')

    <div class="col-sm-3 col-md-3 col-lg-3  pull-left">
        <div class="well">
            <h3 align="center">Φιλτρά Αναζήτησης</h3>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="brand" class="control-label">Mάρκα</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="brand">
                    </div>
                </div>

                <div class="form-group">
                    <label for="model" class="control-label">Μοντελο</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="model" aria-describedby="basic-addon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="abs" class="control-label">Abs</label>
                    <select class="form-control" name="" id="location1">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aluminium_wheels" class="control-label">Ζάντες Αλουμίνιου</label>
                    <select class="form-control" name="" id="aluminium_wheels">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="multimedia_system" class="control-label">Συστημα Πολυμέσων</label>
                    <select class="form-control" name="" id="multimedia_system">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="parking_system" class="control-label">Συστημα παρταρίσματος</label>
                    <select class="form-control" name="" id="parking_system">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alarm_system" class="control-label">Συστημα Συναγερμου</label>
                    <select class="form-control" name="" id="alarm_system">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="esp" class="control-label">esp (συστημα ευσταθειας)</label>
                    <select class="form-control" name="" id="esp">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fog_lights" class="control-label">Προβολεις ομίχλης</label>
                    <select class="form-control" name="" id="fog_lights">
                        <option value="">Any</option>
                        <option value=1>ΝΑΙ</option>
                        <option value=0>ΟΧΙ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="year" class="control-label">Χρονολογια από</label>
                    <div class="input-group">

                        <input type="text" class="form-control" id="year" aria-describedby="basic-addon1">
                    </div>
                </div>


                <div class="form-group">
                    <label for="price" class="control-label">Μεγιστη Τιμη</label>
                    <div class="input-group">
                        <div class="input-group-addon" id="basic-addon2">€</div>
                        <input type="text" class="form-control" id="price" aria-describedby="basic-addon1">
                    </div>
                </div>
                <p class="text-center"><a class="btn btn-primary" href="#"  role="button">Search</a></p>
            </form>
        </div>
    </div>
<div class="col-md-9 col-lg-9 col-sm-3 pull-right">
        @foreach($advertisements as $advertisement)
            <div class="panel panel-primary">

                <div class="panel-heading">{{$advertisement->title}}</div>
                <div class="panel-body">
                    <table class="col-md-9 col-lg-12 col-sm-3 list-group">
                        <tr>
                            <td colspan="2" width="50%"> Μαρκα: {{$advertisement->brand}} </td>
                            <td colspan="2" width="50%"> Μοντέλο: {{$advertisement->model}}</td>
                        </tr>

                        <tr>
                            <td colspan="2" width="50%">  Χιλιομετρα: {{$advertisement->kilometers}}χλμ</td>
                            <td colspan="2" width="50%">  Χρονολογια: {{$advertisement->month}}/{{$advertisement->year}}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><b> Τιμή: {{$advertisement->price}} € </b></td>
                        </tr>

                        <tr>
                            <td width="25%">
                                <br>
                                <div class="col-md-2 col-xs-2 ">
                                    <p class="text-center"><a class="btn btn-warning " href="/advertisements/{{$advertisement->id}}"  role="button">ΛΕΠΤΟΜΕΡΙΕΣ>></a></p>
                                </div>
                            </td>

                            <td width="75%" colspan="2"></td>

                        </tr>
                    </table>

                </div>

            </div>
        @endforeach
    </div>


@endsection