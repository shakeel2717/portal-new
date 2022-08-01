<div class="card border-top border-primary">
    <div class="card-body">
        <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-primary btn-sm mx-2">High</a>
            <a href="#" class="btn btn-warning btn-sm  mx-2">Repairing</a>
        </div>
        <div class="mt-4">
            <h5 class="card-title text-uppercase">{{ $device->name }}</h5>
        </div>
        <div class="mt-4">
            <div class="employees d-flex">
                @forelse ($device->users as $user)
                    <a href="#">
                        <div class="iq-media-group iq-media-group-1">
                            <img src="{{ asset('assets/brand/profile-dark.svg') }}" alt="" class="avatar-50">
                        </div>
                    </a>
                @empty
                    <p class="text-warning">Not assigned to anyone yet</p>
                @endforelse
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
