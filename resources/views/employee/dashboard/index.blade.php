@extends('layouts.dashboard')
@section('content')
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
