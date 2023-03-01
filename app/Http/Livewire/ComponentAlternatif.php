<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ComponentAlternatif extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = "";
    public $nama_alternatif, $kriteria, $subkriteria;
    public $idTerpilih, $idHapus;
    public $options = 'Tambah';


    public function mount()
    {
        $this->kriteria = Kriteria::all();
    }
    public function render()
    {
        return view('livewire.component-alternatif', ['lists' =>  Alternatif::where(function ($query) {
            $query->orWhere('nama_alternatif', 'LIKE', '%' . $this->search . '%');
        })->paginate(10)])->extends('layouts.app')->section('content');
    }

    public function resetInput()
    {
        $this->reset(['nama_alternatif', 'idTerpilih', 'idHapus', 'options', 'subkriteria']);
    }

    public function tambah()
    {
        foreach ($this->kriteria as $key => $item) {
            $this->subkriteria[$key] = '';
        }
        $this->resetInput();
    }

    public function store()
    {
        if ($this->idTerpilih) {
            $data = $this->validate(
                [
                    'nama_alternatif' => 'required|string',
                ],
                [
                    'kode.unique' => 'Kode Alternatif sudah ada',
                ],
            );
        } else {
            $data = $this->validate(
                [
                    'nama_alternatif' => 'required|string',
                ],
                [
                    '*.required' => 'Harap mengisi kolom ini',
                ],
            );
        }


        $this->validate(
            [
                'subkriteria.*' => 'required',
            ],
            [
                'subkriteria.*.required' => 'Harap di pilih',
            ],
        );

        $data = Alternatif::updateOrCreate(['id' => $this->idTerpilih], $data);

        if ($this->idTerpilih) {
            DB::table('alternatif_sub_kriteria')->where('alternatif_id', $this->idTerpilih)->delete();
            $data->subkriteria()->sync($this->subkriteria);
        } else {
            $data->subkriteria()->sync(array_reverse($this->subkriteria));
        }



        session()->flash('message', $this->idTerpilih ? 'Data berhasil dirubah' : 'Data berhasil ditambah');
        $this->resetInput();
        $this->dispatchBrowserEvent('modal-store');
    }

    public function edit($id)
    {
        $this->resetInput();
        $this->idTerpilih = $id;
        $data = Alternatif::with('subkriteria')->find($id);
        $this->nama_alternatif = $data->nama_alternatif;

        foreach ($data['subkriteria'] as $key => $item) {
            $this->subkriteria[$key] = $item->id;
        }
        // dd($this->subkriteria);
        $this->options = 'Edit';

        $this->dispatchBrowserEvent('modal-edit');
    }

    public function hapusKonfirmasi($id)
    {
        $this->idHapus = $id;
        $this->dispatchBrowserEvent('modal-deleteConfirm');
    }

    public function hapus($id)
    {
        Alternatif::destroy($id);
        session()->flash('message', 'Data berhasil dihapus');
        $this->dispatchBrowserEvent('modal-delete');
    }
}
