@extends("backoffice.template.template")

@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clients</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Clients</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Clients > Edit Client</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('clients.update',$client->id)}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                @method('put')


                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_user" value="{{$client->user->nom_user}}" class="form-control"
                                id="inputEmail3" placeholder="Name">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" name="prenom_user" value="{{$client->user->prenom_user}}"
                                class="form-control" id="inputEmail3" placeholder="Last Name">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email_user" value="{{$client->user->email_user}}"
                                class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-6">
                            <input type="date" name="date_naissance_client"
                                value="{{$client->date_naissance_client}}" class="form-control" id="inputEmail3"
                                placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" name="tel_client" value="{{$client->tel_client}}" class="form-control"
                                id="inputEmail3" placeholder="Phone">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="gender_client" name="gender_client">
                                <option value="Man" {{ ( $client->gender_client == "Man") ? 'selected' : '' }}>Man
                                </option>
                                <option value="Women" {{ ( $client->gender_client == "Women") ? 'selected' : '' }}>
                                    Women</option>
                            </select>
                        </div>
                    </div>








                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="country_client" name="country_client">>
                                <option value="Tunisia"
                                    {{ ( $client->country_client == "Tunisia") ? 'selected' : '' }}>Tunisia</option>
                                <option value="France" {{ ( $client->country_client == "France") ? 'selected' : '' }}>
                                    France</option>
                                <option value="Algeria"
                                    {{ ( $client->country_client == "Algeria") ? 'selected' : '' }}>Algeria</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-6">
                            <input type="text" name="ville_client" value="{{$client->ville_client}}"
                                class="form-control" id="inputEmail3" placeholder="City">
                        </div>
                    </div>













                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body col-4">
                        <button type="submit" class="btn btn-info .float-sm-left">Modify</button>
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
    @endsection