<div class="row justify-content-center" style="margin-top: 3rem;">
    <div class="col-4">
        <div class="card">
            <div class="card-header text-center">
                <h3> Form Registrasi </h3>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="register">

                    <h4 class="card-title">Username</h4>
                    <fieldset class="form-group">
                        @error('username')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="username" class="form-control">
                    </fieldset>
                    <h4 class="card-title">Alamat</h4>
                    <fieldset class="form-group">
                        @error('alamat')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="alamat" class="form-control">
                    </fieldset>
                    <h4 class="card-title">No Hp</h4>
                    <fieldset class="form-group">
                        @error('no_hp')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="no_hp" class="form-control">
                    </fieldset>
                    <h4 class="card-title">Password</h4>
                    <fieldset class="form-group">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="password" wire:model.defer="password" class="form-control">
                    </fieldset>
                    <h4 class="card-title">Konfirmasi Password</h4>
                    <fieldset class="form-group">
                        <input type="password" wire:model.defer="password_confirmation" class="form-control">
                    </fieldset>

                    @if(session()->has('error'))
                    <small class="text-danger">{{ session('error') }}</small>
                    @endif

                    <div class="my-2" style="float: right;">
                        <a href="{{ url('/') }}" class="btn btn-md btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-md btn-info"
                            wire:click.prevent="register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>