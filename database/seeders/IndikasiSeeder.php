<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Indikasi;

class IndikasiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kd_indikasi' => 'I01', 'nama_indikasi' => "Merasakan kesedihan yang berlangsung lama"],
            ['kd_indikasi' => 'I02', 'nama_indikasi' => "Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya"],
            ['kd_indikasi' => 'I03', 'nama_indikasi' => "Memiliki ketakutan yang berlebihan"],
            ['kd_indikasi' => 'I04', 'nama_indikasi' => "Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu"],
            ['kd_indikasi' => 'I05', 'nama_indikasi' => "Cenderung menghindari interaksi sosial dan lebih memilih menyendiri"],
            ['kd_indikasi' => 'I06', 'nama_indikasi' => "Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan"],
            ['kd_indikasi' => 'I07', 'nama_indikasi' => "Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan"],
            ['kd_indikasi' => 'I08', 'nama_indikasi' => "Menjadi lebih mudah marah atau tersinggung"],
            ['kd_indikasi' => 'I09', 'nama_indikasi' => "Merasa tidak berharga, tidak mampu, atau tidak berguna"],
            ['kd_indikasi' => 'I10', 'nama_indikasi' => "Mengalami penurunan rasa percaya diri"],
            ['kd_indikasi' => 'I11', 'nama_indikasi' => "Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan"],
            ['kd_indikasi' => 'I12', 'nama_indikasi' => "Sulit fokus atau mengalami hambatan saat melakukan aktivitas"],
            ['kd_indikasi' => 'I13', 'nama_indikasi' => "Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai"],
            ['kd_indikasi' => 'I14', 'nama_indikasi' => "Mengalami keringat dingin"],
            ['kd_indikasi' => 'I15', 'nama_indikasi' => "Merasakan nyeri atau ketidaknyamanan pada perut"],
            ['kd_indikasi' => 'I16', 'nama_indikasi' => "Mengalami sakit kepala secara mendadak"],
            ['kd_indikasi' => 'I17', 'nama_indikasi' => "Pandangan berkunang-kunang atau merasa akan pingsan"],
            ['kd_indikasi' => 'I18', 'nama_indikasi' => "Merasa mual"],
            ['kd_indikasi' => 'I19', 'nama_indikasi' => "Mengalami muntah"],
            ['kd_indikasi' => 'I20', 'nama_indikasi' => "Jantung berdebar, tubuh gemetar, atau kesulitan bernapas"],
            ['kd_indikasi' => 'I21', 'nama_indikasi' => "Mudah menangis tanpa sebab yang jelas"],
            ['kd_indikasi' => 'I22', 'nama_indikasi' => "Merasa putus asa"],
            ['kd_indikasi' => 'I23', 'nama_indikasi' => "Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup"],
            ['kd_indikasi' => 'I24', 'nama_indikasi' => "Melakukan tindakan yang membahayakan diri sendiri maupun orang lain"],
            ['kd_indikasi' => 'I25', 'nama_indikasi' => "Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah"],
            ['kd_indikasi' => 'I26', 'nama_indikasi' => "Terjadi perubahan berat badan yang signifikan, baik naik maupun turun"],
            ['kd_indikasi' => 'I27', 'nama_indikasi' => "Sering melamun"],
            ['kd_indikasi' => 'I28', 'nama_indikasi' => "Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya"],
            ['kd_indikasi' => 'I29', 'nama_indikasi' => "Memiliki banyak ide yang muncul secara berlebihan"],
            ['kd_indikasi' => 'I30', 'nama_indikasi' => "Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur"],
            ['kd_indikasi' => 'I31', 'nama_indikasi' => "Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain"],
            ['kd_indikasi' => 'I32', 'nama_indikasi' => "Mengalami peningkatan dorongan atau pikiran seksual"],
            ['kd_indikasi' => 'I33', 'nama_indikasi' => "Sulit mengendalikan diri dan cenderung bersikap impulsif"],
            ['kd_indikasi' => 'I34', 'nama_indikasi' => "Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)"],
            ['kd_indikasi' => 'I35', 'nama_indikasi' => "Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan"],
            ['kd_indikasi' => 'I36', 'nama_indikasi' => "Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata"],
            ['kd_indikasi' => 'I37', 'nama_indikasi' => "Cara berbicara menjadi tidak jelas atau sulit dipahami"],
            ['kd_indikasi' => 'I38', 'nama_indikasi' => "Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan"],
            ['kd_indikasi' => 'I39', 'nama_indikasi' => "Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya"]
        ];

        foreach ($data as $item) {
            Indikasi::create($item);
        }
    }
}