<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Mining Tenement Permit</h1>
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

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-row" method="POST" action="{{ url('tenement_add') }}">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Description</label>
                                      <input type="text" name="description" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Denominated</label>
                                      <input type="text" class="form-control" name="denominated" required>
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Granted</label>
                                      <input type="date" name="granted" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Expired</label>
                                      <input type="date" class="form-control" name="expired" required>
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Sitio</label>
                                      <input type="text" name="sitio" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Barangay</label>
                                      <input type="text" class="form-control" name="barangay" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Municipality</label>
                                      <input type="text" name="municipality" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Province</label>
                                      <input type="text" class="form-control" name="province" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary" >Add</button>
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
                                            <th class="cell">Description</th>
                                            <th class="cell">Date Granted</th>
                                            <th class="cell">Date Expired</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tenement as $item)
                                            
                                       
                                        <tr>
                                            <td class="cell">{{ $item->id }}</td>
                                            <td class="cell"><span class="truncate">{{ $item->description }}</span></td>
                                            <td class="cell">{{ $item->granted }}</td>
                                            <td class="cell"></span>{{ $item->expired }}</td>
                                    
                                            <td class="cell">
                                                <a class="btn" href="{{ url('edit-tenement/'.$item->id) }}"><span class="badge bg-success">Edit</span></a>
                                                <a class="btn" href="{{ url('delete-tenement/'.$item->id) }}"><span class="badge bg-danger">Delete</span></a>
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
                   
                    {{ $tenement->links('pagination::bootstrap-4') }}
                </ul>
            </nav><!--//app-pagination-->
        </div>
    </div>
</div>

