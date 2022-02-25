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
            <form action="{{route('storetpaiement',['client_id' =>$client_id,'program_id' =>$program_id])}}" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf

                <div class="card-body">

                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-6">
                            <input type="text" name="montant" value="{{old('montant')}}" class="form-control"
                                id="inputEmail3" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Payement Mode</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="mode_paiement" name="mode_paiement"> 
                                <option value="Manual">Manual</option>
                                <option value="Check">Check</option>
                                <option value="Transfer">Transfer</option>
                            </select>
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