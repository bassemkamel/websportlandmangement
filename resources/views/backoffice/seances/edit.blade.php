@extends("backoffice.template.template")

@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sessions</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Sessions</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Sessions > Edit Session</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('seances.update',$seance->id)}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                @method('put')


                <div class="card-body">


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Session Date</label>
                        <div class="col-sm-6">
                            <input type="date" name="date_seance" value="{{$seance->date_seance}}" class="form-control"
                                id="inputEmail3" placeholder="Session Date">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
                        <div class="col-sm-6">
                            <input type="time" name="debut_seance" value="{{$seance->debut_seance}}" class="form-control"
                                id="inputEmail3" placeholder="Start">
                        </div>
                    </div>




                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">End</label>
                        <div class="col-sm-6">
                            <input type="time" name="fin_seance" value="{{$seance->fin_seance}}" class="form-control"
                                id="inputEmail3" placeholder="End">
                        </div>
                    </div>








                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Program</label>
                        <div class="col-sm-6">
                            <select name="program_id" class="form-control">
                            @foreach ($programs as $program)
                                <option value="{{$program->id}}"
                                    {{ $program->id == $seance->program->program_id ? 'selected' : '' }}>
                                    {{$program->nom_program}}
                                </option>
                                @endforeach
                            </select>
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
    @endsection