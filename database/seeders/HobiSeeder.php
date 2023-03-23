<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hobis')->insert([
            'title' => 'Balap',
            'slug' => 'balap',
            'content' => 'Ramainya perbincangan olahraga balap motor MotoGP 2022 yang segera digelar di Sirkuit Internasional Mandalika, di Lombok Tengah, Nusa Tenggara Barat (NTB) ternyata membuat sebagian orang masih mengira bahwa ini hanyalah sebuah kegiatan kompetisi atau rekreasi saja.
            Padahal nyatanya balap motor juga termasuk salah satu kategori olahraga, lho. Namun, apa alasan balap motor tersebut bisa termasuk dalam kategori olahraga?          
            Kenapa balap motor termasuk dalam kategori olahraga?Balap motor ternyata tidak hanya untuk rekreasi dan kompetisi, tetapi juga sebagai salah satu olahraga yang dilakukan oleh para profesional di trek atau sirkuit tertutup tertentu. Balap motor termasuk dalam kategori olahraga karena saat seseorang mengendarai kendaraan roda dua tersebut akan membutuhkan konsentrasi tinggi. 
            Ada begitu banyak ketegangan pada tubuh dan otot pengendara. Selain itu, melakukan olahraga balap motor juga memengaruhi pikiran, mental serta postur tubuh. Olahraga balap motor ini memang bagus untuk dikendarai dengan kecepatan tinggi. ',
            'draft' => 0
        ]);
    }
}
