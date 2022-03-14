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
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">

                                        
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