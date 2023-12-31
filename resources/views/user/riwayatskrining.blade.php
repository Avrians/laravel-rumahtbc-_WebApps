@extends('user.layouts.main')

@section('content')
    <main id="main">
        <section>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="section-title">
                        <h2>Riwayat Pemeriksaan</h2>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col">
                                <h4>Data Pemeriksaan Terbaru</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">NIK Pasien</th>
                                            <th scope="col">Tanggal Pemeriksaan</th>
                                            <th scope="col" width="150px">Tenaga Medis</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" width="100px">Gambar Rontgen</th>
                                            <th scope="col">Hasil Analisa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data riwayat skrining akan ditampilkan di sini -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>SKR001</td>
                                            <td>1234567890</td>
                                            <td>2023-11-14</td>
                                            <td>Rumah Sakit XYZ<br>
                                                Oleh Dr. John Doe</td>

                                            <td><button class="btn btn-danger">Positive</button></td>
                                            <td><img src="xray/file.png" alt="Gambar Rontgen" style="max-width: 200px;">
                                                <a href="URL_GAMBAR" download>Download X-Ray</a>
                                            </td>
                                            <td>Setelah melakukan pemeriksaan dan analisis, pasien ditemukan memiliki
                                                indikasi Tuberkulosis (TBC). Beberapa temuan klinis yang mendukung diagnosa
                                                ini termasuk:
                                                Gambar rontgen menunjukkan adanya infiltrasi, kavitasi, atau opasitas yang
                                                konsisten dengan infeksi tuberkulosis.
                                                Pasien mengalami gejala seperti batuk yang berkepanjangan, berat badan
                                                menurun, demam, dan kelelahan.
                                                Hasil tes laboratorium menunjukkan adanya Mycobacterium tuberculosis. <br>
                                                <strong>Rekomendasi:</strong>
                                                Pasien direkomendasikan untuk segera memulai pengobatan Tuberkulosis di
                                                bawah pengawasan dokter spesialis paru. Pengobatan yang tepat dan konsisten
                                                sangat penting untuk mengatasi infeksi dan mencegah penyebaran lebih lanjut.
                                                Kami menyarankan agar pasien segera menjadwalkan konsultasi lebih lanjut
                                                dengan dokter spesialis paru untuk perencanaan pengobatan yang lebih rinci
                                                dan pemantauan kondisi kesehatan secara berkala.
                                            </td>
                                        </tr>
                                        <!-- Tambahkan baris ini untuk setiap data riwayat skrining yang ada -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
