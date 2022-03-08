<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">PERMITTEE</h1>
            </div>
            <br>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">

                                        
                        <form class="form-row" method="POST" action="{{ url('permitte_add') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Permit Holder</label>
                                <input type="text" class="form-control" name="permit_holder" required>
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Area Location</label>
                                <input type="text" class="form-control" name="area" required>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Date</label>
                                      <input type="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Time</label>
                                      <input type="text" class="form-control" name="time" required>
                                    </div>
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Responsible</label>
                                        <input type="text" class="form-control" name="responsible" required>
                                      </div>
                                </div>
                            </div>      
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Violation</label>
                                            <select name="violation" class="form-control" required>
                                                <option value="1">Pending</option>
                                                <option value="2">Running</option>
                                                <option value="3">Completed</option>
                                            </select>
                                    </div>

                                    
                                    <div class="col">
                                        <label for="setting-input-1" class="form-label">Remark</label>
                                      <input type="text" class="form-control" name="remark" required>
                                    </div>
                                </div>
                            </div>   
                            <button type="submit" class="btn app-btn-primary" >Add</button>
                        </form>

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
    </div>
</div>