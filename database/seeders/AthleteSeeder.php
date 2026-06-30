<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Athlete;

class AthleteSeeder extends Seeder
{
    public function run(): void
    {
        Athlete::truncate();

        Athlete::insert([

            [
                'name' => 'Cristiano Ronaldo',
                'sport' => 'Sepak Bola',
                'earnings' => '$275 Juta',
                'photo' => 'ronaldo.jpg',
                'description' => 'Cristiano Ronaldo dos Santos Aveiro merupakan pesepak bola profesional asal Portugal yang dikenal sebagai salah satu pemain terbaik sepanjang sejarah sepak bola. Ia telah membela berbagai klub besar seperti Sporting CP, Manchester United, Real Madrid, Juventus, hingga Al Nassr. Sepanjang kariernya, Ronaldo berhasil meraih berbagai gelar bergengsi, termasuk Liga Champions UEFA, liga domestik di beberapa negara, serta penghargaan Ballon d\'Or. Ia terkenal karena kemampuan mencetak gol yang luar biasa, kecepatan, kekuatan fisik, kemampuan duel udara, dan disiplin tinggi dalam menjaga kondisi tubuh. Selain sukses sebagai atlet, Ronaldo juga merupakan seorang pengusaha dan ikon olahraga dunia yang menginspirasi jutaan orang melalui kerja keras, dedikasi, dan semangat pantang menyerah.'
            ],

            [
                'name' => 'Lionel Messi',
                'sport' => 'Sepak Bola',
                'earnings' => '$135 Juta',
                'photo' => 'messi.jpg',
                'description' => 'Lionel Andrés Messi adalah pesepak bola profesional asal Argentina yang dianggap sebagai salah satu pemain terbaik sepanjang masa. Ia menghabiskan sebagian besar kariernya bersama FC Barcelona sebelum melanjutkan perjalanan ke Paris Saint-Germain dan Inter Miami. Messi berhasil memenangkan berbagai kompetisi bergengsi seperti Liga Champions UEFA, Copa America, hingga Piala Dunia FIFA bersama Argentina. Ia dikenal memiliki kemampuan menggiring bola yang sangat baik, visi bermain yang tajam, akurasi umpan yang tinggi, serta kreativitas luar biasa dalam menciptakan peluang. Prestasi dan konsistensinya menjadikan Messi sebagai legenda sepak bola dunia.'
            ],

            [
                'name' => 'Stephen Curry',
                'sport' => 'Bola Basket',
                'earnings' => '$102 Juta',
                'photo' => 'curry.jpg',
                'description' => 'Stephen Curry merupakan pemain bola basket profesional asal Amerika Serikat yang bermain untuk Golden State Warriors di NBA. Ia dikenal sebagai penembak tiga angka terbaik sepanjang sejarah bola basket modern. Curry telah memenangkan beberapa gelar juara NBA, penghargaan MVP, serta medali emas Olimpiade. Kemampuannya dalam mencetak poin dari jarak jauh berhasil mengubah cara bermain bola basket modern dan menjadi inspirasi bagi banyak pemain muda di seluruh dunia.'
            ],

            [
                'name' => 'LeBron James',
                'sport' => 'Bola Basket',
                'earnings' => '$128 Juta',
                'photo' => 'lebron.jpg',
                'description' => 'LeBron James adalah pemain bola basket profesional asal Amerika Serikat yang dianggap sebagai salah satu atlet terbaik dalam sejarah NBA. Selama kariernya, ia pernah membela Cleveland Cavaliers, Miami Heat, dan Los Angeles Lakers. LeBron berhasil memenangkan berbagai gelar juara NBA, penghargaan MVP, serta medali emas Olimpiade. Selain prestasinya di lapangan, ia juga dikenal aktif dalam bidang pendidikan dan kegiatan sosial melalui yayasan yang didirikannya.'
            ],

            [
                'name' => 'Jon Rahm',
                'sport' => 'Golf',
                'earnings' => '$218 Juta',
                'photo' => 'rahm.jpg',
                'description' => 'Jon Rahm merupakan pegolf profesional asal Spanyol yang dikenal sebagai salah satu pegolf terbaik dunia. Ia berhasil memenangkan berbagai turnamen PGA Tour serta kejuaraan mayor internasional. Rahm terkenal karena pukulannya yang kuat, permainan yang konsisten, mental bertanding yang baik, serta kemampuannya menjaga performa di berbagai kondisi lapangan.'
            ],

            [
                'name' => 'Neymar Jr',
                'sport' => 'Sepak Bola',
                'earnings' => '$108 Juta',
                'photo' => 'neymar.jpg',
                'description' => 'Neymar da Silva Santos Júnior atau Neymar Jr adalah pesepak bola profesional asal Brasil yang terkenal karena kemampuan dribel, kreativitas, kecepatan, dan teknik individunya yang luar biasa. Ia pernah membela Santos, Barcelona, Paris Saint-Germain, hingga Al Hilal. Neymar telah memenangkan berbagai gelar domestik maupun internasional serta menjadi salah satu pemain paling berpengaruh dalam sepak bola modern.'
            ],

            [
                'name' => 'Kylian Mbappé',
                'sport' => 'Sepak Bola',
                'earnings' => '$110 Juta',
                'photo' => 'mbappe.jpg',
                'description' => 'Kylian Mbappé merupakan pesepak bola profesional asal Prancis yang dikenal sebagai salah satu pemain muda terbaik di dunia. Ia memiliki kecepatan luar biasa, penyelesaian akhir yang tajam, serta kemampuan membaca permainan dengan sangat baik. Mbappé membantu Prancis memenangkan Piala Dunia FIFA 2018 dan hingga kini menjadi salah satu atlet dengan pendapatan tertinggi di dunia.'
            ],

            [
                'name' => 'Canelo Álvarez',
                'sport' => 'Tinju',
                'earnings' => '$85 Juta',
                'photo' => 'canelo.jpg',
                'description' => 'Saúl "Canelo" Álvarez adalah petinju profesional asal Meksiko yang dianggap sebagai salah satu petinju terbaik dalam sejarah. Ia berhasil meraih gelar juara dunia di beberapa kelas berbeda dan terkenal karena teknik bertahan yang sangat baik, pukulan keras, serta kemampuan membaca strategi lawan. Popularitasnya menjadikan Canelo sebagai salah satu ikon olahraga tinju dunia.'
            ],

            [
                'name' => 'Kevin Durant',
                'sport' => 'Bola Basket',
                'earnings' => '$99 Juta',
                'photo' => 'durant.jpg',
                'description' => 'Kevin Durant adalah pemain bola basket profesional asal Amerika Serikat yang dikenal karena kemampuan mencetak angka dari berbagai posisi di lapangan. Ia berhasil memenangkan beberapa gelar juara NBA, penghargaan MVP, serta medali emas Olimpiade. Durant dikenal memiliki postur tinggi, kemampuan menembak yang akurat, serta fleksibilitas bermain yang sangat baik.'
            ],

            [
                'name' => 'Lewis Hamilton',
                'sport' => 'Formula 1',
                'earnings' => '$80 Juta',
                'photo' => 'hamilton.jpg',
                'description' => 'Sir Lewis Hamilton adalah pembalap Formula 1 asal Inggris yang dikenal sebagai salah satu pembalap tersukses sepanjang sejarah. Ia telah memenangkan berbagai gelar Juara Dunia Formula 1 dan memecahkan banyak rekor dalam dunia balap. Hamilton terkenal karena kemampuan mengemudi yang luar biasa, konsistensi, strategi balapan yang matang, serta kepeduliannya terhadap isu lingkungan dan keberagaman.'
            ]

        ]);
    }
}