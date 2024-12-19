<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body"></div>
                <form wire:submit.prevert="Loginuser">
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
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                    <a href="{{ route('register') }}">klik disini jika anda belum terdaftar</a>
                </form>
            </div>
        </div>
    </div>
</div>
