<?php

namespace App\Http\Livewire;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Livewire\Component;

class ComponentOutput extends Component
{
    public $alternatif, $kriteria, $pembagi, $normalisasi, $normalisasiterbobot, $aplus;
    public $amin, $jarakdplus, $jarakdmin, $dplus, $dmin,  $hasil, $hasilranking;

    public function mount()
    {
        // MENGAMBIL DATA ALTERNATIF DAN KRITERIA
        $this->alternatif = Alternatif::all();
        $this->kriteria = Kriteria::all();

        // MENORMALISASIKAN BOBOT DGN METODE WP

        foreach ($this->kriteria as $key => $each) {
            $this->kriteria[$key]['Wj'] = $each->bobot / $this->kriteria->sum('bobot');
        }

        // MENCARI PEMBAGI      

        for ($i = 0; $i < count($this->kriteria); $i++) {
            $this->pembagi[$i] = 0;
            for ($j = 0; $j < count($this->alternatif); $j++) {
                $this->pembagi[$i] = $this->pembagi[$i] + pow($this->alternatif[$j]['subkriteria'][$i]['bobot_sub_kriteria'], 2);
            }
            $this->pembagi[$i] = sqrt($this->pembagi[$i]);
        }


        // NORMALISASI

        for ($i = 0; $i < count($this->kriteria); $i++) {
            for ($j = 0; $j < count($this->alternatif); $j++) {
                $this->normalisasi[$j][$i] = $this->alternatif[$j]['subkriteria'][$i]['bobot_sub_kriteria'] / $this->pembagi[$i];
            }
        }

        // MENORMALISASIKAN DENGAN NILAI BOBOT
        for ($i = 0; $i < count($this->kriteria); $i++) {
            for ($j = 0; $j < count($this->alternatif); $j++) {
                $this->normalisasiterbobot[$j][$i] = $this->normalisasi[$j][$i] * $this->kriteria[$i]['Wj'];
            }
        }

        // MENCARI NILAI A+ DAN A-
        for ($i = 0; $i < count($this->kriteria); $i++) {
            for ($j = 0; $j < count($this->normalisasiterbobot); $j++) {
                if ($j == 0) {
                    $this->aplus[$i] = $this->normalisasiterbobot[$j][$i];
                }
                if ($this->kriteria[$i]['tipe'] == 'benefit') {
                    if ($this->aplus[$i] < $this->normalisasiterbobot[$j][$i]) {
                        $this->aplus[$i] = $this->normalisasiterbobot[$j][$i];
                    }
                } else {
                    if ($this->aplus[$i] > $this->normalisasiterbobot[$j][$i]) {
                        $this->aplus[$i] = $this->normalisasiterbobot[$j][$i];
                    }
                }
            }
            for ($j = 0; $j < count($this->normalisasiterbobot); $j++) {
                if ($j == 0) {
                    $this->amin[$i] = $this->normalisasiterbobot[$j][$i];
                }
                if ($this->kriteria[$i]['tipe'] == 'benefit') {
                    if ($this->amin[$i] > $this->normalisasiterbobot[$j][$i]) {
                        $this->amin[$i] = $this->normalisasiterbobot[$j][$i];
                    }
                } else {
                    if ($this->amin[$i] < $this->normalisasiterbobot[$j][$i]) {
                        $this->amin[$i] = $this->normalisasiterbobot[$j][$i];
                    }
                }
            }
        }

        // // MENCARI JARAK DARI A+ DAN A-
        for ($i = 0; $i < count($this->kriteria); $i++) {
            for ($j = 0; $j < count($this->normalisasiterbobot); $j++) {
                $this->jarakdplus[$j][$i] = pow($this->aplus[$i] - $this->normalisasiterbobot[$j][$i], 2);
            }

            for ($j = 0; $j < count($this->normalisasiterbobot); $j++) {
                $this->jarakdmin[$j][$i] = pow($this->normalisasiterbobot[$j][$i] - $this->amin[$i], 2);
            }
        }

        // MENENTUKAN NILAI D+ DAN D-
        for ($j = 0; $j < count($this->alternatif); $j++) {
            $this->dplus[$j] = 0;
            $this->dmin[$j] = 0;

            for ($i = 0; $i < count($this->kriteria); $i++) {
                $this->dplus[$j] = $this->dplus[$j] + $this->jarakdplus[$j][$i];
            }
            for ($i = 0; $i < count($this->kriteria); $i++) {
                $this->dmin[$j] = $this->dmin[$j] + $this->jarakdmin[$j][$i];
            }
            $this->dplus[$j] = sqrt($this->dplus[$j]);
            $this->dmin[$j]  = sqrt($this->dmin[$j]);
        }

        // MENGHITUNG NILAI PREFERENSI
        foreach ($this->alternatif as $j => $alternatif) {
            $this->hasil[$j] = [
                'nama_alternatif' => $alternatif->nama_alternatif,
                'hasil' => $this->dmin[$j] / ($this->dmin[$j] + $this->dplus[$j]),
            ];
        }

        $this->hasilranking = $this->hasil;

        // MELAKUKAN PENGURUTAN        
        array_multisort(array_column($this->hasilranking, 'hasil'), SORT_DESC, $this->hasilranking);
    }

    public function render()
    {
        return view('livewire.component-output')->extends('layouts.app')->section('content');
    }
}
