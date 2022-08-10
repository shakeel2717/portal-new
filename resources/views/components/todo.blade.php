<div class="card border-top border-primary">
    <div class="card-body">
        <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-primary btn-sm mx-2">High</a>
            <a href="#" class="btn btn-warning btn-sm  mx-2">Repairing</a>
        </div>
        <div class="mt-4">
            <a href="#" class="card-title text-uppercase  text-primary h4" data-bs-toggle="offcanvas" data-bs-target="#deviceModal{{ $device->id }}" aria-controls="deviceModal{{ $device->id }}">{{ $device->name }}</a>
        </div>
        <div class="mt-4">
            <div class="employees d-flex">
                @foreach ($device->users as $user)
                <a href="#">
                    <div class="iq-media-group iq-media-group-1" @if (!$loop->first) style="margin-left:-20px " @endif>
                        <img src="{{ asset('assets/brand/profile-dark.svg') }}" alt="" class="avatar-50">
                    </div>
                </a>
                @endforeach
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#assignEmployee" aria-controls="assignEmployee">
                    <div class="iq-media-group iq-media-group-1">
                        <i class="bi bi-plus-circle fs-1"></i>
                    </div>
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="assignEmployee" aria-labelledby="assignEmployeeLabel">
                    <div class="offcanvas-header">
                        <h5 id="assignEmployeeLabel">Assign to Device</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('employee.device.assign') }}" method="POST">
                                    @csrf
                                    <div>
                                        <div class="form-group">
                                            <input type="hidden" name="device_id" value="{{ $device->id }}">
                                            <label for="employee_id" class="form-label">Select Employee</label>
                                            <select name="employee_id" id="employee_id" class="form-control">
                                                <option value="">Select Employee to Assign</option>
                                                @foreach (employees() as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Assign to this Device</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer mt-4 mb-0">
            <div class="d-flex justify-content-between">
                <div class="comments fs-5 d-flex">
                    <i class="bi bi-chat-left"></i>
                    <div class="value ms-1">0</div>
                </div>
                <div class="attatchment fs-5 d-flex">
                    <i class="bi bi-paperclip"></i>
                    <div class="value ms-1">0</div>
                </div>
                <div class="delay fs-5 d-flex">
                    <i class="bi bi-stopwatch"></i>
                    <div class="value ms-1">{{ $device->created_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end-800" tabindex="-1" id="deviceModal{{ $device->id }}" aria-labelledby="deviceModal{{ $device->id }}Label">
    <div class="offcanvas-header">
        <button type="bsutton" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="head-content d-flex justify-content-between w-100 mt-3">
            <h5 id="deviceModal{{ $device->id }}Label">Task Detail</h5>
            <a href="#" class="btn btn-primary btn-md me-4">Save</a>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success d-flex align-items-center border-0" role="alert">
                    <div class="d-flex justify-content-between w-100">
                        <h3 class="text-uppercase mb-0">{{ $device->name }}</h3>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">TO DO</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">TO DO</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="{{ route('employee.action.sent.to.repair') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="device_id" value="{{ $device->id }}">
                                        <input type="submit" value="Sent to Repair" class="dropdown-item">
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('employee.action.complete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="device_id" value="{{ $device->id }}">
                                        <input type="submit" value="Mark as Complete" class="dropdown-item">
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('employee.action.testing') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="device_id" value="{{ $device->id }}">
                                        <input type="submit" value="Sent for Testing" class="dropdown-item">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <p>ASSIGNED TO</p>
                                <div class="employees d-flex">
                                    @forelse ($device->users as $user)
                                    <a href="#">
                                        <div class="iq-media-group iq-media-group-1" @if (!$loop->first) style="margin-left:-20px " @endif>
                                            <img src="{{ asset('assets/brand/profile-dark.svg') }}" alt="" class="avatar-50">
                                        </div>
                                    </a>
                                    @empty
                                    <form action="{{ route('employee.device.assign') }}" method="POST">
                                        @csrf
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <input type="hidden" name="device_id" value="{{ $device->id }}">
                                                <select name="employee_id" id="employee_id" class="form-control">
                                                    <option value="">Select Employee</option>
                                                    @foreach (employees() as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Assign</button>
                                            </div>
                                        </div>
                                    </form>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>DUE DATE</p>
                                <div class="date">
                                    <div class="input-group">
                                        <input type="text" class="form-control vanila-datepicker" placeholder="Date Picker">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary mt-5">
                            <i class="bi bi-plus-lg"></i>
                            Request for Additional parts
                        </button>
                    </div>
                </div>
            </div>
            <hr class="mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="label d-flex justify-content-start">
                        <i class="bi bi-text-paragraph me-3 fs-3"></i>
                        <div class="description">
                            <p class="">Description</p>
                            <p>{{ $device->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="label d-flex justify-content-start">
                        <i class="bi bi-paperclip me-3 fs-3"></i>
                        <div class="attachment">
                            <p class="">Attachment</p>
                            <p>No Attachment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="label d-flex justify-content-start">
                        <i class="bi bi-check2-circle me-3 fs-3"></i>
                        <div class="Tasks">
                            <p class="">Task List</p>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Screen Repair</label>
                            </div>
                            <div class="task-btn">
                                <a href="#" class="btn btn-primary btn-md"><i class="bi bi-plus-lg"></i> Add new Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
