<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::create([
            'name' => 'Kawasan Pertambangan PT.Freeport',
            'thumbnail' => 'destination/Kawasan Pertambangan PT.Freeport.jpg',
            'category' => 'Wisata',
            'body' => 'Wisata tambang Kawasan pertambangan PT Freeport  sebenarnya bukan diperuntukkan untuk berwisata. Jadi bagi yang tidak berkepentingan dilarang masuk, kecuali yang mendapat undangan khusus. Biasanya hanya moment-moment tertentu, tamu yang diundang bisa diberikan kesempatan. Bagi yang mendapat ijin, maka bisa menyaksikan bagaimana proses perusahaan ini dalam mengelola bahan tambang.  Melihat lokasi underground tambang yang mempesona, melihat gereja dan mesjid bawah tanah, melihat kendaraan besar yang mengangkut barang tambang, melihat lebih dekat bagaimana perusahaan ini menerapkan keselamatan kerja tingkat tinggi untuk para pekerjanya.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Taman Nasional Lorentz',
            'thumbnail' => 'destination/Taman Nasional Lorentz.jpg',
            'category' => 'Wisata',
            'body' => 'Sebagian wilayah Kawasan Taman Nasional Lorentz masih termasuk dalam wilayah Kabupaten Mimika. Sebagian wilayahnya lagi masuk di wilayah Kabupaten Jayawijaya, Kabupaten Yahukimo, Kabupaten Puncak Jaya, Kabupaten Paniai dan Kabupaten Asmat, Kabupaten Nduga, Kabupaten Lanni Jaya, dan Kabupaten Puncak. Di kawasan ini, Anda bisa menyaksikan keindahan pantai panorama hutan bakau dan nipah dengan akar-akar bakau yang tersusun rapi di atas permukaan air menghiasi tepi-tepi kali sepanjang mata memandang, panorama air terjun yang asri, panorama bentangan es (gletser) di Puncak Cartensz. Setidaknya  terdapat 34 tipe vegetasi diantaranya hutan rawa, hutan tepi sungai, hutan sagu, hutan gambut, pantai pasir karang, hutan hujan lahan datar/lereng, hutan hujan pada bukit, hutan kerangas, hutan pegunungan, padang rumput, dan lumut kerak.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Wisata Sejarah Keakwa',
            'thumbnail' => 'destination/Wisata Sejarah Keakwa.jpg',
            'category' => 'Wisata',
            'body' => 'Keakwa mempunyai pesona pantai pasir putih yang mempesona. Kekayaan udang, kepiting dan ikannya juga melimpah. Tak hanya itu, kampung yang berada di Distrik Mimika Tengah ini pernah menjadi basis pertahanan Jepang saat diserang sekutu sewaktu Perang Dunia II. Kampung ini menjadi basis utama pertahanan tentara Jepang melawan sekutu  di bagian Selatan Papua. Disini terdapat pelabuhan utaman untuk memobilisasi peralatan tempur Jepang.  Kita masih bisa menemukan puing-puing barang-barang peninggalan sejarah Jepang dan Amerikan Serikat terutama mesin-mesin perangnya. Ada mortir, tank, meriam, peluru dan pesawat tempur.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Kali Kyura',
            'thumbnail' => 'destination/Kali Kyura.jpg',
            'category' => 'Wisata',
            'body' => 'Objek tempat wisata di Timika Papua yang dapat di kunjungi selanjutnya adalah Kali Kyura. Untuk dapat mencapai lokasi Kali Kyura ini, pengunjung harus menempuh perjalanan sekitar 2 jam dari pusat kota. Di Kali Kyura ini pengunjung dapat menikmati dan merasakan suasana yang sangat sejuk dan menenangkan. Selain itu, di Kali Kyura ini juga pengunjung akan dimanjakan dengan air yang jernih sehingga aman untuk mandi-mandi. Di kiri kanan sungai terdapat bebatuan besar semacam tebing batu yang layak untuk dijadikan tempat berswafoto.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Pantai Ipaya',
            'thumbnail' => 'destination/Pantai Ipaya.jpg',
            'category' => 'Wisata',
            'body' => 'Objek tempat wisata di Timika Papua yang dapat  dikunjungi yang pertama adalah Pantai Ipaya. Ipaya merupakan kawasan gabungan tiga kampung yaitu Ipiri, Paripi, dan Yaraya. Untuk menuju lokasi Pantai Ipaya ini, pengunjung harus menempuh perjalanan sekitar 4 jam dari Kota Timika. Di Pantai Ipaya ini pengunjung akan disuguhkan dengan pemandangan yang mempesona serta suasana pantai yang begitu asri dan sejuk. Kawasan wisata yang terletak di  Kampung Atuka, Distrik Mimika Tengah ini menarik untuk dikunjungi. Pasalnya terdapat panorama pantai yang terbentang langsung dari hamparan air laut yang membuat betah untuk bersantai bersama keluarga. Terdapat juga sumur air tawar yang berada di daerah yang dikelilingi laut.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Papeda',
            'thumbnail' => 'destination/Papeda.jpg',
            'category' => 'Kuliner',
            'body' => 'Papeda merupakan makanan khas Timika yang kepopularannya sudah tidak diragukan lagi, di Timika makanan ini sudah ada sejak lama dan sudah menjadi makanan yang wajib ketika mengadakan pesta. Tapi sekarang sudah tidak mudah menemukan pepedan makanan khas Timika ini, hanya ada beberapa warung saja di Timika yang masih menjual dan menyajikan makanan ini. Tapi jika kamu ingin merasakannya kamu bisa mendapatkannya.Makanan khas Timika yang satu ini dapat kamu temui dan santap di hotel yang berada di Timika. Papedan adalah makanan yang berbahan dasar tepung sagu Bentuknya seperti lem kanji yang lengket dan bening.
            <br><br>
            Rasanya hambar karena tidak ada penyedap rasa, tapi jika di hidangkann pepeda menggunakan sup ikan asam pedas dan tumis kangkung. Disinihlah letak kenikmatannya dan tiadak tanding deh, apalagi dengan makanan yang baru-baru ini muncul.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Ulat Sagu',
            'thumbnail' => 'destination/Ulat Sagu.jpg',
            'category' => 'Kuliner',
            'body' => 'Ulat adalah hewan yang tidak lazim makan apa lagi dikonsumsi sebagai makanan sehari-hari, berbeda dengan makanan lainnya yang haru di olah terlebih dahulu, masyarakat Timika biasa mengkosumni ulat sagu langsung di makan. Entah apa rasanya, tapi menurut mereka ulat sagu sangat enak, ulat sagu adalah ulat yang hidup pada batang pohon sagu yang sudah tua. Tapi makanan ulat sagu ini juga bisa di olah jika kamu berlum terbiasa makan mentah. Makanan khas Timika ini bisa terbilang aneh dan unik.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Noken',
            'thumbnail' => 'destination/Noken.jpg',
            'category' => 'Sovenir',
            'body' => 'Noken adalah tas buatan asli Papua dan hanya bisa ditemukan disana. Tas Noken dibuat dengan cara dirajut dengan benang dan tidak membutuhkan waktu yang lama bagi pengrajin untuk menyelesaikannya. Cara mengenakan tas ini juga sangat unik yaitu dengan cara meletakan sandangannya di kepal. Sangat unik bukan? UNESCO sudah mengakui tas Noken selain oleh-oleh khas Papua, dan menjadi warisan dunia. Dari zaman dahulu orang asli Papua menggunkan Noken untuk membwa umbi-umbian, dan sekarang disulap menjadi oleh-oleh nan unik dan terlihat lebih modern. Untuk membeli tas Noken siapkan budget anda dimulai dari 100-500 ribu per item. Kunjungi gerai Lion Art, karena disana paling rekomended yang menjajal tas dengan varisi desain yang keren abis.',
            'author_id' => 1,
        ]);
        Destination::create([
            'name' => 'Lukisan Kulit Kayu Khas Papua',
            'thumbnail' => 'destination/Lukisan_Kulit_Kayu_Khas_Papua.jpg',
            'category' => 'Sovenir',
            'body' => 'Soevenir Lukisan yang dilukis diatas kayu dari pohon Papua',
            'author_id' => 1,
        ]);
    }
}
