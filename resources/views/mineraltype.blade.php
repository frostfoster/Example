@extends('layouts.app')

@section('content')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Mineral Types</h1>
            <hr class="mb-4">   
			{{-- Add Description --}}
            <div class="row g-4 settings-section">
                <div class="app-card-header px-4 py-3">
                    <div class="app-card app-card-settings shadow-sm p-4">   
                        <div class="app-card-body">
                            <form class="settings-form" action="/mineraltypes" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description"  >
                                </div>
                                <button type="submit" class="btn app-btn-primary" >Add</button>
                            </form><!--//form-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div>
            </div><!--//row-->  
			{{-- List Table --}}
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">	
					<div class="row g-3 mb-4 align-items-center justify-content-between">
					    <div class="col-auto">
						    <h1 class="app-page-title mb-0">List of Mineral Types</h1>
						</div>
						<div class="tab-content" id="orders-table-tab-content">
							<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
								<div class="app-card app-card-orders-table shadow-sm mb-5">
									<div class="app-card-body">
										<div class="table-responsive">
											<table class="table app-table-hover mb-0 text-left">
											@csrf
												<tr>
													<th class="cell">ID</th>
													<th class="cell">Description</th>
													<th class="cell">Action</th>
												</tr>
												@foreach ($data as $key => $item)
												@csrf
												<tr>
													<td class="cell"> {{$item->id}} </td>
													<td class="cell"><span class="truncate"> {{$item->description}} </span></td>
													<td class="cell">
														{{-- <a href="" class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#editData">Edit</a> --}}
														<a href="{{ url('mineraltypeupdate/'.$item->id) }}" class="btn-sm app-btn-secondary"> Edit</a>
														<a href=" {{url('mineraltypedelete/'.$item->id) }} }} " class="btn-sm app-btn-secondary">Delete</a>
													</td>
												</tr>	
												@endforeach	
											</table>
										</div><!--//table-responsive-->	
									</div><!--//app-card-body-->		
								</div><!--//app-card-->
								<nav class="app-pagination">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav><!--//app-pagination-->	
							</div><!--//tab-pane-->
						</div><!--//tab-content--> 
					</div><!--//container-fluid-->
				</div><!--//app-content-->
			</div>	
        </div><!--container-xl-->
	</div> <!--app-content-->
</div><!--app-wrapper-->

@endsection


{{-- <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Description</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action=" {{url('/edit'. $data->id)}} " method="POST">
			@csrf
          <div class="mb-3">
            <label for="description" class="col-form-label">Enter New Description</label>
            <input type="text" class="form-control" name="description" id="description" >
          </div>
		  <button type="button" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       
      </div>
    </div>
  </div>
</div> --}}
