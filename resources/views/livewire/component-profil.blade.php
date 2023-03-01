<div class="row">
    <!-- column -->
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <h4 class="card-title text-center">Profil</h4>

                <!-- title -->
            </div>
            @if($gantiForm == false)
            <div class="card-content">
                <div class="card-body">
                    <h3 class="card-title">Username</h3>
                    <fieldset class="form-group">
                        <p class="form-control-static">{{ Auth::user()->username }}</p>
                    </fieldset>
                    @if (Auth::user()->level == 1)
                    <h3 class="card-title">Alamat</h3>
                    <fieldset class="form-group">
                        <p class="form-control-static">{{ Auth::user()->alamat }}</p>
                    </fieldset>
                    <h3 class="card-title">No Hp</h3>
                    <fieldset class="form-group">
                        <p class="form-control-static">{{ Auth::user()->no_hp }}</p>
                    </fieldset>
                    @endif

                    <div class="my-2" style="float: right;">
                        <button class="btn btn-md btn-warning" wire:click.prevent="edit()">Edit</button>
                    </div>
                </div>
            </div>
            @else
            <div class="card-content">
                <div class="card-body">
                    <h3 class="card-title">Username </h3>
                    <fieldset class="form-group">
                        @error('username')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="username" class="form-control">
                    </fieldset>
                    @if (Auth::user()->level == 1)
                    <h3 class="card-title">Alamat </h3>
                    <fieldset class="form-group">
                        @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="nama" class="form-control">
                    </fieldset>
                    <h3 class="card-title">No Hp </h3>
                    <fieldset class="form-group">
                        @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" wire:model.defer="nama" class="form-control">
                    </fieldset>
                    @endif
                    <h3 class="card-title">Password Baru</h3>
                    <fieldset class="form-group">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="password" wire:model.defer="password" class="form-control"
                            placeholder="iniuntukyangmasuk123">
                    </fieldset>

                    <h3 class="card-title">Konfirmasi Password</h3>
                    <fieldset class="form-group">
                        <input type="password" wire:model.defer="password_confirmation" class="form-control"
                            placeholder="iniuntukyangmasuk123">
                    </fieldset>

                    <h3 class="card-title">Password Sekarang</h3>
                    <fieldset class="form-group">
                        @error('current_password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="password" wire:model.defer="current_password" class="form-control"
                            placeholder="iniuntukyangmasuk123">
                    </fieldset>
                    <div class="my-2" style="float: right;">
                        <button class="btn btn-md btn-secondary" wire:click.prevent="gantiFormIni">Batal</button>
                        <button class="btn btn-md btn-info" wire:click.prevent="store">Simpan
                            Data</button>
                    </div>
                </div>
                @endif
            </div>
        </div>

        {{--
        <!-- Modal CREATE AND UPDATE-->
        <div wire:ignore.self class="modal fade" id="modelId" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-center col-12">
                            <h5 class="modal-dialog-center">{{ $options }} Data Alternatif</h5>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <form wire:submit.prevent="store">
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-sm-4 col-form-label">Nama Alternatif</label>
                                    <div class="col-sm-8">
                                        <input type="text"
                                            class="form-control @error('nama_alternatif') is-invalid @enderror"
                                            wire:model.defer="nama_alternatif" placeholder="contoh = 'Jaya Bibit'">
                                        @error('nama_alternatif')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <hr>
                                <h3 class="text-center">Pengisian Kriteria</h3>

                                @foreach ($kriteria as $key => $item)
                                <h4 class="card-title">{{ $item->nama }}</h4>
                                <fieldset class="form-group">
                                    @error('subkriteria.*')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <select wire:model.defer="subkriteria.{{$key}}" class="form-control"
                                        id="basicSelect">
                                        <option>Pilih Kriteria</option>
                                        @foreach ($item['subkriteria'] as $value)
                                        <option value="{{ $value->id }}">{{
                                            $value->nama_sub_kriteria }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                                @endforeach

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        wire:click="resetInput">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
    </div>



    @if(session()->has('message'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 100">
        <div id="toastId" class="toast align-items-center text-white bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('message') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif



</div>