@extends("backoffice.template.template")

@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Programs</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Programs</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Programs > Add Program</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('programs.store')}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf

                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Program Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_program" value="{{old('nom_program')}}" class="form-control"
                                id="inputEmail3" placeholder="Program">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Session price</label>
                        <div class="col-sm-6">
                            <input type="text" name="prix_seance" value="{{old('prix_seance')}}" class="form-control"
                                id="inputEmail3" placeholder="Session price">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Term Start date</label>
                        <div class="col-sm-6">
                            <input type="date" name="program_date_debut" value="{{old('program_date_debut')}}"
                                class="form-control" id="inputEmail3" placeholder="Term Start date">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Term End date</label>
                        <div class="col-sm-6">
                            <input type="date" name="program_date_fin" value="{{old('program_date_fin')}}"
                                class="form-control" id="inputEmail3" placeholder="Term End date">
                        </div>
                    </div>





                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sport</label>
                        <div class="col-sm-6">
                            <select name="sport_id" class="form-control">
                                @foreach ($sports as $sport)
                                <option value="{{$sport->id}}">{{$sport->nom_sport}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>





                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-6">
                            <select name="location_id" class="form-control">
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->nom_location}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Trainer</label>
                        <div class="col-sm-6">
                            <select name="user_id" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->nom_user." ".$user->prenom_user}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-check form-check-inline justify-content-center">
                        <input class="form-check-input" type="checkbox" id="Monday" name="Monday" id="inlineCheckbox1"
                            value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                    </div>
                    <br>
                    <br>

                    <div class="form-group row Monday" style="display: none;" >

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="monday_debut_seance" value="{{old('monday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Monday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="monday_fin_seance" value="{{old('monday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Tuesday" name="Tuesday" id="inlineCheckbox2"
                            value="2">
                        <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                    </div>
                    <br>
                    <br>

                    <div class="form-group row Tuesday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="tuesday_debut_seance" value="{{old('tuesday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Tuesday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="tuesday_fin_seance" value="{{old('tuesday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Wednesday" name="Wednesday"
                            id="inlineCheckbox2" value="3">
                        <label class="form-check-label" for="inlineCheckbox2">Wednesday</label>
                    </div>

                    <br>
                    <br>

                    <div class="form-group row Wednesday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="wednesday_debut_seance" value="{{old('wednesday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Wednesday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="wednesday_fin_seance" value="{{old('wednesday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Thursday" name="Thursday"
                            id="inlineCheckbox2" value="4">
                        <label class="form-check-label" for="inlineCheckbox2">Thursday</label>
                    </div>

                    <br>
                    <br>

                    <div class="form-group row Thursday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="thursday_debut_seance" value="{{old('thursday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Thursday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="thursday_fin_seance" value="{{old('thursday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>




                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Friday" name="Friday" id="inlineCheckbox2"
                            value="5">
                        <label class="form-check-label" for="inlineCheckbox2">Friday</label>
                    </div>

                    <br>
                    <br>


                    <div class="form-group row Friday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="friday_debut_seance" value="{{old('friday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Friday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="friday_fin_seance" value="{{old('friday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Saturday" name="Saturday"
                            id="inlineCheckbox2" value="6">
                        <label class="form-check-label" for="inlineCheckbox2">Saturday</label>
                    </div>

                    <br>
                    <br>


                    <div class="form-group row Saturday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="saturday_debut_seance" value="{{old('saturday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Saturday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="saturday_fin_seance" value="{{old('saturday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>






                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Sunday" name="Sunday" id="inlineCheckbox2"
                            value="7">
                        <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
                    </div>


                    <br>
                    <br>




                    <div class="form-group row Sunday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="sunday_debut_seance" value="{{old('sunday_debut_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Sunday" style="display: none;">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="sunday_fin_seance" value="{{old('sunday_fin_seance')}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>





                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body col-4">
                        <button type="submit" class="btn btn-info .float-sm-left">Add</button>
                    </div>
                    <div class="col-4">
                    </div>
                </div>

                <!-- /.card-footer -->
            </form>
            <div class="col-2">
            </div>
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
$( document ).ready(function() {
        $("#Monday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Monday").show();
            } else {
                $(".Monday").toggle();
            }
        });




        $("#Tuesday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Tuesday").show();
            } else {
                $(".Tuesday").toggle();
            }
        });





        $("#Wednesday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Wednesday").show();
            } else {
                $(".Wednesday").toggle();
            }
        });





        $("#Thursday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Thursday").show();
            } else {
                $(".Thursday").toggle();
            }
        });




        $("#Friday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Friday").show();
            } else {
                $(".Friday").toggle();
            }
        });





        $("#Saturday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Saturday").show();
            } else {
                $(".Saturday").toggle();
            }
        });





        $("#Sunday").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".Sunday").show();
            } else {
                $(".Sunday").toggle();
            }
        });



    });
    </script>


    @endsection