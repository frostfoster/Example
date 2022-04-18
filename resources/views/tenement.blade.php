@extends('layouts.app')

@section('content')
@if (session('status'))
{{-- <h6 class="alert alert-success">{{ session('status') }}</h6> --}}
      
<div aria-live="polite" aria-atomic="true" style="position: relative; z-index:10; margin-top:15px">
    <div class="toast bg-primary text-white fade show" id="form_notif" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header ">
        <i class="fa-solid fa-badge-check"></i>
        <strong class="mr-auto">Notification</strong>
   
        <button type="button" class="toggle-alert btn-close" style="width: 2px; height:2px; position: relative; top: 0; right: 0;" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="toast-body">
        {{ session('status') }}
      </div>
    </div>
  </div>
@endif
    <div class="card-body">
     
        
        <br><br>
        @include('layouts\components\tenementTable')
    </div>
@endsection
<script>
   $.notify('I am the Body');
</script>
