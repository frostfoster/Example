
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">PERMITTEE
                    <a href="{{ url('permittee') }}" class="btn btn-danger float-end">BACK</a>
                </h1>
                <br>
            </div>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">

                                        
                        <form class="form-row" method="POST" action="{{ url('update-permittee/'.$permittee->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Permit Holder</label>
                                <input type="text" class="form-control" name="permit_holder" value="{{$permittee->permit_holder}}">
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Area Location</label>
                                <input type="text" class="form-control" name="area" value="{{$permittee->area_location}}">
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date</label>
                                      <input type="date" name="date" class="form-control" value="{{$permittee->date_apprehend}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Time</label>
                                      <input type="text" class="form-control" name="time" value="{{$permittee->time_apprehend}}">
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Responsible</label>
                                        <input type="text" class="form-control" name="responsible" value="{{$permittee->responsible_person}}">
                                      </div>
                                </div>
                            </div>      
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Violation</label>
                                        <select name="violation" class="form-control" required>
                                            @foreach ($violation as $item)                                 
                                                    <option value="{{$item->id}}" {{$item->id == $permittee->violation_permit_id ? 'selected' : ''}}>{{$item->description}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Remark</label>
                                      <input type="text" class="form-control" name="remark" value="{{$permittee->remark}}">
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