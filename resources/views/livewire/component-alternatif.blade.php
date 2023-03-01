<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <h4 class="card-title text-center">Data Kriteria Tanaman Semangka</h4>

                <div class="ms-2" style="float: right">
                    <button class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modelId"
                        wire:click.prevent="tambah()" id="anjay">Tambah
                        Data<i class="mdi mdi-plus"></i></button>
                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead class="text-center">
                        <tr class="bg-light">
                            <th class="border-top-0">Kode Alternatif</th>
                            <th class="border-top-0">Nama Alternatif</th>
                            @foreach ($kriteria as $key => $item )
                            <th class="border-top-0">K{{ $key+1 }}</th>
                            @endforeach
                            @if (Auth::user()->level == 0)
                            <th class="border-top-0">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $key => $item)
                        <tr>
                            <td class="text-center">A{{ ($lists->currentpage()-1) *
                                $lists->perpage()
                                + $loop->index + 1
                                }}</td>
                            <td>{{ $item->nama_alternatif }}</td>
                            {{-- @dd($item->subkriteria) --}}
                            @foreach ($item->subkriteria as $keyKriteria => $value)
                            <td class="text-center">
                                {{ $value->bobot_sub_kriteria }}<br>
                            </td>
                            @endforeach
                            @if (Auth::user()->level == 0)
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-group">
                                        <button class="btn btn-md btn-warning"
                                            wire:click.prevent="edit({{ $item->id }})">Edit</button>
                                        <button class="btn btn-md btn-danger text-white"
                                            wire:click="hapusKonfirmasi({{ $item->id }})">Hapus</button>
                                    </div>
                                </div>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="me-2" style="float: right">
                    {{ $lists->links() }}
                </div>
            </div>


        </div>

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
        </div>
    </div>

    <!-- Modal Hapus-->
    <div wire:ignore.self class="modal fade" id="deleteId" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center fs-4">
                        Apakah anda yakin mau menghapus data?
                    </p>
                    <div style="float: right;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" wire:click="hapus({{ $idHapus }})">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
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


    <div class="position-fixed top-0 end-0 p-3" style="z-index: 100">
        <div id="toastDeleteId" class="toast align-items-center text-white bg-danger border-0" role="alert"
            aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
            <div class="d-flex">
                <div class="toast-body">
                    Data berhasil dihapus
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

</div>