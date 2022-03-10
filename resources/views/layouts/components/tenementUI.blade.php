<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">MINING TENEMENT PERMIT</h1>
            </div>
            <br>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">

                                        
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

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
    </div>
</div>