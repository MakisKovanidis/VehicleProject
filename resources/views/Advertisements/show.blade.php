@extends('layouts.app')

@section('content')

    <div class="col-md-12 col-lg-12 col-sm-3 pull-right">
        <div class="panel panel-primary">
            <div class="panel-heading">{{$advertisement->title}}</div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">ΜΑΡΚΑ :<b>{{$advertisement->brand}}</b></li>
                    <li class="list-group-item">ΜΟΝΤΕΛΟ:<b>{{$advertisement->model}}</b></li>
                    <li class="list-group-item">ΧΙΛΙΟΜΕΤΡΑ:<b>{{$advertisement->kilometers}} ΧΛΜ</b></li>
                    <li class="list-group-item">ΧΡΟΝΟΛΟΓΙΑ:<b>{{$advertisement->month}}/{{$advertisement->year}}</b></li>
                    <li class="list-group-item">ΠΕΡΙΓΡΑΦΗ:<b>{{$advertisement->description}}</b></li>
                    <li class="list-group-item">
                        <?php
                        if($advertisement->alarm_system){
                            echo "Σύστημα Συναγερμου: <b> ΝΑΙ</b>";
                        }
                        else{
                            echo "Σύστημα Συναγερμου: <b> OXI</b>";
                        }
                        ?>
                    </li><li class="list-group-item">
                        <?php
                        if($advertisement->multimedia_system){
                            echo "Συστημα Πολυμεσων - Ηχοστηστημα: <b> ΝΑΙ</b>";
                        }
                        else{
                            echo "Συστημα Πολυμεσων - Ηχοστηστημα: <b> OXI</b>";
                        }
                        ?>
                    </li><li class="list-group-item">
                        <?php
                        if($advertisement->aluminium_wheels){
                            echo "Ζαντές Αλουμινιου:<b> ΝΑΙ</b>";
                        }
                        else{
                            echo "Ζαντές Αλουμινιου: <b> OXI</b>";
                        }
                        ?>
                    </li><li class="list-group-item">
                        <?php
                        if($advertisement->fog_lights){
                            echo "Προβολεις ομίχλης:<b> ΝΑΙ</b>";
                        }
                        else{
                            echo "Προβολεις ομίχλη: <b> OXI</b> ";
                        }
                        ?>
                    </li>

                    <li class="list-group-item">
                        <?php
                        if($advertisement->abs){
                            echo "ABS:<b> ΝΑΙ</b>";
                        }
                        else{
                            echo "ABS: <b> OXI</b>";
                        }
                        ?>
                    </li><li class="list-group-item">
                        <?php
                        if($advertisement->esp){
                            echo "ESP: <b> ΝΑΙ</b>";
                        }
                        else{
                            echo "ESP: <b> OXI</b>";
                        }
                        ?>
                    </li><li class="list-group-item">
                        <?php
                        if($advertisement->parking_system){
                            echo "Συστημα παρκαρισματος: <b> ΝΑΙ</b>";
                        }
                        else{
                            echo "Συστημα παρκαρισματος: <b> OXI</b>";
                        }
                        ?>
                    <li class="list-group-item"><b>ΔΙΑΜΕΤΡΟΣ ΖΑΝΤΑΣ:{{$advertisement->wheels_size}} inches</b></li>
                    <li class="list-group-item" font-size="20px"><b>ΤΙΜΗ:{{$advertisement->price}} €</b></li>
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

