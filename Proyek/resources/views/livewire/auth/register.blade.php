<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body"></div>
                <form wire:submit.prevert="Registeruser">
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="name" class="form-control" @error ('username') is-invalid @enderror id="name" placeholder="">
                        @error ('username')
                            <div class="invalid-feedback">
                                {{ $massage }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" @error ('email') is-invalid @enderror id="email" placeholder="name@example.com">
                        @error ('username')
                        <div class="invalid-feedback">
                            {{ $massage }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" @error ('password') is-invalid @enderror id="password" placeholder=" ">
                        @error ('username')
                        <div class="invalid-feedback">
                            {{ $massage }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ulangi password</label>
                        <input type="password" class="form-control" id="password_confirmation" placeholder=" ">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                    <a href="{{ route('login') }}">klik disini jika anda sudah punya akun</a>
                </form>
            </div>
        </div>
    </div>
</div>
