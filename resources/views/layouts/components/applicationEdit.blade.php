
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">APPLICATION
                    <a href="{{ url('application') }}" class="btn btn-danger float-end">BACK</a>
                </h1>
                <br>
            </div>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">   
                        <form class="form-row" method="POST" action="{{ url('application_update/'.$application->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="form-group col-sm-3">
                                    <label for="app">Application No.</label>
                                    <input type="number" class="form-control" name="control_no" value="{{$application->control_no}}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="moep">MOEP No.</label>
                                    <input type="number" class="form-control" name="moep" value="{{$application->moep}}">
                                </div>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="setting-input-1" class="form-label">Date of Application</label>
                                      <input type="date" name="date_applied" value="{{$application->date_applied}}" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="permitteename">Name of Permittee</label>
                                <input type="text" class="form-control" name="permittee_name" value="{{$application->permittee_name}}">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="location">Applicant Name</label>
                                <textarea class="form-control" name="applicant_name" value="{{$application->applicant_name}}" rows="3"></textarea>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailingaddress">Mailing Address</label>
                                <textarea class="form-control" name="applicant_mailing_address" value="{{$application->applicant_mailing_address}}" rows="3"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-2">
                                    <label for="material">Kind of Material</label>
                                    <select class="form-control form-control-sm" name="materialKind" >
                                        <option selected>Select Combo</option>
                                        <option>Combo 1</option>
                                        <option>Combo 2</option>
                                        <option>Combo 3</option>
                                      </select>
                                </div>
                                  <div class="form-group col-sm-2">
                                    <label for="volume">Volume/Tonnage</label>
                                    <input type="text" class="form-control" name="volume">
                                  </div>
                                <div class="form-group col-sm-2">
                                    <label for="unit">Unit</label>
                                    <input type="text" class="form-control" name="unit" value="{{$application->unit}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-3">
                                    <label for="app">Estimated Value</label>
                                    <input type="number" class="form-control" name="estimated_value" value="{{$application->estimated_value}}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="moep">Specification</label>
                                    <input type="text" class="form-control" name="specification" value="{{$application->specification}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-5">
                                    <label for="material">Mining Tenement/Permit</label>
                                    <select class="form-control form-control-sm" name="">
                                        <option selected>Select Permit</option>
                                        <option>Permit 1</option>
                                        <option>Permit 2</option>
                                        <option>Permit 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="unit">Denominated</label>
                                    <input type="text" class="form-control" name="denominated">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-2">
                                    <label for="setting-input-1" class="form-label">Date Granted</label>
                                      <input type="date" name="dateGranted" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="setting-input-1" class="form-label">Date Expired</label>
                                      <input type="date" name="dateExpired" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="location">Location</label>
                                <textarea class="form-control" name="location" rows="3"></textarea>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="consignedto">Consigned To</label>
                                <input type="text" class="form-control" name="cosigned_to" value="{{$application->consigned_to}}">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailing_address">Mailing Address</label>
                                <textarea class="form-control" name="mailing_address" value="{{$application->mailing_address}}" rows="3"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-2">
                                    <label for="mode">Mode of Transport</label>
                                    <select class="form-control form-control-sm" name="">
                                        <option selected>Select Mode</option>
                                        <option>Mode 1</option>
                                        <option>Mode 2</option>
                                        <option>Mode 3</option>
                                      </select>
                                </div>
                                  <div class="form-group col-sm-2">
                                    <label for="verhiclenumber">No. of Vehicle</label>
                                    <input type="number" class="form-control" name="no_of_vehicle" value="{{$application->no_of_vehicle}}">
                                  </div>
                                <div class="form-group col-sm-2">
                                        <label for="input">Expected DOT</label>
                                        <input type="date" name="date_of_travel" value="{{$application->date_of_travel}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="permittee_name">Port Destination</label>
                                <input type="text" class="form-control" name="destination" value="{{$application->destination}}">
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-2">
                                    <label for="taxamount">BIR Tax Amount Paid</label>
                                    <input type="number" class="form-control" name="bir_tax_amount" value="{{$application->bir_tax_amount}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="receiptno">Receipt No.</label>
                                    <input type="text" class="form-control" name="receipt_no" value="{{$application->receipt_no}}">
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="place">Place</label>
                                <textarea class="form-control" name="place" value="{{$application->place}}" rows="3"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-sm-3">
                                    <label for="prcoessfee">Processing Fee</label>
                                    <input type="number" class="form-control" name="certification_fee" value="{{$application->certification_fee}}">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="orno">OR No.</label>
                                    <input type="text" class="form-control" name="certification_or" value="{{$application->certification_or}}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="setting-input-1" class="form-label">Date</label>
                                      <input type="date" name="certification_date" value="{{$application->cerfication_date}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="" value="otp">
                                    <label class="form-check-label" for="option1">
                                      OTP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="" value="moep">
                                    <label class="form-check-label" for="option2">
                                      MOEP
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary">Update</button>
                        </form>

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
    </div>
</div>