<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Program_bljr
{
   private static $descprogram =[
    [
        "nama" => "Elite",
        "slug" => "elite",
        "deskripsi" => "Usia matang untuk lebih memperkenalkan mereka pada semua aspek permainan bola basket. Pada usia ini kami akan menyempurnakan aspek teknis dan komponen yang paling strategis",
        "tujuan" => [
            "memfokuskan mereka pada keterampilan posisi khusus.",
            "Kami memfokuskan pada skill individu tingkat lanjut"
        ],
        "cover" => "Group 9.png",
        "img" => [
            "prehoops1.png",
            "prehoops2.png",
            "prehoops3.png",
        ],
    ],
    [
        "nama" => "Starter",
        "slug" => "starter",
        "deskripsi" => "Usia menginjak dewasa bukan berarti melepaskan pendidikan karakter. Kami akan tetap membina remaja dengan cara menjadi sahabat dan teman cerita mereka. Sehingga kami dapat menciptakan pemain unggul dengan karakter yang membanggakan dan berjiwa besar",
        "tujuan" => [
            "Memperkuat skill basket pada anak dengan ekstensi latihan yang lebih detail dan lebih kompleks",
            "Program latihan seperti gym, beep tes, dan masih banyak lagi akan mulai kami terapkan",
            "Siswa akan mulai belajar menentukan target prestasi dan pencapaian yang mereka inginkan dan kami akan berkomitmen membantu mereka mencapai apa yang telah mereka targetkan."
        ],
        "cover" => "Group 10.png",
        "img" => [
            "hoop2.jpg",
            "prehoops2.png",
            "prehoops3.png",
        ],
    ],
    [
        "nama" => "Rookie",
        "slug" => "rookie",
        "deskripsi" => "Di usia ini kecerdasan dan pola fikir pada anak sudah terbentuk. Anak sudah mampu untuk menerima fundamental basket skill lebih luas lagi.",
        "tujuan" => [
            "Pengenalan Game Sense",
            "PPengenalan peraturan bermain basket",
            "Pengenalan strategi dan taktik dasar bermain bola basket",
        ],
        "cover" => "Group 11.png",
        "img" => [
            "Group 9.png",
            "Group 10.png",
            "Group 11.png",
        ],

    ]
];

    public static function all(){
        return collect(self::$descprogram);
    }

    public static function find($slug){
        $program = static::all();
        $new = [];
       

        return $program->firstWhere('slug', $slug);
    }
}
