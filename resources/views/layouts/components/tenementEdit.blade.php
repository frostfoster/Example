<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">MINING</h1>
                    <a href="{{ url('tenement') }}" class="btn btn-danger float-end">BACK</a>
                </h1>
                <br>
            </div>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="col-auto">
                
                </div>            
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto"> 
                                
                        
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

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="updateModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                                        
                        <form class="form-row" method="POST" action="{{ url('update-tenement/'.$tenement->id) }}">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Description</label>
                                      <input type="text" name="description" class="form-control" value="{{$tenement->description}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Denominated</label>
                                      <input type="text" class="form-control" name="denominated" value="{{$tenement->denominated}}">
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Granted</label>
                                      <input type="date" name="granted" class="form-control" value="{{$tenement->granted}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Expired</label>
                                      <input type="date" class="form-control" name="expired" value="{{$tenement->expired}}">
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Sitio</label>
                                      <input type="text" name="sitio" class="form-control" value="{{$tenement->expired}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Barangay</label>
                                      <input type="text" class="form-control" name="barangay" value="{{$tenement->barangay}}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Municipality</label>
                                      <input type="text" name="municipality" class="form-control" value="{{$tenement->municipality}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Province</label>
                                      <input type="text" class="form-control" name="province" value="{{$tenement->province}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary" >Update</button>
                        </form>

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
    </div>
</div>