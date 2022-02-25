@extends("backoffice.template.template")

@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Locations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Locations</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Locations > Add Location</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf

                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_location" value="{{old('nom_location')}}" class="form-control"
                                id="inputEmail3" placeholder="Location">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location Fees</label>
                        <div class="col-sm-6">
                            <input type="text" name="fees_location" value="{{old('fees_location')}}" class="form-control"
                                id="inputEmail3" placeholder="Fees">
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

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="country_location" name="country_location"> 
                                <option value="Tunisia">Tunisia</option>
                                <option value="France">France</option>
                                <option value="Algeria">Algeria</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-6">
                            <input type="text" name="ville_location" value="{{old('ville_location')}}"
                                class="form-control" id="inputEmail3" placeholder="City">
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