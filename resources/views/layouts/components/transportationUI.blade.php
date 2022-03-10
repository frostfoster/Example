<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Mode of Transportation</h1>
            </div>
            <br>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <div class="app-card-body">

                                        
                        <form class="form-row" method="POST" action="{{ url('transportation_add') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>
                            <button type="submit" class="btn app-btn-primary" >Add</button>
                        </form>

                        
                    </div><!--//app-card-body-->
                </div>
            </div>
    </div>
</div>