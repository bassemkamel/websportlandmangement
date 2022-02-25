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
        <h3 class="card-title">Locations > Edit Location</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('locations.update',$location->id)}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                @method('put')


                <div class="card-body">

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_location" value="{{$location->nom_location}}"
                                class="form-control" id="inputEmail3" placeholder="Location">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="fees_location" value="{{$location->fees_location}}"
                                class="form-control" id="inputEmail3" placeholder="Fees">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location Name</label>
                        <div class="col-sm-6">
                            <select name="sport_id" class="form-control">

                                @foreach ($sports as $sport)

                                <option value="{{$sport->id}}"
                                    {{ $sport->id == $location->sport->sport_id ? 'selected' : '' }}>
                                    {{$sport->nom_sport}}
                                </option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>





                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="country_location" name="country_location">>
                            <option value="Tunisia" {{ ( $location->country_location == "Tunisia") ? 'selected' : '' }}>
                                Tunisia</option>
                            <option value="France" {{ ( $location->country_location == "France") ? 'selected' : '' }}>
                                France</option>
                            <option value="Algeria" {{ ( $location->country_location == "Algeria") ? 'selected' : '' }}>
                                Algeria</option>
                        </select>
                    </div>
                </div>




                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-6">
                        <input type="text" name="ville_location" value="{{$location->ville_location}}"
                            class="form-control" id="inputEmail3" placeholder="City">
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