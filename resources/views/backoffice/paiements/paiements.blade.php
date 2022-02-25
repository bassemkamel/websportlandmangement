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

                            <h6 class="card-title" style="margin-left: 21px;">Total Price = {{$totalProgram}}</h6>
                            <h6 class="card-title" style="margin-left: 21px;">Total total costed = {{$totalCosted}}</h6>
                            <h6 class="card-title" style="margin-left: 21px;">Total total payment = {{$totalPayment}}</h6>

                            <div class="col-3">
                                <a href="{{route('addpaiement',['client_id' =>$client_id,'program_id' =>$program_id])}}" type="button" class="btn btn-primary"
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
                                            <th>Price</th>
                                            <th>Program Name</th>
                                            <th>Session number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($paiements as $paiement)
                                        <tr>
                                            <td> {{$paiement->id}}</td>
                                            <td> {{$paiement->user->nom_user}}</td>
                                            <td> {{$paiement->user->prenom_user}}</td>
                                            <td> {{$paiement->montant}}</td>
                                            <td> {{$paiement->program->nom_program }}</td>
                                            <td> {{$paiement->program->nombre_seance}}</td>



                                        </tr>

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


<script>
function addparticipe() {
    var url_string = window.location.href;
    var myParam = url_string.lastIndexOf('/');
    let id = url_string.substring(myParam + 1, url_string.length);
    // alert(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('input[type="search"]').val('').keyup();
    var participes = [];
    $('input[type=checkbox]').each(function() {
        if (this.checked) {
            participes.push($(this).val());
        }
    });
    // alert(participes);
    // alert(id);
    $(document).ready(function() {
        var formData = new FormData();
        formData.append('_token: ', '{{ csrf_token() }}');
        formData.append('id', id);
        formData.append('participes', participes);
        $.ajax({
            type: 'post',
            url: "{{ route('storet') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                window.location.reload();
                //    alert(data.success);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
}
</script>



@endsection