@extends("backoffice.template.template")
@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Programs List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../../../">Home</a></li>
                    <li class="breadcrumb-item active">Programs</li>
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
                                <h3 class="card-title">Program List</h3>
                            </div>
                            <br>
                            <div class="col-3">
                                <a href="{{route('programs.create')}}" type="button" class="btn btn-primary"
                                    style="margin-left: 21px;">Add</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table hover  data-table-export nowrap ">
                                    <thead>
                                        <tr>
                                            <th>ID Program</th>
                                            <th>Program Name</th>
                                            <th>Session Price</th>
                                            <th>Term Start date</th>
                                            <th>Term End date</th>
                                            <th>Sport</th>
                                            <th>Location</th>
                                            <th>Trainer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programs as $program)
                                        @if ($program->etat=="enable")
                                        <tr>
                                            <td> {{$program->id}}</td>
                                            <td> {{$program->nom_program}}</td>
                                            <td> {{$program->prix_seance}}</td>
                                            <td> {{$program->program_date_debut}}</td>
                                            <td>



                                                <li class="list-inline-item">
                                                    <a href="{{route('participesgetclient',$program->id)}}"
                                                        class="btn btn-outline-secondary btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Client List"><i
                                                            class="fa fa-tasks"></i></a>
                                                </li>


                                                <li class="list-inline-item">
                                                    <a href="{{route('paiementsgetallclient',$program->id)}}"
                                                        class="btn btn-outline-secondary btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Payement List"><i
                                                            class="fa fa-dollar"></i></a>
                                                </li>

                                                <li class="list-inline-item">
                                                    <a href="{{route('getcalendarbyprogram',$program->id)}}"
                                                        class="btn btn-outline-success btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Calendar"><i
                                                            class="fa fa-calendar"></i></a>
                                                </li>


                                                <li class="list-inline-item">
                                                    <a href="{{route('getbyid',$program->id)}}"
                                                        class="btn btn-outline-dark btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Sessions"><i class="fa fa-bars"></i></a>
                                                </li>


                                                <li class="list-inline-item">
                                                    <a href="{{route('programs.edit',$program->id)}}"
                                                        class="btn btn-outline-primary btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item">

                                                    <form action="{{route('programs.destroy',$program->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                                            type="button" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </li>


                                            </td>
                                            <td> {{$program->program_date_fin}}</td>

                                            <td> {{$program->sport->nom_sport }}</td>


                                            <td> {{$program->location->nom_location  }}</td>

                                            <td> {{$program->user->nom_user." ".$program->user->prenom_user  }}</td>



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