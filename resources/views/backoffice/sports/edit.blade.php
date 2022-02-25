@extends("backoffice.template.template")

@section("content")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sports</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Sports</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Sports > Edit Sport</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="{{route('sports.update',$sport->id)}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                @method('put')


                <div class="card-body">

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sport Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom_sport" value="{{$sport->nom_sport}}" class="form-control"
                                id="inputEmail3" placeholder="Sport">
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