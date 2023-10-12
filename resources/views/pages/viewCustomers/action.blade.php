
<div class="modal fade " class="modal-dialog modal-dialog-centered" id="payment{{ $data->id }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="paidloanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paidloanLabel">payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <!--Modal form-->

            <form action="{{ Route('pages.viewcustomers.payment') }}" method="POST">

                {{ csrf_field() }}

                <div class="modal-body">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Amount OLD</label>
                                    <input type="text" name="amountOld" class="form-control"
                                        placeholder="Customer ID" value={{ $data->amount }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer ID</label>
                                    <input type="text" name="cusId" class="form-control"
                                        placeholder="Customer ID" value={{ $data->id }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Customer Name" value={{ $data->name }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer Email</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Customer Email" value={{ $data->email }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer Phone Number</label>
                                    <input type="text" name="phonenumber" class="form-control"
                                        placeholder="Customer Phone Number" value={{ $data->phonenumber }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Interest Rate</label>
                                    <select name="interest_rate" class="form-control" placeholder="interest rate">
                                        <option value={{ $data->interest }}>{{ $data->interest }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Repayment Installment</label>
                                    <select name="installment" class="form-control" placeholder="Repayment Installment">
                                        <option value={{ $data->installment }}>{{ $data->installment }}</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" name="amount" class="form-control" placeholder="Amount">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Pay</button>
                </div>
            </form>
        </div>
    </div>
</div>
