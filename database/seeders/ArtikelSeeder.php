<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            [
                'user_id'	=> 1,
                'judul'	=> 'Bertambah 10.617 Orang, Kasus Covid-19 Lewati 800.000',
                'berita'	=> 'Penambahan itu menyebabkan jumlah total kasus Covid-19 di Indonesia kini mencapai 808.340 orang, terhitung sejak diumumkannya pasien pertama pada 2 Maret 2020.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id'	=> 1,
                'judul'	=> 'Jokowi: Saya Sudah Minta ke Menkes Vaksinasi Tak Lebih dari Setahun',
                'berita'	=> '"Kita harap tidak lebih dari setahun, tetapi kalau mundur sedikit tidak apa-apa, tetapi saya sudah minta kepada menteri (Menteri Kesehatan) tidak lebih dari satu tahun," ucap dia.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id'	=> 1,
                'judul'	=> 'Alasan Kenapa Januari adalah Bulan Favorit Lionel Messi',
                'berita'	=> 'Lionel Messi selalu tampil menentukan dalam dua laga Barcelona di tahun 2021. Pertama, Messi muncul sebagai kreator gol semata wayang kemenangan Barcelona atas Huesca yang diciptakan oleh Frenkie de Jong pada 3 Januari 2021.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id'	=> 2,
                'judul'	=> 'Kinerja Lebih Baik, Semen Indonesia Beri Penghargaan 309 Karyawan',
                'berita'	=> 'PT Semen Indonesia (Persero) Tbk atau SIG melaporkan kinerja lebih baik pada sembilan bulan pertama Tahun 2020 ketimbang periode yang sama tahun sebelumnya.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id'	=> 2,
                'judul'	=> 'Takut Dikira Selingkuh, Istri Bohong ke Pelacak Covid-19, Akhirnya Dipenjara',
                'berita'	=> '"Dia tidak ingin keluarganya atau keluarga Lim mengetahui mereka sering keluar bersama, karena dia khawatir keluarga dan teman-teman akan curiga mereka menjalin asmara dan menjadi desas-desus perselingkuhan.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id'	=> 2,
                'judul'	=> 'Amnesty: Extrajudicial Killings, Penembakan Laskar FPI Harus Dibawa ke Pengadilan Pidana',
                'berita'	=> '"Mereka tetap memiliki hak ditangkap dan dibawa ke persidangan untuk mendapat peradilan yang adil demi pembuktian, apakah tuduhan tersebut benar," ucap dia.',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
