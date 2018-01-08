@extends('layouts.app')

@section('content')


    <div class="row col-md-12 col-lg-12 col-sm-12">
        <form method="post" action="{{ route('advertisements.store')}}">
            {{ csrf_field() }}

            <table width="100%">
                <tr>


                    <td width="100%" colspan="4" class="bg-primary table-bordered">
                        <div align="center">
                            <h2>ΚΑΤΑΧΩΡΗΣΗ ΑΓΓΕΛΙΑΣ</h2>
                        </div>
                        <br>

                    </td>


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
                            for ($i = 1; $i <= 12; $i++) {
                                    echo "<option value=$i>$i</option>";
                            }
                            echo "</select>";
                            ?>

                        </div>
                    </td>
                    <td width="20%" ></td>

                    <td width="30%">
                        <div class="form-group">

                            <?php
                            echo "<label class=\"control-label\" for=\"month\">Χρονολογια</label>";
                            echo " <select id=\"year\" class=\"form-control\" name=\"year\">";
                            for ($i = 1970; $i <= 2018; $i++) {
                                    echo "<option value=$i>$i</option>";
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
                            <label class="control-label" for="alarm_system">Συναγερμός</label>
                            <select id="alarm_system" class="form-control" name="alarm_system">
                                <option value=0 selected>ΟΧΙ</option>
                                <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                    <td width="30%">
                        <div class="form-group">

                            <label class="control-label" for="aluminium_wheels">Ζαντες Αλλουμινιου</label>
                            <select id="aluminium_wheels" class="form-control" name="aluminium_wheels">
                            <option value=0 selected>ΟΧΙ</option>
                            <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                </tr>
                <!-- multimedia system and fog Lights drop down menus-->
                <tr>
                    <td width="30%">
                        <div class="form-group">
                            <label class="control-label" for="multimedia_system">Ηχοσυστημα</label>
                            <select id="multimedia_system" class="form-control" name="multimedia_system">
                            <option value=0 selected>ΟΧΙ</option>
                            <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                    <td width="30%">
                        <div class="form-group">
                            <label class="control-label" for="fog_lights">Προβολείς ομίχλης</label>
                            <select id="fog_lights" class="form-control" name="fog_lights">
                                <option value=0 selected>ΟΧΙ</option>
                                <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                </tr>
                <!-- ABS and ESP drop down menus-->
                <tr>
                    <td width="30%">
                        <div class="form-group">
                            <label class="control-label" for="abs">ABS</label>
                            <select id="abs" class="form-control" name="abs">
                                <option value=0 selected>ΟΧΙ</option>
                                <option value=1>ΝΑΙ</option>
                            </select>
                        </div>
                    </td>
                    <td width="20%" ></td>

                    <td width="30%">
                        <div class="form-group">
                            <label class="control-label" for="esp">ESP</label>
                            <select id="esp" class="form-control" name="esp">
                                <option value=0 selected>ΟΧΙ</option>
                                <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                </tr>

                <!-- parking system drop down menu and wheel size field-->
                <tr>
                    <td width="30%">
                        <div class="form-group">
                            <label class="parking_system" for="abs">Αισθητηρες Παρκαρίσματος</label>
                            <select id="parking_system" class="form-control" name="parking_system">
                                <option value=0 selected>ΟΧΙ</option>
                                <option value=1>ΝΑΙ</option>
                            </select>

                        </div>
                    </td>
                    <td width="20%" ></td>

                    <td width="30%">
                        <div class="form-group">

                            <?php
                            echo "<label class=\"control-label\" for=\"wheels_size\">Διαμετρος Ζαντας</label>";
                            echo " <select id=\"wheels_size\" class=\"form-control\" name=\"wheels_size\">";
                            for ($i = 13; $i <= 29; $i++) {
                                 echo "<option value=$i>$i</option>";
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
                                    class="form-control autosize-target text-left"></textarea>
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
                            />
                        </div>
                    </td>
                    <td width="70" colspan="3"></td>
                </tr>
                <!--  edit and cancel button -->
                <tr>
                    <td colspan="4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Καταχώρηση">
                        </div>
                    </td>
                </tr>
            </table>

        </form>
    </div>

@endsection

