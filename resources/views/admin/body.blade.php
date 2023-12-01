<div class="main-panel">
    <div class="container-fluid px-4">
        
        <div class="row pt-3">
            <div class="col-md-3 mb-3">
                <div class="card card-body bg-success p-3">
                    <p class="text-sm mb-0 text-capitaleze font-weight-bold">All Doctors</p> 
                    <hr>
                    <h5 class="font-weight-bold mb-0">
                         {{ $totalDoctors}}  
                    </h5>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-body bg-secondary p-3">
                    <p class="text-sm mb-0 text-capitaleze font-weight-bold">All Appointments</p> 
                    <hr>
                    <h5 class="font-weight-bold mb-0">
                        {{ $totalAppointments}} 
                    </h5>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-body bg-warning p-3">
                    <p class="text-sm mb-0 text-capitaleze font-weight-bold">All Users</p> 
                    <hr>
                    <h5 class="font-weight-bold mb-0">
                        {{ $totalUsers}}
                    </h5>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-body bg-primary p-3">
                    <p class="text-sm mb-0 text-capitaleze font-weight-bold">All Nurses</p> 
                    <hr>
                    <h5 class="font-weight-bold mb-0">
                        {{ $totalNurses}}
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>