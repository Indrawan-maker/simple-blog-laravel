<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => "itb-ikatan-alumni-dan-rumah-amal-gerak-cepat-salurkan-bantuan-untuk-korban-bencana-di-sumatera",
            'title' => "ITB, Ikatan Alumni, dan Rumah Amal Gerak Cepat Salurkan Bantuan untuk Korban Bencana di Sumatera",
            'gambar' => 'kegiatan1.png',
            'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
                          'tanggal' => '10 january 20026'

        ],
        [
            'id' => "kebangkitan-basket-itb-kalahkan-ipb-di-final-dan-siap-bersaing-di-divisi-1-liga-mahasiswa",
            'title' => "Kebangkitan Basket ITB: Kalahkan IPB di Final dan Siap Bersaing di Divisi 1 Liga Mahasiswa
Kebangkitan Basket ITB: Kalahkan IPB di Final dan Siap Bersaing di Divisi 1 Liga Mahasiswa",
            'gambar' => 'kegiatan2.png',
            'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
                          'tanggal' => '10 january 20026'

        ],
        [
            'id' => '16-peneliti-itb-masuk-daftar-worlds-top-2-scientists-2025',
            'title' => "16 Peneliti ITB Masuk Daftar World’s Top 2% Scientists 2025
16 Peneliti ITB Masuk Daftar World’s Top 2% Scientists 2025",
            'gambar' => 'kegiatan3.jpg',
            
            
            'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
                          'tanggal' => '10 january 20026'

        ]
    ], 'news' => [
        [
            'id' => 'ftmd-itb-dorong-pengembangan-industri-berkelanjutan-melalui-talk-show-green-materials',
        'title' => 'ITB Perkuat Pemulihan Pascabencana di Sumatra melalui Aksi Kemanusiaan dan Kolaborasi Lintas Sektor_',
            'gambar' => 'kegiatan1.png',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

        'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'itb-perkuat-pemulihan-pascabencana-di-sumatra-melalui-aksi-kemanusiaan-dan-kolaborasi-lintas-sektor',
        'title' => 'ITB Perkuat Sinergi Internal Menuju Ranking 150 Dunia dan Perguruan Tinggi Berdampak_',
                    'gambar' => 'kegiatan2.png',
                                'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

        'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'ftmd-itb-dorong-pengembangan-industri-berkelanjutan-melalui-talk-show-green-materials',
        'title' => 'FTMD ITB Dorong Pengembangan Industri Berkelanjutan melalui Talk Show Green Materials',
        'gambar' => 'kegiatan3.jpg',
                    'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

        'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'kolaborasi-itb-pemkab-kuantan-singingi-siapkan-sdm-unggul-untuk-perkuat-pembangunan-daerah-utama',
        'title' => 'Kolaborasi ITB–Pemkab Kuantan Singingi, Siapkan SDM Unggul untuk Perkuat Pembangunan Daerah
Utama',
            'gambar' => 'kegiatan3.jpg',
            'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',
        'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
        'tanggal' => '10 january 20026'
        ]
    ]
    ]);
});

Route::get('/posts/{id}', function($id){
    $posts = [
        [
            'id' => "itb-ikatan-alumni-dan-rumah-amal-gerak-cepat-salurkan-bantuan-untuk-korban-bencana-di-sumatera",
            'title' => "ITB, Ikatan Alumni, dan Rumah Amal Gerak Cepat Salurkan Bantuan untuk Korban Bencana di Sumatera",
            'gambar' => 'kegiatan1.png',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

            'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) melalui Fakultas       Teknik Mesin dan Dirgantara (FTMD) menyelenggarakan Talk Show Green Materials pada Sabtu (10/1/2026), di Aula Barat, ITB Kampus Ganesha.
                        Kegiatan ini merupakan bagian dari upaya ITB dalam mendorong pengembangan dan penerapan material ramah lingkungan sebagai respons terhadap tantangan keberlanjutan di berbagai sektor industri.
                        Talk show ini menghadirkan para pakar dari dunia industri yang berasal dari sektor pertahanan, kesehatan, kecantikan, dan energi. Kegiatan ini dirancang sebagai forum diskusi yang mempertemukan perspektif akademisi dan praktisi industri untuk membahas peran strategis green materials dalam mendukung pembangunan industri berkelanjutan di Indonesia.',
            'tanggal' => '10 january 20026'

        ],
        [
            'id' => "kebangkitan-basket-itb-kalahkan-ipb-di-final-dan-siap-bersaing-di-divisi-1-liga-mahasiswa",
            'title' => "Kebangkitan Basket ITB: Kalahkan IPB di Final dan Siap Bersaing di Divisi 1 Liga Mahasiswa
Kebangkitan Basket ITB: Kalahkan IPB di Final dan Siap Bersaing di Divisi 1 Liga Mahasiswa",
            'gambar' => 'kegiatan2.png',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                       'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
            'tanggal' => '10 january 20026'

        ],
        [
            'id' => '16-peneliti-itb-masuk-daftar-worlds-top-2-scientists-2025',
            'title' => "16 Peneliti ITB Masuk Daftar World’s Top 2% Scientists 2025
16 Peneliti ITB Masuk Daftar World’s Top 2% Scientists 2025",
            'gambar' => 'kegiatan3.jpg',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                       'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
            'tanggal' => '10 january 20026'

        ],
        [
            'id' => 'ftmd-itb-dorong-pengembangan-industri-berkelanjutan-melalui-talk-show-green-materials',
        'title' => 'ITB Perkuat Pemulihan Pascabencana di Sumatra melalui Aksi Kemanusiaan dan Kolaborasi Lintas Sektor_',
            'gambar' => 'kegiatan1.png',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                    'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'itb-perkuat-pemulihan-pascabencana-di-sumatra-melalui-aksi-kemanusiaan-dan-kolaborasi-lintas-sektor',
        'title' => 'ITB Perkuat Sinergi Internal Menuju Ranking 150 Dunia dan Perguruan Tinggi Berdampak_',
                    'gambar' => 'kegiatan2.png',
                                'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                    'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'ftmd-itb-dorong-pengembangan-industri-berkelanjutan-melalui-talk-show-green-materials',
        'title' => 'FTMD ITB Dorong Pengembangan Industri Berkelanjutan melalui Talk Show Green Materials',
        'gambar' => 'kegiatan3.jpg',
                    'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                    'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',
        'tanggal' => '10 january 20026'
        ],
        [
            'id' => 'kolaborasi-itb-pemkab-kuantan-singingi-siapkan-sdm-unggul-untuk-perkuat-pembangunan-daerah-utama',
        'title' => 'Kolaborasi ITB–Pemkab Kuantan Singingi, Siapkan SDM Unggul untuk Perkuat Pembangunan Daerah
Utama',
            'gambar' => 'kegiatan3.jpg',
                        'deskripsi_gambar' => 'Deny Willy Junaidy, Ph.D. (kiri) memasang IGW Membran Ultrafiltrasi, teknologi filtrasi air minum berbasis membran yang dapat memisahkan zat besi (Fe3+), koloid, mikroba, dan partikulat. Alat ini untuk layanan air bersih keliling di dapur-dapur umum daerah terdampak longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara.',

                   'body' => 'BANDUNG, itb.ac.id - Institut Teknologi Bandung (ITB) bersama Ikatan Alumni ITB (IA ITB) dan Rumah Amal Salman mengerahkan bantuan cepat untuk warga terdampak banjir bandang dan longsor yang melanda sejumlah wilayah di Aceh, Sumatera Barat, dan Sumatera Utara yang juga berkolaborasi dengan Pengda IA ITB Aceh, IA ITB Sumatera Barat, dan IA ITB Sumatera Utara. Gerakan ITB Peduli Sumatera ini menjadi salah satu bentuk kolaborasi untuk mempercepat respons bantuan, khususnya di wilayah yang paling terdampak.
Sejak akhir pekan lalu, berbagai bantuan mulai digulirkan. Unit filter air bantuan PT Horizon Teknologi tiba di Lanud Halim Perdanakusuma dan langsung dijadwalkan terbang ke Aceh menggunakan pesawat Hercules TNI AU pada Sabtu (29/11/2025). Perangkat itu kini dalam proses instalasi oleh tim Pengda IA ITB Aceh untuk menyediakan layanan air bersih keliling di dapur-dapur umum.

ITB juga mengerahkan inovasi teknologi untuk membantu pemenuhan kebutuhan air minum. Direktur Pengabdian Masyarakat dan Layanan Kepakaran (DPMK) ITB, Prof. Zulfiadi Zulhan pada Rabu (3/12/2025), menyampaikan pihaknya telah menyiapkan 47 unit teknologi IGW Membran Ultrafiltrasi (UF). Delapan unit UF dibawa langsung ke Aceh pada Minggu (30/11/2025) oleh Deny Willy Junaidy, Ph.D. dan tim yang sudah dijadwalkan melakukan Pengabdian Masyarakat di Bener Meriah.',   
        'tanggal' => '10 january 20026'
        ]
    ];
    $post = Arr::first($posts, function($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
