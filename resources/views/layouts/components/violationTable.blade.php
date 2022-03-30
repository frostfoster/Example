<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">List of Violations</h1>
                </div>            
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto"> 
                                
                            </div><!--//col-->
                            <div class="col-auto">                           
                            </div>
                            <div class="col-auto">                            
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>Add
                                </button>
                              
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div>

            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-row" method="POST" action="{{ url('violation_add') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" required>
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
                                            <th class="cell"></th>
                                        </tr>z`
                                    </thead>
                                    <tbody>
                                    
                                        @foreach ($violation as $item)
                                            
                                        
                                        <tr>
                                            <td class="cell">{{$item->id}}</td>
                                            <td class="cell"><span class="truncate">{{$item->description}}</span></td>
                                            <td class="cell">
                                                <a class="btn" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $item->id,$item->description }}"><span class="badge bg-success">Edit</span></a>
                                                <a class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $item->id }}"><span class="badge bg-danger">Delete</span></a>
                                            </td>
                     
                                        </tr>   
                                        
                                                    <!--Delete Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">WARNING!</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Are you sure you want to permanently delete the selected item?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" onclick="window.location='{{ url('delete-violation/'.$item->id) }}'">Yes</button>
                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>                                                
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                                    {{-- Modal Update --}}
                                            <div class="modal fade" id="updateModal-{{ $item->id,$item->description }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">UPDATE</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-row" method="POST" action="{{ url('update-violation/'.$item->id) }}">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="setting-input-1" class="form-label">Description</label>
                                                                <input type="text" class="form-control" name="description" value="{{$item->description}}">
                                                            </div>                            
                                                            <button type="submit" class="btn app-btn-primary" >Update</button>
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
                   
                    {{ $violation->links('pagination::bootstrap-4') }}
                </ul>
            </nav><!--//app-pagination-->
        </div>
    </div>
</div>