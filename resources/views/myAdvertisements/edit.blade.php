@extends('layouts.app')

@section('content')

<div class="row col-md-12 col-lg-12 col-sm-12">
    <form method="post" action="{{route('myAdvertisements.update',[$advertisement->id])}}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="put">
        <table width="100%">
            <tr>
                <td colspan="4">
                    <div class="form-group">
                        <label for="title">Τιτλος Αγγελιας<span class="required">*</span> </label>
                        <input
                                placeholder="Τιτλος Αγγελίας"
                                id="title"
                                required
                                name="title" {{--field name of database--}}
                                spellcheck="false"
                                class="form-control"
                                value="{{$advertisement->title}}"
                                />
                        </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
        <div class="form-group">
            <label for="brand">Μάρκα Οχήματος<span class="required">*</span> </label>
            <input
                    placeholder="Μαρκα οχηματος"
                    id="brand"
                    required
                    name="brand" {{--field name of database--}}
                    spellcheck="false"
                    class="form-control"
                    value="{{$advertisement->brand}}"
            />
        </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
        <div class="form-group">
            <label for="model">Μοντέλο<span class="required">*</span> </label>
            <input
                    placeholder="Μοντέλo οχηματος"
                    id="model"
                    required
                    name="model"
                    spellcheck="false"
                    class="form-control"
                    value="{{$advertisement->model}}"
            />
        </div>
            </td>
            </tr>
            <!-- month and year drop down menus-->
            <tr>
                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"month\">Μήνας</label>";
                        echo " <select id=\"month\" class=\"form-control\" name=\"month\">";
                        $month=$advertisement->month;
                        for ($i = 1; $i <= 12; $i++) {
                            if($month!=$i){
                                echo "<option value=$i>$i</option>";
                            }
                            else{
                                echo "<option value=$i selected>$i</option>";
                            }
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"month\">Χρονολογια</label>";
                        echo " <select id=\"year\" class=\"form-control\" name=\"year\">";
                        $year=$advertisement->year;
                        for ($i = 1970; $i <= 2018; $i++) {
                            if($year!=$i){
                                echo "<option value=$i>$i</option>";
                            }
                            else{
                                echo "<option value=$i selected>$i</option>";
                            }
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

            </tr>

            <!-- alarm system and aluminium wheels drop down menus-->
            <tr>
                <td width="30%">
        <div class="form-group">

            <?php
            echo "<label class=\"control-label\" for=\"alarm_system\">Συναγερμός</label>";
            echo " <select id=\"alarm_system\" class=\"form-control\" name=\"alarm_system\">";
            if ($advertisement->alarm_system){
                echo "<option value=0>ΟΧΙ</option>";
                echo " <option value=1 selected>ΝΑΙ</option>";
            }
            else{
                echo "<option value=0 selected>ΟΧΙ</option>";
                echo " <option value=1>ΝΑΙ</option>";
            }
            echo "  </select>";
            ?>

        </div>
                </td>
                <td width="20%" ></td>

                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"aluminium_wheels\">Ζαντες Αλλουμινιου</label>";
                        echo " <select id=\"aluminium_wheels\" class=\"form-control\" name=\"aluminium_wheels\">";
                        if ($advertisement->aluminium_wheels){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                             echo "<option value=0 selected>ΟΧΙ</option>";
                             echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

            </tr>
            <!-- multimedia system and fog Lights drop down menus-->
            <tr>
                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"multimedia_system\">Ηχοσυστημα</label>";
                        echo " <select id=\"multimedia_system\" class=\"form-control\" name=\"multimedia_system\">";
                        if ($advertisement->multimedia_system){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                            echo "<option value=0 selected>ΟΧΙ</option>";
                            echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"fog_lights\">Προβολείς ομίχλης</label>";
                        echo " <select id=\"fog_lights\" class=\"form-control\" name=\"fog_lights\">";
                        if ($advertisement->fog_lights){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                            echo "<option value=0 selected>ΟΧΙ</option>";
                            echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

            </tr>
            <!-- ABS and ESP drop down menus-->
            <tr>
                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"abs\">ABS</label>";
                        echo " <select id=\"abs\" class=\"form-control\" name=\"abs\">";
                        if ($advertisement->abs){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                            echo "<option value=0 selected>ΟΧΙ</option>";
                            echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"esp\">ESP</label>";
                        echo " <select id=\"esp\" class=\"form-control\" name=\"esp\">";
                        if ($advertisement->esp){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                            echo "<option value=0 selected>ΟΧΙ</option>";
                            echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

            </tr>

            <!-- parking system drop down menu and wheel size field-->
            <tr>
                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"parking_system\" for=\"abs\">Αισθητηρες Παρκαρίσματος</label>";
                        echo " <select id=\"parking_system\" class=\"form-control\" name=\"parking_system\">";
                        if ($advertisement->abs){
                            echo "<option value=0>ΟΧΙ</option>";
                            echo " <option value=1 selected>ΝΑΙ</option>";
                        }
                        else{
                            echo "<option value=0 selected>ΟΧΙ</option>";
                            echo " <option value=1>ΝΑΙ</option>";
                        }
                        echo "</select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>

                <td width="30%">
                    <div class="form-group">

                        <?php
                        echo "<label class=\"control-label\" for=\"wheels_size\">Διαμετρος Ζαντας</label>";
                        echo " <select id=\"wheels_size\" class=\"form-control\" name=\"wheels_size\">";
                        $wheels_size=$advertisement->wheels_size;
                        for ($i = 13; $i <= 29; $i++) {
                            if($wheels_size!=$i){
                                echo "<option value=$i>$i</option>";
                            }
                            else{
                                echo "<option value=$i selected>$i</option>";
                            }
                        }
                        echo "  </select>";
                        ?>

                    </div>
                </td>
                <td width="20%" ></td>
            </tr>
            <!-- kilometers field-->
            <tr>
                <td width="30%">
                    <div class="form-group">
                        <label for="kilometers">Χιλιόμετρα<span class="required">*</span> </label>
                        <input
                                placeholder="Χιολιομετρά"
                                id="kilometers"
                                required
                                name="kilometers" {{--field name of database--}}
                                spellcheck="false"
                                class="form-control"
                                value="{{$advertisement->kilometers}}"
                        />
                    </div>
                </td>
                <td width="70" colspan="3"></td>
            </tr>

            <!-- description field-->
            <tr>
                <td colspan="4">
                    <div class="form-group">
                        <label for="description">Περιγραφη<span class="required">*</span> </label>
                        <textarea
                                placeholder="Γραψ' τε κατι για την αγγελια"
                                style="resize: vertical"
                                id="description"
                                required
                                rows="5"
                                name="description"{{--field name of database--}}
                                spellcheck="false"
                                class="form-control autosize-target text-left">
                {{$advertisement->description}}</textarea>
                    </div>
                </td>
            </tr>

            <!-- price field-->
            <tr>
    <td width="30%">
        <div class="form-group">
            <label for="price">Τιμή<span class="required">*</span> </label>
            <input
                    placeholder="Τιμή"
                    id="price"
                    required
                    name="price" {{--field name of database--}}
                    spellcheck="false"
                    class="form-control"
                    value="{{$advertisement->price}}"
            />
        </div>
    </td>
<td width="70" colspan="3"></td>
</tr>
            <!--  edit and cancel button -->
            <tr>
                <td colspan="4">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Τροποποίηση">
        </div>
                </td>
            </tr>
        </table>

    </form>
</div>

@endsection