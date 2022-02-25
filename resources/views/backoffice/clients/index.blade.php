@extends("backoffice.template.template")
@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clients List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../../../">Home</a></li>
                    <li class="breadcrumb-item active">Clients</li>
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
                                <h3 class="card-title">Client List</h3>
                            </div>
                            <br>
                            <div class="col-3">
                                <a href="{{route('clients.create')}}" type="button" class="btn btn-primary"
                                    style="margin-left: 21px;">Add</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table hover  data-table-export nowrap ">
                                    <thead>
                                        <tr>
                                            <th>ID Client</th>
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                            <th>Must payed</th>
                                            <th>Payed</th>
                                            <th>Programs cost</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                        @if ($client->etat=="enable")
                                        <tr>
                                            <td> {{$client->id}}</td>
                                            <td> {{$client->user->nom_user}}</td>
                                            <td> {{$client->user->prenom_user}}</td>
                                            <td> {{$client->tel_client}}</td>
                                            <td> {{$client->country_client}}</td>
                                            <td> {{$client->ville_client}}</td>
                                            <td> {{$client->gender_client}}</td>
                                            <td> {{$client->user->email_user}}</td>

                                            <td>

                                            
                                            <li class="list-inline-item">
                                                    <a href="{{route('getcalendarbyclient',$client->id)}}"
                                                        class="btn btn-outline-success btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Calendar"><i class="fa fa-calendar"></i></a>
                                                </li>

                                                <li class="list-inline-item">
                                                    <a href="{{route('clients.edit',$client->id)}}"
                                                        class="btn btn-outline-primary btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item">

                                                    <form action="{{route('clients.destroy',$client->id)}}"
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
                                            <td> {{$client->totalpaiement}}</td>
                                            <td> {{$client->totalCostedAll}}</td>
                                            <td> {{$client->totalPaymentAllPrograms}}</td>



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