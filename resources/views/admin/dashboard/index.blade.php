@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-success rounded p-3">
                        <i class="bi bi-people-fill fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-success counter" style="visibility: visible;">{{ $users->count() }}</h1>
                        <p class="text-success mb-0">All Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-success rounded p-3">
                        <i class="bi bi-people-fill fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-success counter" style="visibility: visible;">{{ $users->where('role','employee')->count() }}</h1>
                        <p class="text-success mb-0">Total Employees</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-success rounded p-3">
                        <i class="bi bi-people-fill fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-success counter" style="visibility: visible;">{{ $users->where('role','admin')->count() }}</h1>
                        <p class="text-success mb-0">Admin Accounts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-primary rounded p-3">
                        <i class="bi bi-laptop fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-primary counter" style="visibility: visible;">{{ $devices->count() }}</h1>
                        <p class="text-primary mb-0">Total Devices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-primary rounded p-3">
                        <i class="bi bi-laptop fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-primary counter" style="visibility: visible;">{{ $devices->where('status','on going repair')->count() }}</h1>
                        <p class="text-primary mb-0">On Going Repair</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bg-soft-primary rounded p-3">
                        <i class="bi bi-laptop fs-2"></i>
                    </div>
                    <div>
                        <h1 class="text-primary counter" style="visibility: visible;">{{ $devices->where('status','testing')->count() }}</h1>
                        <p class="text-primary mb-0">Testing Devices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
