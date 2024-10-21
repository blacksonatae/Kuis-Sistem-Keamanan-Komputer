<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class incidents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('incidents')->insert(
            [
                [
                    'incidents_name' => 'Sony Pictures Entertainment',
                    'incidents_year' => 2014,
                    'description' => 'Peretasan tahun 2014 oleh kelompok Guardians of Peace (GOP) adalah salah satu serangan siber paling signifikan dan kontroversial. Mereka mengklaim telah mengakses sistem internal selama hampir setahun sebelum terungkap. Data yang dicuri mencakup informasi sensitif karyawan SPE, naskah film yang belum dirilis, dan catatan kesehatan aktor terkenal. Insiden tersebut memiliki dampak yang sangat besar, mengakibatkan Sony Pictures harus mengalokasikan dana sebesar US$15 juta untuk menangani krisis tersebut.',
                ],
                [
                    'incidents_name' => 'Serangan ke Tiket.com dan Citilink',
                    'incidents_year' => 2014,
                    'description' => 'Kasus peretasan yang menimpa platform penjualan tiket melibatkan PT Global Networking (tiket.com) dan bukan Citilink. Citilink mengklarifikasi bahwa insiden tersebut terjadi pada mitra agen perjalanan daring mereka yang menjual tiket Citilink. Situs resmi Citilink tidak mengalami peretasan, dan semua transaksi yang dilakukan di sana tetap terjamin keamanannya. Insiden ini berdampak negatif bagi tiket.com, dan Citilink telah berkolaborasi dengan pihak kepolisian sebagai saksi dalam penyelidikan kasus ini. Pihak kepolisian telah menangkap empat orang tersangka yang terlibat dalam akses ilegal tersebut.',
                ],
                [
                    'incidents_name' => 'Situs Web Telkomsel',
                    'incidents_year' => 2017,
                    'description' => 'Serangan terhadap situs web Telkomsel terjadi dengan mengubah tampilan halaman dan menyisipkan kata-kata kasar sebagai bentuk protes dari peretas terkait harga paket data yang dianggap terlalu tinggi. Selain itu, mereka juga menyoroti masalah pembagian dan pembatasan kuota untuk jaringan 2G, 3G, dan 4G, serta meminta penghapusan paket seperti HOOQ dan VIU. Menanggapi insiden ini, Telkomsel menyampaikan permohonan maaf atas peretasan yang terjadi. Adita Irawati, Wakil Presiden Komunikasi Korporat Telkomsel, menyatakan bahwa saat ini pihaknya sedang melakukan investigasi dan perbaikan.',
                ],
                [
                    'incidents_name' => 'RedDoorz Indonesia',
                    'incidents_year' => 2020,
                    'description' => 'Pada tahun 2020, RedDoorz mengirimkan email kepada pelanggan mengenai akses tidak sah ke sistem mereka yang terjadi pada awal September. Data yang terlibat mencakup nama, alamat email, nomor telepon, alamat, dan rincian pemesanan, tetapi informasi keuangan seperti nomor kartu kredit dan kata sandi tetap aman. RedDoorz telah mengambil langkah untuk menyelidiki masalah ini dan memastikan kata sandi akun terenkripsi. Mereka juga menyarankan pelanggan untuk tidak menggunakan kata sandi yang sama di platform lain dan menggantinya jika perlu.',
                ],
                [
                    'incidents_name' => 'RedDoorz Indonesia',
                    'incidents_year' => 2020,
                    'description' => 'Situs resmi Dewan Perwakilan Rakyat (DPR) Republik Indonesia mengalami serangan siber pada tahun 2020. Serangan DDoS yang terjadi mengakibatkan situs tersebut tidak dapat diakses oleh para pengunjung, dan peretas juga mengubah nama situs web tersebut. Insiden ini menimbulkan kekhawatiran mengenai keamanan infrastruktur vital negara.',
                ],
                [
                    'incidents_name' => 'Situs Web Tempo Down',
                    'incidents_year' => 2020,
                    'description' => 'Pada tahun 2020, situs web Tempo menjadi target serangan siber yang mengakibatkan gangguan pada layanan mereka. Insiden ini berdampak pada kerugian baik dari segi finansial maupun reputasi bagi Tempo, sekaligus menekankan adanya kelemahan dalam aspek keamanan pada situs berita terkemuka tersebut.',
                ],
                [
                    'incidents_name' => 'Kebocoran Data Pengguna Tokopedia',
                    'incidents_year' => 2020,
                    'description' => 'Tokopedia mengalami kebocoran data di mana 91 juta data pengguna dan 7 juta data akun merchant bocor dan dijual di Dark Web. Peretas menawarkan 15 juta data di forum dan menjual seluruh data senilai US$5.000. Meskipun Tokopedia mengakui adanya upaya pencurian data, mereka memastikan bahwa informasi sensitif seperti password terlindungi melalui enkripsi. Kementerian Komunikasi dan Informatika meminta Tokopedia memperkuat keamanan sistem dan melakukan investigasi internal untuk memastikan keamanan data pengguna.',
                ],
                [
                    'incidents_name' => 'Serangan Website Sekretariat Kabinet RI',
                    'incidents_year' => 2020,
                    'description' => 'Pada tahun 2020, situs web Sekretariat Kabinet Republik Indonesia mengalami serangan DDoS yang signifikan. Insiden ini menyebabkan gangguan pada layanan publik dan menekankan urgensi perlunya perlindungan keamanan yang memadai untuk situs web yang berhubungan dengan instansi pemerintahan.',
                ],
                [
                    'incidents_name' => 'Peretasan Website BPJS Kesehatan',
                    'incidents_year' => 2021,
                    'description' => 'Insiden kejahatan siber yang mencuri perhatian di Indonesia adalah kebocoran data BPJS kesehatan pada 2021, yang melibatkan informasi 222,5 juta pengguna, sekitar 82% populasi. Para peretas mengunggah data ke tiga situs web dan mengklaim memiliki informasi pribadi 279 juta individu. Sebagai respons, pemerintah melarang akses ke situs-situs tersebut dan melakukan penyelidikan.',
                ],
                [
                    'incidents_name' => 'Serangan DDoS pada Layanan Perbankan',
                    'incidents_year' => 2021,
                    'description' => 'Pada tahun 2021, sektor perbankan di Indonesia mengalami serangan DDoS yang mengakibatkan gangguan layanan bagi para nasabah. Insiden ini menimbulkan kekhawatiran mengenai kerentanan infrastruktur keuangan terhadap ancaman siber.',
                ],
                [
                    'incidents_name' => 'Peretasan Aplikasi Covid-19 Test-and-Trace',
                    'incidents_year' => 2021,
                    'description' => 'Serangan siber di Indonesia adalah peretasan aplikasi pendeteksi COVID-19, yang berdampak bagi 1,3 juta pengguna Kartu Peringatan Kesehatan Elektronik (eHAC) karena menyimpan informasi sensitif. Selain itu, aplikasi Covid-19 Test-and-Trace memiliki 2 GB data dalam basis data yang tidak terlindungi, dapat diakses melalui browser Elasticsearch. Kementerian Kesehatan tidak memberikan tanggapan memadai, dan setelah informasi diterima oleh Badan Siber dan Sandi Negara, server diturunkan dan pengguna diingatkan untuk menghapus aplikasi. Aplikasi baru, PeduliLindungi, juga mengalami kebocoran data.',
                ],
                [
                    'incidents_name' => 'Kasus Penipuan Online',
                    'incidents_year' => 2022,
                    'description' => 'Fenomena penipuan daring semakin meningkat di Indonesia, di mana para pelaku kejahatan memanfaatkan beragam teknik, seperti phishing, pencurian identitas, dan penipuan investasi. Kasus-kasus ini mencerminkan kompleksitas tantangan yang dihadapi dalam menangani kejahatan siber yang terus berkembang.',
                ],
                [
                    'incidents_name' => 'Serangan Ransomware pada Bank Syariah Indonesia',
                    'incidents_year' => 2023,
                    'description' => 'Pada bulan Mei 2023, salah satu server bank syariah terbesar di Indonesia mengalami serangan ransomware. Akibatnya, para nasabah tidak dapat mengakses aplikasi mobile banking mereka selama lima hari. Insiden ini memberikan dampak serius terhadap sektor keuangan dan menekankan urgensi perlunya perlindungan data yang efektif.',
                ],
                [
                    'incidents_name' => 'Serangan Pusat Data Nasional',
                    'incidents_year' => 2024,
                    'description' => 'Serangan ransomware yang dilakukan oleh kelompok peretas Brain Cipher menargetkan server PDN adalah tuntutan tebusan sebesar Rp 131 miliar, yang ditolak oleh pihak pemerintah. Akhirnya, mereka memberikan kunci enkripsi dan menyampaikan permohonan maaf di dark web. Pemulihan layanan terjadi pada tanggal 3 Juli 2024. Insiden ini disebabkan oleh penggunaan kata sandi yang lemah, yaitu Admin#1234, serta adanya anggaran yang besar namun dengan tingkat keamanan yang rendah, dan dugaan keterlibatan orang dalam.',
                ],
            ]
        );
    }
}
