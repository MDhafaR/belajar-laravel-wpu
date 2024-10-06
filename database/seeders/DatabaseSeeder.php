<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'jokowo',
        //     'email' => 'jokowododo@gmail.com',
        //     'password' => bcrypt('jokowi123'),
        // ]);

        // User::create([
        //     'name' => 'prabowo',
        //     'email' => 'prabowo@gmail.com',
        //     'password' => bcrypt('prawowo'),
        // ]);

        // User::create([
        //     'name' => 'anies',
        //     'email' => 'anies@gmail.com',
        //     'password' => bcrypt('mas_anies'),
        // ]);

        // User::create([
        //     'name' => 'faishal senior',
        //     'email' => 'ical@gmail.com',
        //     'password' => bcrypt('ihi'),
        // ]);

        User::factory(5)->create();

        Blog::factory(15)->create();

        category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        category::create([
            'name' => 'Sociality',
            'slug' => 'sociality'
        ]);

        // Blog::create([
        //     'title' => 'jualan baso kaya raya',
        //     'slug' => 'jualan-baso-kaya-raya',
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'mini_body' => 'pedagang baso di kiri jalan raya sukabirus',
        //     'body' => 'pedagang baso di kiri jalan raya sukabirus ini sangat kaya raya karena beliau rajin bersedekah setiap hari jumat'
        // ]);

        // Blog::create([
        //     'title' => 'Warung Kopi Pak Slamet: Surga Kopi di Sudut Kota',
        //     'slug' => 'warung-kopi-pak-slamet-surga-kopi-di-sudut-kota',
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'mini_body' => 'Warung kopi legendaris di pusat kota yang menyajikan kopi nikmat sejak 1960',
        //     'body' => 'Tersembunyi di sudut kota yang ramai, Warung Kopi Pak Slamet telah menjadi ikon bagi para pecinta kopi selama lebih dari enam dekade. Didirikan pada tahun 1960 oleh almarhum Pak Slamet, warung ini telah melewati berbagai era dan tetap berdiri kokoh, menjadi saksi bisu perubahan kota.
        
        //     Warung ini terkenal dengan racikan kopi khasnya yang menggunakan biji kopi pilihan dari berbagai daerah di Indonesia. Aroma kopi yang menggoda akan menyambut Anda bahkan sebelum Anda memasuki warung. Interiornya yang sederhana namun nyaman, dengan meja-meja kayu tua dan foto-foto lawas di dinding, menciptakan suasana nostalgia yang memikat.
        
        //     Yang membuat Warung Kopi Pak Slamet istimewa bukan hanya kopinya, tetapi juga cerita-cerita yang terkandung di dalamnya. Banyak pelanggan setia yang telah mengunjungi warung ini selama puluhan tahun, menjadikannya tempat berkumpul dan bertukar cerita. Dari mahasiswa yang berdiskusi tentang masa depan, hingga para pensiunan yang bernostalgia tentang masa lalu, warung ini menjadi saksi bisu perjalanan hidup banyak orang.
        
        //     Kini, warung ini dikelola oleh cucu Pak Slamet, yang dengan setia menjaga resep dan kualitas kopi tetap sama seperti dahulu. Meski zaman telah berubah dan kafe-kafe modern bermunculan, Warung Kopi Pak Slamet tetap ramai dikunjungi, membuktikan bahwa keaslian dan kualitas akan selalu memiliki tempatnya sendiri di hati masyarakat.'
        // ]);
        
        // Blog::create([
        //     'title' => 'Taman Baca Pelangi: Oasis Literasi di Desa Terpencil',
        //     'slug' => 'taman-baca-pelangi-oasis-literasi-di-desa-terpencil',
        //     'category_id' => '3',
        //     'user_id' => '2',
        //     'mini_body' => 'Kisah inspiratif tentang taman baca yang mengubah nasib anak-anak di desa terpencil',
        //     'body' => 'Di sebuah desa terpencil di kaki gunung, jauh dari hiruk pikuk kota, berdiri sebuah bangunan sederhana yang telah mengubah nasib ratusan anak-anak. Taman Baca Pelangi, didirikan lima tahun lalu oleh seorang guru muda bernama Ibu Sari, kini telah menjadi mercusuar harapan bagi komunitas setempat.
        
        //     Berawal dari keprihatinan Ibu Sari akan rendahnya minat baca dan terbatasnya akses terhadap buku-buku berkualitas di desa ini, ia memulai inisiatif kecil dengan mengumpulkan buku-buku bekas dan mendirikan taman baca di teras rumahnya. Awalnya hanya beberapa anak yang datang, namun lambat laun, jumlah pengunjung terus bertambah.
        
        //     Taman Baca Pelangi bukan sekadar tempat membaca. Di sini, anak-anak tidak hanya diperkenalkan pada dunia literasi, tetapi juga dibimbing untuk mengembangkan kreativitas dan keterampilan hidup. Program-program seperti klub menulis, kelas bercerita, dan workshop kerajinan tangan menjadi magnet yang menarik minat anak-anak untuk terus datang.
        
        //     Yang lebih menakjubkan, dampak Taman Baca Pelangi terasa hingga ke seluruh desa. Orang tua mulai menyadari pentingnya pendidikan dan mendukung anak-anak mereka untuk rajin membaca. Prestasi akademik anak-anak desa pun meningkat signifikan. Beberapa alumni Taman Baca Pelangi bahkan berhasil meraih beasiswa ke universitas ternama.
        
        //     Kini, lima tahun setelah pendiriannya, Taman Baca Pelangi telah menginspirasi desa-desa lain untuk mendirikan taman baca serupa. Ibu Sari dan timnya juga aktif melakukan kampanye literasi ke daerah-daerah terpencil lainnya. Kisah Taman Baca Pelangi membuktikan bahwa dengan tekad kuat dan aksi nyata, perubahan positif dapat dimulai dari hal-hal kecil dan tumbuh menjadi gerakan yang mengubah hidup banyak orang.'
        // ]);

        // Blog::create([
        //     'title' => 'Inovasi Pertanian Vertikal: Solusi Pangan di Tengah Kota',
        //     'slug' => 'inovasi-pertanian-vertikal-solusi-pangan-di-tengah-kota',
        //     'category_id' => '2',
        //     'user_id' => '3',
        //     'mini_body' => 'Kisah sukses pertanian vertikal yang mengubah atap gedung menjadi lahan produktif',
        //     'body' => 'Di tengah hiruk pikuk kota metropolitan, sebuah revolusi hijau sedang berlangsung di atas atap gedung-gedung pencakar langit. Pertanian vertikal, yang diprakarsai oleh sekelompok anak muda visioner, telah mengubah lanskap urban menjadi oasis pangan yang produktif dan berkelanjutan.
        
        //     Proyek ini dimulai tiga tahun lalu oleh lima mahasiswa pascasarjana jurusan Teknik Lingkungan dan Pertanian. Mereka melihat potensi besar dari ruang-ruang kosong di atap gedung yang selama ini terabaikan. Dengan menggabungkan teknologi hidroponik, otomatisasi, dan energi terbarukan, mereka berhasil menciptakan sistem pertanian vertikal yang efisien dan ramah lingkungan.
        
        //     Sistem ini menggunakan air secara efisien dengan metode resirkulasi, sehingga menghemat hingga 95% penggunaan air dibandingkan pertanian konvensional. Panel surya digunakan untuk memenuhi kebutuhan energi, menjadikan operasional pertanian ini hampir sepenuhnya mandiri. Berbagai jenis sayuran dan buah-buahan ditanam secara bertingkat, memaksimalkan penggunaan ruang yang terbatas.
        
        //     Kesuksesan proyek percontohan di sebuah gedung perkantoran di pusat kota menarik perhatian banyak pihak. Dalam waktu singkat, konsep ini diadopsi oleh berbagai gedung di seluruh kota. Restoran-restoran mulai bermitra untuk mendapatkan bahan makanan segar langsung dari atap gedung mereka. Supermarket lokal juga ikut berpartisipasi, menawarkan produk "dari atap ke meja" yang segar dan bebas pestisida.
        
        //     Dampak dari inovasi ini sungguh luar biasa. Selain meningkatkan ketersediaan pangan segar di kota, pertanian vertikal juga berkontribusi dalam mengurangi efek urban heat island, meningkatkan kualitas udara, dan menciptakan lapangan kerja baru di bidang pertanian urban. Program edukasi dan magang yang ditawarkan telah menginspirasi generasi muda untuk terlibat dalam pertanian modern.
        
        //     Keberhasilan ini tidak lepas dari tantangan. Pada awalnya, banyak skeptisisme mengenai kelayakan dan keberlanjutan proyek ini. Namun, dengan kerja keras, inovasi berkelanjutan, dan dukungan dari berbagai pihak, pertanian vertikal kini telah menjadi model baru dalam mewujudkan ketahanan pangan perkotaan.
        
        //     Ke depannya, tim ini berencana untuk mengembangkan teknologi yang memungkinkan kultivasi lebih banyak jenis tanaman, termasuk buah-buahan tropis dan tanaman obat. Mereka juga sedang mengembangkan aplikasi mobile yang memungkinkan masyarakat untuk memesan langsung produk segar dari kebun vertikal terdekat.
        
        //     Inovasi pertanian vertikal ini bukan hanya tentang menghasilkan makanan, tetapi juga tentang mengubah cara kita memandang ruang urban dan hubungan kita dengan alam. Ini adalah bukti nyata bahwa dengan kreativitas dan tekad, kita dapat menciptakan solusi berkelanjutan untuk tantangan perkotaan modern.'
        // ]);
        
        // Blog::create([
        //     'title' => 'Revolusi Pendidikan: Sekolah Alam di Tengah Hutan Kalimantan',
        //     'slug' => 'revolusi-pendidikan-sekolah-alam-di-tengah-hutan-kalimantan',
        //     'category_id' => '3',
        //     'user_id' => '2',
        //     'mini_body' => 'Kisah inspiratif tentang sekolah yang menggabungkan kurikulum modern dengan kearifan lokal',
        //     'body' => 'Jauh di pedalaman Kalimantan, di tengah rimbunnya hutan hujan tropis, sebuah revolusi pendidikan sedang berlangsung. Sekolah Alam Borneo, yang didirikan lima tahun lalu, telah mengubah paradigma pendidikan dengan menggabungkan kurikulum modern dan kearifan lokal dalam suasana belajar yang unik dan menantang.
        
        //     Diprakarsai oleh Pak Dani, seorang antropolog yang kembali ke kampung halamannya setelah menyelesaikan studi di luar negeri, Sekolah Alam Borneo lahir dari keprihatinan akan sistem pendidikan yang sering kali terputus dari realitas lokal. Dengan dukungan dari komunitas setempat dan beberapa LSM internasional, sekolah ini dibangun dengan filosofi "belajar dari alam, untuk alam".
        
        //     Bangunan sekolah sendiri adalah sebuah karya seni arsitektur yang ramah lingkungan. Terbuat dari bahan-bahan alami dan dirancang untuk meminimalkan dampak terhadap ekosistem sekitar, sekolah ini menyatu sempurna dengan lingkungan hutan. Panel surya dan sistem pengolahan air hujan membuat sekolah ini mandiri energi dan air.
        
        //     Kurikulum di Sekolah Alam Borneo adalah perpaduan unik antara standar nasional dan kearifan lokal. Di samping mata pelajaran umum, siswa juga belajar tentang biodiversitas hutan, teknik bertani tradisional, pengobatan herbal, dan seni budaya Dayak. Kelas sering kali diadakan di luar ruangan, memanfaatkan hutan sebagai laboratorium hidup.
        
        //     Salah satu program unggulan adalah "Penjaga Hutan Muda", di mana siswa dilibatkan dalam proyek konservasi dan pemantauan lingkungan. Mereka belajar menggunakan teknologi modern seperti drone dan GIS untuk memetakan hutan, sambil juga mempelajari teknik pelacakan tradisional dari para tetua suku.
        
        //     Dampak Sekolah Alam Borneo terasa jauh melampaui batas-batas fisiknya. Prestasi akademik siswanya menunjukkan bahwa pendekatan holistik ini sangat efektif. Banyak lulusannya yang diterima di universitas terkemuka, membawa perspektif unik tentang keberlanjutan dan kearifan lokal. Yang lebih penting, para siswa tumbuh menjadi individu yang memiliki kesadaran mendalam akan lingkungan dan budaya mereka.
        
        //     Keberhasilan sekolah ini telah menarik perhatian dari berbagai pihak. Peneliti pendidikan dari berbagai negara datang untuk mempelajari model ini. Beberapa daerah lain di Indonesia bahkan mulai mengadopsi elemen-elemen dari kurikulum Sekolah Alam Borneo.
        
        //     Namun, perjalanan tidak selalu mulus. Tantangan awal termasuk skeptisisme dari sebagian masyarakat dan kesulitan dalam menyeimbangkan tuntutan kurikulum nasional dengan pendekatan alternatif. Namun, dengan komunikasi yang baik dan hasil yang berbicara sendiri, Sekolah Alam Borneo kini diterima luas sebagai model pendidikan inovatif.
        
        //     Ke depan, Pak Dani dan timnya berencana untuk membuka program pelatihan guru, memungkinkan lebih banyak pendidik untuk mengadopsi metode mereka. Mereka juga sedang mengembangkan kurikulum digital yang dapat diakses oleh sekolah-sekolah di daerah terpencil lainnya.
        
        //     Sekolah Alam Borneo bukan sekadar tempat belajar; ia adalah bukti nyata bahwa pendidikan berkualitas dapat dicapai dengan menghormati alam dan budaya lokal. Ini adalah model yang menunjukkan bagaimana pendidikan dapat menjadi kekuatan positif dalam melestarikan lingkungan dan memberdayakan komunitas lokal.'
        // ]);
    }
}
