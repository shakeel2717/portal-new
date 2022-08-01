@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card bg-transparent shadow-none">
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <div class="iq-dashed-border">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="text-body mb-0">Add new Device </h6>
                        <i class="bi bi-plus-circle"></i>
                    </div>
                </div>
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Add new Device</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('employee.device.store') }}" method="POST">
                                @csrf
                                <x-input type="text" name="name" placeholder="Enter Device Name" />
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Type Device Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Add Device</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card border-top border-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">To Do</h5>
                    <h5 class="card-title">6 Orders</h5>
                </div>
                <x-todo />
                <x-todo />
                <x-todo />

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card border-top border-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">On going Repair</h5>
                    <h5 class="card-title">6 Orders</h5>
                </div>
                <x-todo />
                <x-todo />
                <x-todo />

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card border-top border-secondary">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Testing</h5>
                    <h5 class="card-title">6 Orders</h5>
                </div>
                <x-todo />
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card border-top border-success">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Completed</h5>
                    <h5 class="card-title">6 Orders</h5>
                </div>
                <x-todo />
            </div>
        </div>
    </div>
</div>
@endsection