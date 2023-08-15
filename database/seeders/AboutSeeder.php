<?php

namespace Database\Seeders;

use App\Models\Opd;
use App\Models\Misi;
use App\Models\Visi;
use App\Models\About;
use App\Models\SmartCity;
use App\Models\Structural;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Visi
        $visi = [
            'Membangun Regulasi dan Sumber Daya Manusia yang Cerdas dan Memahami Teknologi Informasi.',
        ];

        foreach ($visi as $item) {
            Visi::create([
                'body' => $item,
            ]);
        }

        // Misi
        $misi = [
            '<ul>
                <li>Menciptakan Mimika yang Aman, Tertib dan Damai.</li>
                <li>Mewujudkan Pemerataan Pembangunan Pelayanan Dasar, Ekonomi dan Infrastruktur di Wilayah Pedalaman dan Pesisir.</li>
                <li>Mewujudkan Pemerintahan yang Dinamis, Bersih, Berwibawa, Akuntabel, Profesional dan Inovatif.</li>
                <li>Membangun Sentra-Sentra Ekonomi Baru di Wilayah Mimika.</li>
            </ul>',
        ];

        foreach ($misi as $item) {
            Misi::create([
                'body' => $item,
            ]);
        }

        // Deksripsi
        About::create(['body' =>
            'Pada awalnya Kabupaten Mimika adalah bagian dari Kabupaten Fakfak yaitu hanya terdiri dari tiga
            Distrikamatan (Distrikamatan Agimuga, Distrikamatan Mimika Barat, dan Distrikamatan Mimika Timur).
            Pada tahun 1996, berdasarkan Peraturan Pemerintah Nomor 54 Tahun 1996 tentang pembentukan Kabupaten
            Mimika di wilayah provinsi daerah tingkat I Irian Jaya, pada saat itu disebut kabupaten
            administratif, yang ditetapkan dan diundangkan pada tanggal 13 Agustus 1995. Pada saat dikeluarkan
            peraturan pemerintah ini, belum ada penjabat bupati yang diangkat. Pada tanggal 8 Oktober 1996,
            berdasarkan berita acara pengambilan janji jabatan bupati kabupaten Mimika, Provinsi Daerah Tingkat
            I Irian Jaya terhadap Drs. Titus Potereyauw, telah dilaksanakan pengambilan janji jabatan bupati
            Kabupaten Mimika oleh Menteri Dalam Negeri Moh.Yogie sesuai keputusan menteri dalam negeri, Titus
            Potereyauw menjabat sebagai bupati Mimika pertama sampai tahun 2001.
            <br><br>
            Pada tahun 1999, berdasarkan UU Nor 45 tahun 1999 tentang pembentukan provinsi Irian Jaya Tengah,
            Propinsi Irian Jaya Barat, Kabupaten Paniai, Kabupaten Mimika, Kabupaten Puncak Jaya, dan Kota
            Sorong, maka Kabupaten Mimika sejak itu telah menjadi kabupaten defenitif. Tanggal 15 November 2010
            pada masa kepemimpinan Bupati Mimika Klemen Tinal, telah diundangkan Perda No 12 tahun 2010 tentang
            hari jadi Kabupaten Mimika yang ditetapkan pada tanggal 18 Maret 2001, hal ini berdasarkan peresmian
            kabupaten Mimika oleh Gubernur Provinsi Papua, Drs. Jakobus Perviddya Salosa. M.Si
            <br><br>
            Pada tanggal 12 Maret 2016 telah diadakan rapat yang dipimpin oleh Bupati Mimika Eltinus Omaleng,
            dihadiri Sekretaris Daerah Mimika, ketua dan anggota DPRD Mimika, tokoh masyarakat, ketua-ketua
            kerukunan, pimpinan SKPD, serta dihadiri juga oleh bupati Mimika pertama Drs. Titus Potereyauw dan
            Athanasius Allo Rafra, agenda rapatnya adalah pelurusan sejarah hari jadi kabupaten Mimika. Dalam
            rapat itu, hari jadi kabupaten Mimika disepakati pada tanggal 8 oktober 1996, sesuai berita acara
            pengambilan janji jabatan bupati kabupaten Mimika, provinsi daerah tingkat I Irian Jaya, Drs. Titus
            Potereyauw dimana pada saat itu yang mengambil janji adalah menteri dalam negeri republik lndonesia
            Moh. Yogie. Sesuai hasil kesepakatan oleh Ketua DPRD Kabupaten Mimika dan tokoh-tokoh masyarakat,
            serta pelaku sejarah, maka Bupati Mimika Eltinus Omaleng telah mengusulkan perubahan Peraturan
            Daerah Nomor 12 Tahun 2010 tentang hari jadi kabupaten Mimika kepada DPRD Kabupaten Mimika yang
            semula ditetapkan pada tanggal 18 maret 2001.
            <br><br>
            Ibu kota Kabupaten Mimika terletak di Kota Timika, memiliki 18 Distrik yang terdiri dari 5 Distrik
            dalam kota ( Distrik Mimika Baru, Distrik Kuala Kencana, Distrik Wania, Distrik Iwaka, dan Distrik
            Kwamki Narama), 5 Distrik di pegunungan ( Distrik Tembagapura, Distrik Jila, Distrik Agimuga,
            Distrik Alama, dan Distrik Hoya) , dan 8 Distrik di pesisir ( Distrik Mimika Timur, Distrik Mimika
            Timur Tengah, Distrik Mimika Timur Jauh, Distrik Mimika Barat, Distrik Mimika Barat Tengah, Distrik
            Mimika Barat Jauh, Distrik Jita, dan Distrik Amar). Di kabupaten ini terdapat tambang emas terbesar
            di dunia milik PT. Freeport Indonesia yang terletak di Distrik Tembagapura, dan terdapat sebuah
            bandar udara Internasional , yaitu Bandara Moses Kilangin yang terletak di Distrik Mimika Baru ,
            serta Pelabuhan Nasional yaitu Pelabuhan Poumako di Distrik Mimika Timur.
            <br><br>
            Kabupaten Mimika mempunyai batas wilayah yaitu, di sebelah Utara Kabupaten Paniai, Kabupaten Nabire,
            Kabupaten Tolikara, Kabupaten Dogiyai, Kabupaten Puncak, Kabupaten Puncak Jaya dan Kabupaten Deiyai
            Selatan LauArafuru Barat Kabupaten Kaimana Timur Kabupaten Jayawijaya dan Kabupaten Yahukimo. Letak
            geografis Kabupaten Mimika terletak antara 134o31’-138o31’ Bujur Timur dan 4o60’-5o18’ Lintang
            Selatan. Memiliki luas wilayah 21.693,51 km2atau 4,75% dari luas wilayah Provinsi Papua.',
        ]);

        // Stukrutal
        $atr = [
            'Dr. Eltinus Omaleng S.E., M.H.',
            'Johannes Rettob, S.Sos, MM.',
        ];

        foreach ($atr as $item) {
            Structural::create([
                'name' => $item,
            ]);
        }

        // ORGANISASI PERANGKAT DAERAH (OPD)
        $items = [
            '<ul>
                <li>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</li>
                <li>Badan Kesatuan Bangsa dan Politik</li>
                <li>Badan Penanggulangan Bencana Daerah</li>
                <li>Badan Pendapatan Daerah</li>
                <li>Badan Pengelolaan Keuangan dan Aset Daerah</li>
                <li>Badan Perencanaan Pembangunan Daerah</li>
                <li>Bagian Administrasi Perekonomian Dan Pembangunan</li>
                <li>Bagian Administrasi Sumber Daya Manusia</li>
                <li>Bagian Hukum</li>
                <li>Bagian Humas dan Protokoler</li>
                <li>Bagian Kesejahteraan Rakyat</li>
                <li>Bagian Layanan Pengadaan Barang dan Jasa</li>
                <li>Bagian Organisasi</li>
                <li>Bagian Tata Pemerintahan</li>
                <li>Bagian Umum dan Perlengkapan</li>
                <li>Dinas Kependudukan dan Pencatatan Sipil</li>
                <li>Dinas Kesehatan</li>
                <li>Dinas Ketahanan Pangan</li>
                <li>Dinas Komunikasi dan Informatika</li>
                <li>Dinas Koperasi da Usaha Kecil Menengah</li>
                <li>Dinas Lingkungan Hidup</li>
                <li>Dinas Pariwisata, Kebudayaan, Pemuda dan Olahraga</li>
                <li>Dinas Pekerjaan Umum dan Penataan Ruang</li>
                <li>Dinas Pemberdayaan Masyarakat dan Kampung</li>
                <li>Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</li>
                <li>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</li>
                <li>Dinas Pendidikan</li>
                <li>Dinas Perhubungan</li>
                <li>Dinas Perikanan</li>
                <li>Dinas Perindustrian dan Perdagangan</li>
                <li>Dinas Perpustakaan dan Arsip Daerah</li>
                <li>Dinas Perumahan, Kawasan Pemukiman dan Pertanahan</li>
                <li>Dinas Peternakan dan Kesehatan Hewan</li>
                <li>Dinas Satuan Polisi Pamong Praja</li>
                <li>Dinas Sosial</li>
                <li>Dinas Tanaman Pangan, Hortikultura dan Perkebunan</li>
                <li>Dinas Tenaga Kerja dan Transmigrasi</li>
                <li>INSPEKTORAT</li>
                <li>RSUD Kabupaten Mimika</li>
                <li>Sekretariat Daerah</li>
                <li>Sekretariat DPRD</li>
            </ul>',
        ];

        foreach ($items as $item) {
            Opd::create([
                'name' => $item,
            ]);
        }

        // Smart City
        $items = [
            '<em>&nbsp; &nbsp; &nbsp; &nbsp;</em>Smart city adalah sebuah kota yang mampu mengelola dan
            memanfaatkan segala sumber daya yang dimiliki seperti sumber daya alam (SDA), sumber daya manusia
            (SDM) dan sumber daya lainnya sehingga warganya dapat hidup nyaman. Menurut Caragliu, A., dkk
            (2010:3), smart city didefinisikan sebagai kota yang mampu menggunakan sumberdaya manusia, modal
            sosial dan infrastruktur telekomunikasi modern untuk mewujudkan pertumbuhan ekonomi berkelanjutan
            dan kualitas kehidupan yang tinggi dengan manajemen sumberdaya yang bijaksana melalui pemerintahan
            berbasis partisipasi masyarakat. Adanya konsep smart city ini diharapkan dapat mempermudah dan
            meningkatkan kualitas hidup masyarakat. Konsep ini akan terpenuhi apabila kota tersebut sudah mampu
            untuk mengelola sumber dayanya secara berkelanjutan menggunakan sistem terintegrasi serta memiliki
            infrastruktur dasar yang terpenuhi seperti air, listrik, sanitasi limbah, keamanan, pemanfaatan
            teknologi informasi dalam kehidupan, baik pemerintahan maupun masyarakat dan transportasi yang
            efisien sehingga dapat meningkatkan mobilitas masyarakat.
            <br><br>
            <em>&nbsp; &nbsp; &nbsp; &nbsp;</em>IBM (International Business Machines Corporation) adalah
            perusahaan teknologi ternama di Amerika menuturkan enam indikator dasar yang harus dipenuhi dalam
            mewujudkan smart city yaitu masyarakat penghuni kota smart people, smart economy, smart governance,
            smart living, smart envoronment. Dengan mampu menerapkan atau memenuhi salah satu dari enam
            indikator tersebut diharapkan sebuah smart city dapat membantu menyelesaikan masalah perkotaan,
            seperti transparansi dan partisipasi publik, keamanan, kemudahan transportasi publik, data dan
            informasi yang terpenuhi.
            <br><br>
            <em>&nbsp; &nbsp; &nbsp; &nbsp;</em>Menurut pakar Smart City Winarno, konsep smart city juga
            menerapkan lingkungan yang lebih lestari karena konsep penganturan limbah dan pengelolaan air yang
            lebih maju. Dengan Konsep ini dapat mendatangkan wisatawan sebanyak mungkin, menarik investor agar
            berinvestasi di kota tersebut, kemudian menarik penghuni baru baik itu dari kalangan profesional,
            akademisi, dan usahawan bertempat tinggal di kota tersebut. Kesemuanya itu tolak ukur nya adalah
            kota tersebut memiliki daya tarik yang kuat.Smart city dapat diterapkan dikota mana saja, seperti
            yang dilansir dari laman http://www.neraca.co.id dikatakan bahwa, “smart city merupakan pengembangan
            dan pengelolaan kota dengan memanfaatkan teknologi infomasi (TI) untuk menghubungkan, memonitor dan
            mengendalikan berbagai sumber daya yang ada di dalam kota dengan lebih efektif dan efisien untuk
            memaksimalkan pelayanan kepada warganya serta mendukung pembangunan yang berkelanjutan. Namun sistem
            TI bukan tujuan utama, banyak kota yang membelanjakan TI tapi tidak mengelolanya dengan maksimal.
            Oleh karena itu, smart city tidak selalu untuk kota yang harus mempunyai akses internet yang memadai
            dan berbasis TI.”
            berbasis TI.”
            <br><br>
            <em>&nbsp; &nbsp; &nbsp; &nbsp;</em>Salah satu penerapan dari smart city adalah penerapan smart
            govermance yang bertujuan agar adanya pemerintahan yang transparan, kemudahan partisipasi publik,
            dan informatif. Smart City ini akan mulai di terapkan di Kabupaten Mimika sehingga Visi dan Misi
            dari Kabupaten Mimika dapat dicapai. Langkah awal yang dilakukan pemerintah Mimika menuju Smart City
            adalah dengan mengadakan Website Resmi Kabupaten Mimika yang berisikan informasi seputar Kabupaten
            Mimika sehingga pelayanan publik dapat dilaksanakan dengan cepat dan tepat serta informasi
            pemerintahan dapat diakses oleh semua lapisan masyarakat dan tingkat kepercayaan masyarakat kepada
            layanan pemerintah dapat meningkat.
            <br><br>
            <b>QUICK WIN 2017</b>
            <br><br>
            <em>&nbsp; &nbsp; &nbsp; &nbsp;</em>Mimika terpilih dalam gerakan menuju 100 smart city seluruh
            Indonesia, dan telah launched aplikasi AKAIMENO yang merupakan integrasi dari aplikasi lapor.
            (www.lapor.go.id) Melalui link akaimeno.com maupun halaman web Kabupaten Mimika, masyarakat
            Kabupaten Mimika bisa menyampaikan aspirasi,keluhan dan aduannya yang akan diteruskan oleh Kominfo
            kepada OPD yang terkait. Akaimeno tidak hanya bias diakses melalui link website, namun juga bisa
            melalui sms ke nomor 1708 untuk memudahkan akses masyarakat yang tidak mempunyai akses internet.
            <br><br>
            <b>PILOT PROJECT 2018</b>
            <br><br>
            <em>&nbsp; &nbsp; &nbsp; &nbsp;</em>Sebagai tindak lanjut dari quick win, Kabupaten Mimika melalui
            Dinas Komunikasi dan Informatika akan melakukan gerakan smart city melalui suatu pilot project yang
            diberi nama “PigiSekolah” Pilot project ini akan menggandeng Dinas Pendidikan dan Dinas Perhubungan.
            Pilot Project ini akan melalui tahapan awal yakni pengumpulan data siswa dan data alamat rumah
            sehingga Dinas Perhubungan menyiapkan transportasi yang khusus untuk anak sekolah. Karena masih uji
            coba / Pilot Project, maka hanya akan dilakukan untuk 2 – 3 sekolah negeri terlebih dahulu.',
        ];

        foreach ($items as $item) {
            SmartCity::create([
                'body' => $item,
            ]);
        }
    }
}
