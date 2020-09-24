<?php

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Jabatan::class, 10)->create();
        $jabatan = new Jabatan;
        $jabatan->nama_jabatan = "Pengurus Harian";
        $jabatan->deskripsi = "Melakukan kontrol, koordinasi, pengembangan dan peningkatan sistem menajemen administrasi dan keuangan serta komunikasi dalam membangun hubungan internal dan eksternal";
        $jabatan->save();


        $jabatan2 = new Jabatan;
        $jabatan2->nama_jabatan = "Divisi Litbang";
        $jabatan2->deskripsi = "Sebagai Wadah Aspirasi, Mencari dan Mengembangkan Bakat/Potensi Mahasiswa Prodi Informatika Serta Mempunyai Tugas Menjalankan Suatu Kegiatan Yang Merumus Pada Kegiatan Penelitian Secara Ilmiah.";
        $jabatan2->save();


        $jabatan3 = new Jabatan;
        $jabatan3->nama_jabatan = "Divisi Sosial & Rohani";
        $jabatan3->deskripsi = "Membidangi Kegiatan Sosial Dan Kerohanian Yang Berhubungan Dengan Kesejahteraan Mahasiswa. Dengan Tujuan Membentuk Pribadi Yang Senantiasa Beriman Dan Bertaqwa Kepada Tuhan Yang Maha Esa.";
        $jabatan3->save();


        $jabatan4 = new Jabatan;
        $jabatan4->nama_jabatan = "Divisi Kominfo";
        $jabatan4->deskripsi = "Memberikan Informasi Serta Menjalin Kerjasama Yang Berkaitan Dengan Organisasi Hmp Di Lingkup Internal Maupun Eksternal Kampus.";
        $jabatan4->save();


        $jabatan5 = new Jabatan;
        $jabatan5->nama_jabatan = "Divisi PSDM";
        $jabatan5->deskripsi = "Mencari Dan Mengembangkan Bakat Pengurus Dan Anggota Hmp Serta Mengadakan Acara Yang Berkaitan Dengan Pengembangan Bakat Pengurus Dan Anggota.";
        $jabatan5->save();

        $jabatan7 = new Jabatan;
        $jabatan7->nama_jabatan = "Divisi Kewirausahaan";
        $jabatan7->deskripsi = "Untuk Bertanggung Jawab Dalam Kerukunan Rumah Tangga Organisasi Hmp Dan Menjalin Kerjasama Dengan Internal Maupun Eksternal Kampus.";
        $jabatan7->save();

        $jabatan6 = new Jabatan;
        $jabatan6->nama_jabatan = "Divisi Seni dan Olahraga";
        $jabatan6->deskripsi = "Tugas Sebagai Wadah Untuk Meningkatkan Kekeluargaan Antar Dosen, Ormawa, Dan Anggota Hmp. Selain Itu Divisi Seni Dan Olahraga Juga Bertugas Untuk Menggali Keahlian Dibidang Seni Maupun Olahraga.";
        $jabatan6->save();
    }
}
