<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Update Info
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='save'>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input wire:model="name" id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input wire:model="password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
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
