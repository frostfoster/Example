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
                                <input type="text" class="form-control" name="applicant_name">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailingaddress">Mailing Address</label>
                                <input type="text" class="form-control" name="applicant_mailing_address">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="form-label">Kind of Mineral</label>
                                        <select name="mineral_id" class="form-control" required>
                                            @foreach ($mineral as $item)                                 
                                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                            @endforeach
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
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Mining Tenement/Permit</label>
                                            <select name="permit_id" class="form-control" required>
                                                @foreach ($tenement as $item)                                 
                                                        <option value="{{$item->id}}">{{$item->description}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Denominated</label>
                                      <input type="text" class="form-control" name="denominated" required>
                                    </div>
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
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="consignedto">Consigned To</label>
                                <input type="text" class="form-control" name="cosigned_to">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="mailing_address">Mailing Address</label>
                                <input type="text" class="form-control" name="mailing_address">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="form-label">Mode of Transport</label>
                                        <select name="transport_id" class="form-control" required>
                                            @foreach ($transportation as $item)                                 
                                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                            @endforeach
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
                                <input type="text" class="form-control" name="place">
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
                                                <a class="btn" data-bs-toggle="modal" 
                                                data-bs-target="#ModalUpdate-{{ $item->id,$item->moep, $item->control_no,
                                                $item->date_applied,$item->applicant_name,$item->applicant_mailing_address,$item->unit,
                                                $item->to_be_disposed,$item->estimated_value,$item->permittee_name,$item->consigned_to,$item->mailing_address,
                                                $item->no_of_vehicle_,$item->date_of_travel,$item->destination,$item->bir_tax_amount,$item->receipt_no,
                                                $item->place,$item->mineral_id,$item->transport_id,$item->specification,$item->certification_fee,$item->certification_or,
                                                $item->certification_date,$item->permit_id,$item->volume,$item->location }}"><span class="badge bg-success">Edit</span></a>
                                                <a class="btn" href="{{ url('application_delete/'.$item->id) }}"><span class="badge bg-danger">Delete</span></a>
                                            </td>
                                        </tr>

                                        {{-- Update --}}
                                        <div class="modal fade" id="ModalUpdate-{{ $item->id,$item->moep, $item->control_no,
                                            $item->date_applied,$item->applicant_name,$item->applicant_mailing_address,$item->unit,
                                            $item->to_be_disposed,$item->estimated_value,$item->permittee_name,$item->consigned_to,$item->mailing_address,
                                            $item->no_of_vehicle_,$item->date_of_travel,$item->destination,$item->bir_tax_amount,$item->receipt_no,
                                            $item->place,$item->mineral_id,$item->transport_id,$item->specification,$item->certification_fee,$item->certification_or,
                                            $item->certification_date,$item->permit_id,$item->volume,$item->location }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">     
                                                <div class="modal-header text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel">Edit Application</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-row" method="POST" action="{{ url('application_update/'.$item->id) }}">
                                                        @csrf
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
                                                            <input type="text" class="form-control" name="applicant_name" value="{{ $application->applicant_name }}">
                                                        </div>
                                                        <div class="form-group col-sm-8">
                                                            <label for="mailingaddress">Mailing Address</label>
                                                            <input type="text" class="form-control" name="applicant_mailing_address" value="{{ $application->applicant_mailing_address }}">
                                                        </div>
                                                        <div class="form-group row">`
                                                            <div class="form-group col-sm-2">
                                                                <label class="form-label">Kind of Mineral</label>
                                                                <select name="mineral_id" class="form-control">
                                                                    @foreach ($mineral as $mineral_item)                                 
                                                                            <option value="{{$mineral_item->id}}" {{$mineral_item->id == $item->mineral_id ? 'selected' : ''}}>{{$mineral_item->description}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                              <div class="form-group col-sm-2">
                                                                <label for="volume">Volume/Tonnage</label>
                                                                <input type="text" class="form-control" name="volume" value="{{ $application->volume}}">
                                                              </div>
                                                            <div class="form-group col-sm-2">
                                                                <label for="unit">Unit</label>      
                                                                <input type="text" class="form-control" name="unit" value="{{ $application->unit }}">
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
                                                                <label for="permit">Mining Tenement/Permit</label>
                                                                <select name="permit_id" class="form-control" required>
                                                                    @foreach ($tenement as $tenement_item)                                 
                                                                            <option value="{{$tenement_item->id}}" {{$tenement_item->id == $item->permit_id ? 'selected' : ''}}>{{$tenement_item->description}}</option>
                                                                    @endforeach
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
                                                            <input type="text" class="form-control" name="location" value="{{ $application->location }}">
                                                        </div>
                                                        <div class="form-group col-sm-8">
                                                            <label for="consignedto">Consigned To</label>
                                                            <input type="text" class="form-control" name="cosigned_to" value="{{$application->consigned_to}}">
                                                        </div>
                                                        <div class="form-group col-sm-8">
                                                            <label for="mailing_address">Mailing Address</label>
                                                            <input type="text" class="form-control" name="mailing_address" value="{{ $application->mailing_address }}">
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="form-group col-sm-2">
                                                                <label for="mode">Mode of Transport</label>
                                                                <select name="transport_id" class="form-control" required>
                                                                    @foreach ($transportation as $transportation_item)                                 
                                                                            <option value="{{$transportation_item->id}}" {{$transportation_item->id == $item->transport_id ? 'selected' : ''}}>{{$transportation_item->description}}</option>
                                                                    @endforeach
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
                                                            <label for="portDestination">Port Destination</label>
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
                                                            <input type="text" class="form-control" name="place" value="{{$application->place}}">
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
                                                                <input class="form-check-input" type="checkbox" name="otp" value="{{$application->otp}}">
                                                                <label class="form-check-label" for="option1">
                                                                  OTP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="otp" value="{{$application->otp}}">
                                                                <label class="form-check-label" for="option2">
                                                                  MOEP
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn app-btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

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

