<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <h4 class="card-title text-center">Output Perhitungan</h4>

                <div class="ml-2" style="float: right">
                    <button class="btn btn-md btn-primary" onclick="toggle()" id="tombol">Tampil Perhitungan<i
                            class="mdi mdi-eye"></i></button>
                </div>
                <!-- title -->
            </div>
            <div id="lihat" style="display: none;">
                <h4 class="text-center">Matrik Keputusan</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $key => $item)
                            <th>(K{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($alternatif as $key => $item)
                            <tr>
                                <td class="text-center">A{{ $key+1 }}</td>
                                <td class="text-start">{{ $item->nama_alternatif }}</td>
                                @foreach ($item['subkriteria'] as $subkriteria)
                                <td class="text-center">{{ $subkriteria['bobot_sub_kriteria'] }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>
                <h4 class="text-center">Menentukan Nilai Bobot Kriteria</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Kode</th>
                            <th>Nama Kriteria</th>
                            <th>Skala Nilai</th>
                            <th>Tipe Kriteria</th>
                        </thead>
                        <tbody>
                            @foreach ($kriteria as $key => $item)
                            <tr>
                                <td class="text-center">K{{ $key+1 }}</td>
                                <td class="">{{ $item->nama }}</td>
                                <td class="text-center">{{ $item->bobot }}</td>
                                <td class="text-center">{{ $item->tipe }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="text-center" colspan="3">Total</td>
                                <td>{{ $kriteria->sum('bobot') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <h4 class="text-center">Menghitung Nilai Perbaikan Bobot</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Kode</th>
                            <th>Nama Kriteria</th>
                            <th>Bobot</th>
                        </thead>
                        <tbody>
                            @foreach ($kriteria as $key => $item)
                            <tr>
                                <td class="text-center">K{{ $key+1 }}</td>
                                <td class="">{{ $item->nama }}</td>
                                <td class="text-center">{{ $item['Wj'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>
                <h4 class="text-center">Nilai Pembagi</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">

                            @foreach ($kriteria as $key => $item)
                            <th>(C{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($pembagi as $key => $item)
                                <td class="text-center">{{ $item }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <h4 class="text-center">Matrik Normalisasi dengan Pembagi</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Kode Alternatif</th>
                            @foreach ($kriteria as $key => $item)
                            <th>(K{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($normalisasi as $key => $item)
                            <tr>
                                <td class="text-center">A{{ $key+1 }}</td>
                                @foreach ($item as $subkriteria)
                                <td class="text-center">{{ $subkriteria }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>

                <h4 class="text-center">Matrik Normalisasi Terbobot</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Kode Alternatif</th>
                            @foreach ($kriteria as $key => $item)
                            <th>(K{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($normalisasiterbobot as $key => $item)
                            <tr>
                                <td class="text-center">A{{ $key+1 }}</td>
                                @foreach ($item as $subkriteria)
                                <td class="text-center">{{ $subkriteria }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>

                <h4 class="text-center">Matrik Ideal Positif dan Negatif</h4>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-center">A+</td>
                                @foreach ($aplus as $item)
                                <td class="text-center">{{ $item }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="text-center">A-</td>
                                @foreach ($amin as $item)
                                <td class="text-center">{{ $item }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>

                <h4 class="text-center">Jarak Setiap Alternatif dengan Matriks Solusi Ideal Positif & Solusi Ideal
                    Negatif</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>D+</th>
                            @foreach ($kriteria as $key => $item)
                            <th>(K{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($dplus as $key => $item)
                            <tr>
                                <td>{{ $item }}</td>
                                @foreach ($jarakdplus[$key] as $nilai)
                                <td class="text-center">{{ $nilai }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>D-</th>
                            @foreach ($kriteria as $key => $item)
                            <th>(K{{ $key+1 }})</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach ($dmin as $key => $item)
                            <tr>
                                <td>{{ $item }}</td>
                                @foreach ($jarakdmin[$key] as $nilai)
                                <td class="text-center">{{ $nilai }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>


                <h4 class="text-center">Hasil Perhitungan Metode WP dan TOPSIS </h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Nama Alternatif</th>
                            <th>Hasil</th>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $key =>$item)
                            <tr>
                                <td>{{ $item['nama_alternatif'] }}</td>
                                <td class="text-center">{{ $item['hasil'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>
            </div>


            <div id="coba">
                <h4 class="text-center">Ranking Hasil Perhitungan Metode WP dan TOPSIS</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>Ranking</th>
                            <th>Nama Alternatif</th>
                            <th>Hasil</th>
                        </thead>
                        <tbody>
                            @foreach ($hasilranking as $key =>$item)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $item['nama_alternatif'] }}</td>
                                <td class="text-center">{{ $item['hasil'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @push('scripts')
    <script>
        function toggle() {
    var x = document.getElementById("lihat");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("tombol").innerHTML = "Tutup Perhitungan<i class='mdi mdi-eye-off'>";
    } else {
        x.style.display = "none";
        document.getElementById("tombol").innerHTML = "Lihat Perhitungan<i class='mdi mdi-eye'>";

    }
    }
    </script>
    @endpush