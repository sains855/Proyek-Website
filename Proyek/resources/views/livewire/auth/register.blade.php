<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form wire:submit.prevent="registerUser">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name" placeholder="Name" @error('name') is-invalid @enderror>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model="email" placeholder="name@example.com" @error('email') is-invalid @enderror>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" wire:model="password" placeholder="Password" @error('password') is-invalid @enderror>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <a href="{{ route('login') }}">Klik di sini jika Anda sudah punya akun</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
