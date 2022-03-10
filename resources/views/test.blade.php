@extends('layouts.app')

@section('content')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
        <h1 class="app-page-title">Overview</h1>
            <div class="card">
                <div class="card-body">
                    <h1>testing</h1>

                    <div class="table-responsive">
											<table class="table app-table-hover mb-0 text-left">
											@csrf
													<tr>
														<td class="cell">ID</td>
														<td class="cell">Description</td>
														<td class="cell">Action</th>
													</tr>	
													@foreach ($data as $item)
													<tr>
														<td class="cell"> {{$item->id}} </td>
														<td class="cell"><span class="truncate"> {{$item->description}} </span></td>
												
													</tr>
													@endforeach
													
												
											</table>
										</div><!--//table-responsive-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

