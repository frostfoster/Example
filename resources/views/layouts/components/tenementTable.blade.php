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

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="updateModalLabel">Update Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                                        
                       
                        <form id="updateform" class="form-row" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Description</label>
                                      <input type="text" name="description2" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Denominated</label>
                                      <input type="text" class="form-control" name="denominated2">
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Granted</label>
                                      <input type="date" name="granted2" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date Expired</label>
                                      <input type="date" class="form-control" name="expired2">
                                    </div>
                                </div>
                            </div>      
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Sitio</label>
                                      <input type="text" name="sitio2" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Barangay</label>
                                      <input type="text" class="form-control" name="barangay2">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Municipality</label>
                                      <input type="text" name="municipality2" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Province</label>
                                      <input type="text" class="form-control" name="province2">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary" >Update</button>
                        </form>

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
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
                                                <a  type="button" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal" data-tenement={{ $item }}> <span class="badge bg-primary">Edit</span></a>
                                                
                                                <a class="btn" data-bs-toggle="modal" data-bs-target="#ModalDelete-{{$item->id}}"><span class="badge bg-danger">Delete</span></a>
                                                
                                                <!-- </td>
                                             <td>
                                                <a class="btn" onclick="return confirm('Are you sure you want to delete this specification record?');" href="{{ url('delete-tenement/'.$item->id) }}"><span class="badge bg-danger">Delete</span></a>
                                            </td> -->
                                        </tr>
                                        <div class="modal modal-danger fade" id="ModalDelete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                    <div class="modal-body text-center">
                                                        Are you sure you want to delete the selected item?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" onclick="window.location='{{ url('delete-tenement/'.$item->id) }}'">Yes</button>
                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>                                                
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
                   
                    {{ $tenement->links('pagination::bootstrap-4') }}
                </ul>
            </nav><!--//app-pagination-->
        </div>
    </div>
</div>

<script>
    $('.modal#updateModal').on('show.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var bookId = $(e.relatedTarget).data('tenement');
            bookId=Object.values(bookId);
            
            $('form#updateform').attr('action', `/update-tenement/${bookId[0]}`);
            
            // populate the textbox
            $(e.currentTarget).find('input[name="description2"]').val(bookId[1]);
            $(e.currentTarget).find('input[name="denominated2"]').val(bookId[2]);
            $(e.currentTarget).find('input[name="granted2"]').val(bookId[3]);
            $(e.currentTarget).find('input[name="expired2"]').val(bookId[4]);
            $(e.currentTarget).find('input[name="sitio2"]').val(bookId[5]);
            $(e.currentTarget).find('input[name="barangay2"]').val(bookId[6]);
            $(e.currentTarget).find('input[name="municipality2"]').val(bookId[7]);
            $(e.currentTarget).find('input[name="province2"]').val(bookId[8]);
            
            
            });
</script>