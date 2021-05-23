<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update Info
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='save'>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input wire:model="user.name" id="name" type="text"
                                class="form-control @error('user.name') is-invalid @enderror"
                                required
                            >
                            @error('user.name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="user.email" id="email" type="email"
                                class="form-control @error('user.email') is-invalid @enderror"
                                required
                            >
                            @error('user.email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-success btn-sm">
                            Save <i class="fas fa-save"></i>
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update Password
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='updatePassword'>

                        <div class="form-group">
                            <label for="old_password">Old password</label>
                            <input wire:model="old_password" id="old_password" type="password"
                                class="form-control @error('old_password') is-invalid @enderror" required>
                            @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="new_password">New password</label>
                            <input wire:model="new_password" id="new_password" type="password"
                                class="form-control @error('new_password') is-invalid @enderror" required>
                            @error('new_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Password confirmation</label>
                            <input wire:model="password_confirmation" id="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror" required>
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-success btn-sm">
                            Save <i class="fas fa-save"></i>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
