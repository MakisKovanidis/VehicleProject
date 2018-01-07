@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-lg-9 col-sm-3">
        @foreach($advertisements as $advertisement)
        <div class="panel panel-primary">

            <div class="panel-heading">{{$advertisement->title}}</div>
            <div class="panel-body">
                <table class="col-md-9 col-lg-9 col-sm-3 list-group">
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
                                <p class="text-center"><a class="btn btn-primary" href="/advertisements/{{$advertisement->id}}/edit"  role="button">Τροποποίηση</a></p>
                            </div>
                        </td>
                        <td width="25%">
                            <br>
                            <div class="col-md-2 col-xs-2 ">
                                <p class="text-center"><a class="btn btn-danger "href="#"
                                                          onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                                                          role="button" >
                                        Διαγραφή
                                    </a>

                                <form id="delete-form" action="{{ route('advertisements.destroy',[$advertisement->id]) }}"
                                      method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}

                                </form>
                            </div>
                        </td>
                        <td width="50%" colspan="2"></td>

                    </tr>
                </table>

</div>

</div>
@endforeach
</div>

@endsection