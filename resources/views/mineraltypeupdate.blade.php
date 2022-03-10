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
                            <form class="settings-form" action=" {{url('edit/'.$data->id)}} " method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="description" class="form-label">Update Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value=" {{$data->description}} " >
                                </div>
                                <button type="submit" class="btn app-btn-primary" >Update</button>
                            </form><!--//form-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div>
            </div><!--//row-->  
@endsection

