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
        <h3 class="card-title">Programs > Edit Program</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('programs.update',$program->id)}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                @method('put')



                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Program Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_program" value="{{$program->nom_program}}" class="form-control"
                                id="inputEmail3" placeholder="Program">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Session price</label>
                        <div class="col-sm-6">
                            <input type="text" name="prix_seance" value="{{$program->prix_seance}}" class="form-control"
                                id="inputEmail3" placeholder="Session price">
                        </div>
                    </div>






                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Term Start date</label>
                        <div class="col-sm-6">
                            <input type="date" name="program_date_debut" value="{{$program->program_date_debut}}"
                                class="form-control" id="inputEmail3" placeholder="Term Start date">
                        </div>
                    </div>





                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Term End date</label>
                        <div class="col-sm-6">
                            <input type="date" name="program_date_fin" value="{{$program->program_date_fin}}"
                                class="form-control" id="inputEmail3" placeholder="Term End date">
                        </div>
                    </div>





                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sport</label>
                        <div class="col-sm-6">
                            <select name="sport_id" class="form-control">
                                @foreach ($sports as $sport)
                                <option value="{{$sport->id}}"
                                    {{ $sport->id == $program->sport->id ? 'selected' : '' }}>{{$sport->nom_sport}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-6">
                            <select name="location_id" class="form-control">
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}"
                                    {{ $location->id == $program->location->id ? 'selected' : '' }}>
                                    {{$location->nom_location}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Trainer</label>
                        <div class="col-sm-6">
                            <select name="user_id" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}" {{ $user->id == $program->user->id ? 'selected' : '' }}>
                                    {{$user->nom_user." ".$user->prenom_user}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Monday" name="Monday" id="inlineCheckbox1" value="1"
                            {{ $program->monday ==1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                    </div>


                    <br>
                    <br>

                    <div class="form-group row Monday" {{ $program->monday ==0 ? ' style="display: none;" ' : '' }}>

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="monday_debut_seance" value="{{ $program->monday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Monday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="monday_fin_seance" value="{{ $program->monday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Tuesday"  name="Tuesday" id="inlineCheckbox2" value="2"
                            {{ $program->tuesday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                    </div>
                    <br>
                    <br>


                    <div class="form-group row Tuesday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="tuesday_debut_seance" value="{{ $program->tuesday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Tuesday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="tuesday_fin_seance" value="{{ $program->tuesday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>





                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Wednesday"  name="Wednesday" id="inlineCheckbox2" value="3"
                            {{ $program->wednesday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Wednesday</label>
                    </div>
                    <br>
                    <br>



                    <div class="form-group row Wednesday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="wednesday_debut_seance" value="{{ $program->wednesday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Wednesday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="wednesday_fin_seance" value="{{ $program->wednesday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>




                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Thursday"  name="Thursday" id="inlineCheckbox2" value="4"
                            {{ $program->thursday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Thursday</label>
                    </div>
                    <br>
                    <br>



                    <div class="form-group row Thursday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="thursday_debut_seance" value="{{ $program->thursday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Thursday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="thursday_fin_seance" value="{{ $program->thursday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>






                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Friday"  name="Friday" id="inlineCheckbox2" value="5"
                            {{ $program->friday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Friday</label>
                    </div>
                    <br>
                    <br>





                    <div class="form-group row Friday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="friday_debut_seance" value="{{ $program->friday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Friday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="friday_fin_seance" value="{{ $program->friday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>






                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Saturday" name="Saturday" id="inlineCheckbox2" value="6"
                            {{ $program->saturday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Saturday</label>
                    </div>
                    <br>
                    <br>



                    <div class="form-group row Saturday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="saturday_debut_seance" value="{{ $program->saturday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Saturday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="saturday_fin_seance" value="{{ $program->saturday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  id="Sunday"  name="Sunday" id="inlineCheckbox2" value="7"
                            {{ $program->sunday == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
                    </div>
                    <br>
                    <br>




                    <div class="form-group row Sunday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="sunday_debut_seance" value="{{ $program->sunday_debut_seance}}"
                                class="form-control" id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row Sunday">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="sunday_fin_seance" value="{{ $program->sunday_fin_seance}}"
                                class="form-control" id="inputEmail3" placeholder="End">
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-body col-4">
                            <button type="submit" class="btn btn-info .float-sm-right">Modify</button>
                        </div>
                        <div class="col-4">
                        </div>
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

    if ($("#Monday").is(':checked')) {
            $(".Monday").show();
        } else {
            $(".Monday").toggle();
        }

    


    $("#Monday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Monday").show();
        } else {
            $(".Monday").toggle();
        }
    });




    if ($("#Tuesday").is(':checked')) {
            $(".Tuesday").show();
        } else {
            $(".Tuesday").toggle();
        }



    $("#Tuesday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Tuesday").show();
        } else {
            $(".Tuesday").toggle();
        }
    });




    if ($("#Wednesday").is(':checked')) {
            $(".Wednesday").show();
        } else {
            $(".Wednesday").toggle();
        }



    $("#Wednesday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Wednesday").show();
        } else {
            $(".Wednesday").toggle();
        }
    });





    if ($("#Thursday").is(':checked')) {
            $(".Thursday").show();
        } else {
            $(".Thursday").toggle();
        }




    $("#Thursday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Thursday").show();
        } else {
            $(".Thursday").toggle();
        }
    });







    if ($("#Friday").is(':checked')) {
            $(".Friday").show();
        } else {
            $(".Friday").toggle();
        }



    $("#Friday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Friday").show();
        } else {
            $(".Friday").toggle();
        }
    });




    if ($("#Saturday").is(':checked')) {
            $(".Saturday").show();
        } else {
            $(".Saturday").toggle();
        }




    $("#Saturday").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $(".Saturday").show();
        } else {
            $(".Saturday").toggle();
        }
    });




    if ($("#Sunday").is(':checked')) {
            $(".Sunday").show();
        } else {
            $(".Sunday").toggle();
        }






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