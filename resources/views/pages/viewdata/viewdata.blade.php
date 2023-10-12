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
                                    <h5 class="m-b-10">Dashboard</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href=""><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
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



                <!-- Modal 2-->
                <div class="modal fade " class="modal-dialog modal-dialog-centered" id="staticBackdropv"
                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paidloanLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="paidloanLabel">Loan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>


                            <!--Modal form-->

                            <form action="{{ Route('pages.viewdata.viewdata') }}" method="POST">

                                {{ csrf_field() }}

                                <div class="modal-body">

                                    <div class="card-body">

                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Customer Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Customer Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Customer Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Customer Phone Number</label>
                                                    <input type="text" name="phonenumber" class="form-control"
                                                        placeholder="Customer Phone Number">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Interest Rate</label>
                                                    <select name="interest" class="form-control" placeholder="interest rate">
                                                            <option value="1.6">1.6%</option>
                                                            <option value="2.6">2.6%</option>
                                                            <option value="3.6">3.6%</option>
                                                            <option value="4.6">4.6%</option>
                                                            <option value="5.6">5.6%</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Repayment Installment</label>
                                                    <select name="installment" class="form-control" placeholder="Repayment Installment">
                                                            <option value="12">12 Month</option>
                                                            <option value="15">15 Month</option>
                                                            <option value="20">20 Month</option>
                                                            <option value="25">25 Month</option>
                                                            <option value="30">30 Month</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="text" name="amount" class="form-control"
                                                        placeholder="Amount">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Get</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="container">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropv">
                        Get Loan
                    </button>
                </div>
                <hr>


                <!-- Button trigger modal -->
                {{-- Data Form --}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img class="card-img-top" src="assets/images/download.jpeg" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".btn-danger").click(function(e){
                    e.preventDefault();
                    var delete_id = $(this).closest("tr").find('.delete_val').val();
                    swal({
                    title: "Are you sure?",
                    text: "Once cancel, you will not be able to recover this ticket!",
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
                                type:'GET',
                                url:'/deleteproduct/'+delete_id,
                                data: data,
                                success:function(response) {
                                    swal(response.status , {
                                    icon: "success",
                                })
                                    .then((result)=>{
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
    </body>
@endsection
