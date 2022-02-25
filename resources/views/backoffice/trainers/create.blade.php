@extends("backoffice.template.template")

@section("content")
{{session()->put('role',"Trainer")}}

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Trainers</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Trainers</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Trainers > Add Trainer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_user" value="{{old('nom_user')}}" class="form-control"
                                id="inputEmail3" placeholder="Name">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" name="prenom_user" value="{{old('prenom_user')}}"
                                class="form-control" id="inputEmail3" placeholder="Last Name">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email_user" value="{{old('email_user')}}" class="form-control"
                                id="inputEmail3" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-6">
                            <input type="date" name="date_naissance_trainer" value="{{old('date_naissance_trainer')}}"
                                class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" name="tel_trainer" value="{{old('tel_trainer')}}" class="form-control"
                                id="inputEmail3" placeholder="Phone">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="gender_trainer" name="gender_trainer"> "
                                name="gender_trainer">
                                <option value="Man">Man</option>
                                <option value="Women">Women</option>
                            </select>
                        </div>
                    </div>








                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="country_trainer" name="country_trainer"> 
                                <option value="Tunisia">Tunisia</option>
                                <option value="France">France</option>
                                <option value="Algeria">Algeria</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-6">
                            <input type="text" name="ville_trainer" value="{{old('ville_trainer')}}"
                                class="form-control" id="inputEmail3" placeholder="City">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Fee</label>
                        <div class="col-sm-6">
                            <input type="text" name="fee_trainer" value="{{old('fee_trainer')}}"
                                class="form-control" id="inputEmail3" placeholder="Fee">
                        </div>
                    </div>




                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" value="{{old('password')}}"
                                class="form-control" id="inputEmail3" placeholder="Password">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Confirm password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"
                                class="form-control" id="inputEmail3" placeholder="Confirm password">
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
    @endsection