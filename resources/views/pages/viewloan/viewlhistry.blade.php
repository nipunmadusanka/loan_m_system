@extends('layouts.app')

@section('content')

    <body>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        {{-- breadCrumb --}}

        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">View Loan</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href={{ route('pages.login.dashboard') }}><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href={{ route('pages.login.dashboard') }}>Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif

                {{-- start update location --}}



                {{-- end update location --}}

                {{-- <div class="container">
                    <a href="" class="btn btn-primary">
                        Add New GRN +
                    </a>
                </div> --}}
                <hr>
                <!-- Button trigger modal -->
                {{-- Data Form --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Interest Rate</th>
                                            <th>Installment</th>
                                            <th>Payed</th>
                                            <th>Create Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 1; ?>
                                        @foreach ($paymentdata as $data)
                                        <tr>
                                            <input type="hidden" class="view_val" value="">
                                            <td>{{ $count }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->interest }}</td>
                                            <td>{{ $data->installment }}</td>
                                            <td>{{ $data->amount }}</td>

                                            <td>{{ $data->created_at }}</td>

                                            <?php $count += 1; ?>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#myTable').DataTable();
                    });
                    $(".viewGrn").click(function(e){
                    e.preventDefault();

                    console.log("done");
                        var slug = $(this).closest("tr").find('.view_val').val();

                        url = url.replace(':slug', slug);
                        window.location.href=url;
                    });
                    $(".editGrn").click(function(e){
                    e.preventDefault();

                    console.log("done");
                        var slug = $(this).closest("tr").find('.view_val').val();

                        url = url.replace(':slug', slug);
                        window.location.href=url;
                    });

                $(".btn-danger").click(function(e) {
                e.preventDefault();
                var delete_id = $(this).closest("tr").find('.view_val').val();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var data = {
                                "_token": $('input[name="_token"]').val(),
                                "id": delete_id,
                            };
                            $.ajax({
                                type: 'GET',
                                url: '/deleteproduct/' + delete_id,
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
                </script>
            </div>
        </div>
    </body>
@endsection
