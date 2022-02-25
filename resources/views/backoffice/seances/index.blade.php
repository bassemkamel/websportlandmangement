@extends("backoffice.template.template")
@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sessions List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../../../">Home</a></li>
                    <li class="breadcrumb-item active">Sessions</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@if(Session::has('success'))
            <p style="color:red; margin-left:17px;">{{ Session::get('success') }}</p>
@endif
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <!-- /.card -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Session List</h3>
                            </div>
                            <br>
                            <div class="col-3" hidden>
                                <a href="{{route('seances.create')}}" type="button" class="btn btn-primary"
                                    style="margin-left: 21px;">Add</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table hover  data-table-export nowrap ">
                                    <thead>
                                        <tr>
                                            <th>ID Session</th>
                                            <th>Date</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Program Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($seances as $seance)
                                        @if ($seance->etat=="enable")
                                        <tr>
                                            <td> {{$seance->id}}</td>
                                            <td> {{$seance->date_seance_debut}}</td>
                                            <td> {{$seance->debut_seance}}</td>
                                            <td> {{$seance->fin_seance}}</td>
                                            <td> {{$seance->program->nom_program}}</td>
                                            <td>


                                            <li class="list-inline-item">
                                                    <a href="{{route('presencegetclient',$seance->id)}}"
                                                        class="btn btn-outline-secondary btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Presence List"><i
                                                            class="fa fa-tasks"></i></a>
                                                </li>


                                            </td>



                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>





        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>



@endsection