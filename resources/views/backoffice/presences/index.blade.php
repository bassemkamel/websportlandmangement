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
                                <a onclick="addpresence()" type="button" class="btn btn-primary"
                                    style="margin-left: 21px;">Save</a>
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
                                            <th>abn</th>
                                            <th>ab</th>
                                            <th>pr</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                        @if ($client->etat=="enable")
                                        <tr>
                                            <td> {{$client->client_id}}</td>
  
                                            <td> {{$client->user->nom_user}}</td>
                                            <td> {{$client->user->prenom_user}}</td>
                                            <td> {{$client->tel_client}}</td>
                                            <td> {{$client->country_client}}</td>
                                            <td> {{$client->ville_client}}</td>
                                            <td> {{$client->gender_client}}</td>
                                            <td> {{$client->user->email_user}}</td>
                                            <td>
                                                <div class="form-check">
                                                    <input id="checkboxs" idattr="{{$client->id}}" name="checkboxs{{$client->id}}" 
                                                        type="radio" value="0" 
                                                        {{ $client->check == 0 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input id="checkboxs" name="checkboxs{{$client->id}}" 
                                                        type="radio" value="1" 
                                                        {{ $client->check == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input id="checkboxs" name="checkboxs{{$client->id}}" 
                                                        type="radio" value="2" 
                                                        {{ $client->check == 2 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    </label>
                                                </div>
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


<script>
function addpresence() {
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
    // alert($("input[type='radio']:checked").val());
    var presences = [];
    var personnes = [];
    $('input[type=radio]').each(function() {
        if (this.checked) {
            $idradio=$(this).attr('name');
            // alert($('[name='+$idradio+']').val())
            // $("#InvCopyRadio:checked").val();

            presences.push($('[name='+$idradio+']:checked').val());
        }
    });

    $('input[type=radio]').each(function() {
        if (this.checked) {
            $idradio=$(this).attr('name');
            
            // alert($('[name='+$idradio+']:checked').val())
            // $("#InvCopyRadio:checked").val();
            
            personnes.push($('[name='+$idradio+']').attr("idattr"));
        }
    });
    // alert(personnes);
    // alert(id);
    $(document).ready(function() {
        var formData = new FormData();
        formData.append('_token: ', '{{ csrf_token() }}');
        formData.append('id', id);
        formData.append('presences', presences);
        formData.append('personnes', personnes);
        // alert(presences);
         $.ajax({
            type: 'post',
            url: "{{ route('storetpresence') }}",
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