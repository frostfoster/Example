@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Application form</h2> <br>

    <form action="add" method="post">
        @csrf
        <div class="form-group row">
            <div class="form-group col-sm-3">
                <label for="app">Application No.</label>
                <input type="number" class="form-control" name="otp">
            </div>
            <div class="form-group col-sm-2">
                <label for="moep">MOEP No.</label>
                <input type="number" class="form-control" name="moep">
            </div>
        </div>
        <div class="form-group col-sm-2">
            <label for="dateOfApplication">Date of Apllication</label>
            <input type="date" class="form-control" name="date_applied">
        </div>
        <div class="form-group col-sm-8">
            <label for="permitteename">Name of Permittee</label>
            <input type="text" class="form-control" name="permitteeName">
        </div>
        <div class="form-group col-sm-8">
            <label for="location">Applicant Name</label>
            <textarea class="form-control" name="applicant_name" rows="3"></textarea>
        </div>
        <div class="form-group col-sm-8">
            <label for="mailingaddress">Mailing Address</label>
            <textarea class="form-control" name="mailingaddress" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-2">
                <label for="material">Kind of Material</label>
                <select class="form-control form-control-sm" name="materialKind">
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
                <input type="text" class="form-control" name="unit">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-3">
                <label for="app">Estimated Value</label>
                <input type="number" class="form-control" name="estimated_value">
            </div>
            <div class="form-group col-sm-2">
                <label for="moep">Specification</label>
                <input type="text" class="form-control" name="specification">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-2">
                <label for="material">Mining Tenement/Permit</label>
                <select class="form-control form-control-sm" name="mineral_id">
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
                <label for="granted">Date Granted</label>
                <input type="date" class="form-control" name="dateGranted">
            </div>
            <div class="form-group col-sm-2">
                <label for="expired">Date Expired</label>
                <input type="date" class="form-control" name="dateExpired">
            </div>
        </div>
        <div class="form-group col-sm-8">
            <label for="location">Location</label>
            <textarea class="form-control" name="location" rows="3"></textarea>
        </div>
        <div class="form-group col-sm-8">
            <label for="consignedto">Consigned To</label>
            <input type="text" class="form-control" name="cosigned_to">
        </div>
        <div class="form-group col-sm-8">
            <label for="mailing_address">Mailing Address</label>
            <textarea class="form-control" name="mailAddress" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-2">
                <label for="mode">Mode of Transport</label>
                <select class="form-control form-control-sm" name="transport_id">
                    <option selected>Select Mode</option>
                    <option>Mode 1</option>
                    <option>Mode 2</option>
                    <option>Mode 3</option>
                  </select>
            </div>
              <div class="form-group col-sm-2">
                <label for="verhiclenumber">No. of Vehicle</label>
                <input type="number" class="form-control" name="no_of_vehicle">
              </div>
            <div class="form-group col-sm-2">
                <fieldset disabled>
                    <label for="disabledTextInput">Expected DOT</label>
                    <input type="text" name="expectDot" class="form-control">
                </fieldset>
            </div>
        </div>
        <div class="form-group col-sm-8">
            <label for="permittee_name">Port Destination</label>
            <input type="text" class="form-control" name="destination">
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-2">
                <label for="taxamount">BIR Tax Amount Paid</label>
                <input type="number" class="form-control" name="bir_tax_amount">
            </div>
            <div class="form-group col-sm-6">
                <label for="receiptno">Receipt No.</label>
                <input type="text" class="form-control" name="receipt_no">
            </div>
        </div>
        <div class="form-group col-sm-8">
            <label for="place">Place</label>
            <textarea class="form-control" name="place" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <div class="form-group col-sm-3">
                <label for="prcoessfee">Processing Fee</label>
                <input type="number" class="form-control" name="certification_fee">
            </div>
            <div class="form-group col-sm-3">
                <label for="orno">OR No.</label>
                <input type="text" class="form-control" name="certification_or">
            </div>
            <div class="form-group col-sm-2">
                <label for="certification_date">Date</label>
                <input type="date" class="form-control" name="cerfication_date">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label" for="option1">
                  OTP
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label" for="option2">
                  MOEP
                </label>
            </div>
        </div>
        <button type="submit" class="btn app-btn-primary">Submit</button>
    </form>
</div>
@endsection