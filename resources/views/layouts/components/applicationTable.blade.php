<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Application Table</h1>
                </div>            
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto"> 
                                <form class="docs-search-form row gx-1 align-items-center" action="{{ url('application') }}" method="GET">
                                    <div class="col-auto">
                                        <input type="text" id="search-docs" name="search" class="form-control search-docs" placeholder="Search Applicant" value="{{request()->query('search')}}">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>
                            </div><!--//col-->
                            <div class="col-auto">                           
                            </div>
                            <div class="col-auto">                            
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>Add
                                </button>
                              
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-row" method="POST" action="{{ url('application_add') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="form-group col-sm-3">
                                    <label for="app">Application No.</label>
                                    <input type="number" class="form-control" name="control_no">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="moep">MOEP No.</label>
                                    <input type="number" class="form-control" name="moep">
                                </div>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="setting-input-1" class="form-label">Date of Application</label>
                                      <input type="date" name="date_applied" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="permitteename">Name of Permittee</label>
                                <input type="text" class="form-control" name="permittee_name">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="location">Applicant Name</label>
                                <textarea class="form-control" name="applicant_name" rows="3"></textarea>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailingaddress">Mailing Address</label>
                                <textarea class="form-control" name="applicant_mailing_address" rows="3"></textarea>
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
                                <input type="text" class="form-control" name="cosigned_to">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailing_address">Mailing Address</label>
                                <textarea class="form-control" name="mailing_address" rows="3"></textarea>
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
                                    <input type="number" class="form-control" name="no_of_vehicle">
                                  </div>
                                <div class="form-group col-sm-2">
                                        <label for="dateTravel">Expected DOT</label>
                                        <input type="date" name="date_of_travel" class="form-control">
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
                                    <label for="setting-input-1" class="form-label">Date</label>
                                      <input type="date" name="certification_date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="otp" name="otp" value="1">
                                    <label class="form-check-label" for="option1">
                                      OTP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="moep" name="otp" value="0">
                                    <label class="form-check-label" for="option2">
                                      MOEP
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">                   
                                <br>
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID</th>
                                            <th class="cell">Applicant Name</th>
                                            <th class="cell">Permittee Name</th>
                                            <th class="cell">Date Applied</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($application as $item)
                                            
                                       
                                        <tr>
                                            <td class="cell">{{ $item->id }}</td>
                                            <td class="cell">{{ $item->applicant_name }}</td>
                                            <td class="cell">{{ $item->permittee_name }}</td>
                                            <td class="cell"></span>{{ $item->date_applied }}</td>
                                    
                                            <td class="cell">
                                                <a class="btn" href="{{ url('application_edit/'.$item->id) }}"><span class="badge bg-success">Edit</span></a>
                                                <a class="btn" href="{{ url('application_delete/'.$item->id) }}"><span class="badge bg-danger">Delete</span></a>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                        </div>
                    </div>
                </div>
            </div>
            
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                   
                    {{ $application->links('pagination::bootstrap-4') }}
                </ul>
            </nav><!--//app-pagination-->
        </div>
    </div>
</div>

