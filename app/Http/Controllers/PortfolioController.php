<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Andika Aji Pratama Putra',
            'headline' => 'Mekanik Alat Berat',
            'summary' => 'Mekanik alat berat dengan pengalaman di industri manufaktur dan pertambangan, berfokus pada preventive maintenance, troubleshooting, serta perbaikan unit HD785-7.',
            'about' => [
                'Saya adalah mekanik alat berat dengan pengalaman di industri manufaktur dan pertambangan, termasuk di PT Pamapersada Nusantara. Memiliki keahlian dalam preventive maintenance, troubleshooting, serta perbaikan unit alat berat, khususnya HD785-7.',
                'Terbiasa bekerja sesuai standar operasional prosedur (SOP) dan keselamatan kerja (K3) untuk menjaga performa unit tetap optimal serta meminimalkan downtime operasional.',
                'Didukung oleh pengalaman di bidang perakitan (assembly) dan quality control di industri manufaktur, serta pengemasan produk dengan standar kualitas tinggi, saya memiliki ketelitian, disiplin, dan kemampuan kerja tim yang baik.',
            ],
            'skills' => [
                'Teknis' => [
                    'Preventive Maintenance',
                    'Troubleshooting',
                    'Perbaikan Mesin',
                    'Quality Control',
                    'Assembly',
                    'HD785-7',
                ],
                'Operasional' => [
                    'K3',
                    '5R/5S',
                    'Inspeksi Unit',
                    'Pelaporan Kerja',
                ],
                'Soft Skills' => [
                    'Teamwork',
                    'Disiplin',
                    'Teliti',
                    'Manajemen Waktu',
                    'Problem Solving',
                ],
                'Bahasa' => [
                    'Bahasa Indonesia',
                    'English Language',
                ],
            ],
            'experiences' => [
                [
                    'company' => 'PT Pamapersada Nusantara',
                    'location' => 'Kalimantan',
                    'period' => 'Jan 2025 - Apr 2026',
                    'role' => 'Mekanik',
                    'description' => 'Bertanggung jawab dalam perawatan, perbaikan, dan pemeriksaan alat berat untuk memastikan kinerja optimal serta mendukung kelancaran operasional di area kerja.',
                    'highlights' => [
                        'Melakukan perawatan berkala (preventive maintenance) pada alat berat sesuai jadwal yang ditentukan.',
                        'Melakukan diagnosa dan perbaikan (troubleshooting) terhadap kerusakan mesin maupun sistem pendukung.',
                        'Melakukan pengecekan kondisi unit sebelum dan sesudah operasional untuk memastikan kelayakan penggunaan.',
                        'Mengganti dan memperbaiki komponen yang mengalami kerusakan atau keausan.',
                        'Mencatat hasil pemeriksaan dan perbaikan dalam laporan kerja harian.',
                        'Memastikan pekerjaan dilakukan sesuai dengan standar keselamatan kerja (K3).',
                    ],
                ],
                [
                    'company' => 'PT Paragon Technology and Innovation (ParagonCorp)',
                    'location' => 'Tangerang',
                    'period' => 'Agu 2024 - Okt 2024',
                    'role' => 'Paacking (Magang)',
                    'description' => 'Berperan dalam proses pengemasan produk kosmetik dengan memastikan ketepatan, kerapihan, dan kesesuaian dengan standar kualitas perusahaan sebelum didistribusikan.',
                    'highlights' => [
                        'Melakukan proses pengemasan produk sesuai dengan standar operasional prosedur (SOP) yang berlaku.',
                        'Memastikan kelengkapan dan kesesuaian produk sebelum dilakukan pengemasan.',
                        'Melakukan pengecekan kualitas kemasan agar tidak terdapat cacat atau kerusakan.',
                        'Menyusun dan menata produk hasil packing agar siap untuk proses distribusi.',
                        'Menjaga kebersihan dan kerapihan area kerja sesuai dengan standar 5R/5S.',
                    ],
                ],
                [
                    'company' => 'PT Yamaha Motor Manufacturing Indonesia',
                    'location' => 'Jakarta',
                    'period' => 'Nov 2019 - Nov 2023',
                    'role' => 'Assembling',
                    'description' => 'Bertanggung jawab dalam proses perakitan komponen sepeda motor serta memastikan kualitas produk sesuai standar perusahaan melalui prosedur produksi yang telah ditetapkan.',
                    'highlights' => [
                        'Melakukan proses perakitan (assembly) komponen sepeda motor sesuai dengan SOP yang berlaku.',
                        'Melakukan pengecekan kualitas (quality control) terhadap komponen sebelum dan sesudah proses perakitan.',
                        'Mengidentifikasi dan mencatat produk atau komponen yang tidak memenuhi standar kualitas (reject) untuk ditindaklanjuti.',
                        'Memastikan setiap produk yang dihasilkan sesuai dengan standar kualitas perusahaan.',
                        'Menyiapkan dan memastikan ketersediaan part agar proses produksi berjalan lancar.',
                    ],
                ],
            ],
            'education' => [
                [
                    'school' => 'SMK N 2 Bawang',
                    'major' => 'Teknik Elektronika Industri',
                    'period' => '2016 - 2019',
                    'location' => null,
                ],
                [
                    'school' => 'SMP N 1 Punggelan',
                    'major' => null,
                    'period' => '2013 - 2016',
                    'location' => 'Punggelan',
                ],
                [
                    'school' => 'SD N 1 Punggelan',
                    'major' => null,
                    'period' => '2007 - 2013',
                    'location' => 'Punggelan',
                ],
            ],
            'projects' => [
                [
                    'title' => 'Project Placeholder',
                    'description' => 'CV tidak mencantumkan project secara spesifik. Bagian ini disiapkan sebagai placeholder agar mudah diganti ketika project ingin ditambahkan.',
                    'stack' => ['Editable', 'Portfolio Section'],
                ],
            ],
            'certificates' => [
                [
                    'title' => 'Training Best Mechanic Course',
                    'issuer' => 'Pamapersada Nusantara',
                    'period' => 'Jan - Mar 2025',
                    'description' => 'Pelatihan intensif terkait dasar-dasar mekanik alat berat, teknik perawatan, serta peningkatan keterampilan troubleshooting.',
                ],
                [
                    'title' => 'Training Preventive Maintenance HD785-7',
                    'issuer' => 'Pamapersada Nusantara',
                    'period' => 'Sep 2025',
                    'description' => 'Mempelajari prosedur perawatan berkala pada unit HD785-7 untuk menjaga performa dan mencegah kerusakan.',
                ],
                [
                    'title' => 'Product Training HD785-7',
                    'issuer' => 'Pamapersada Nusantara',
                    'period' => 'Jan 2026',
                    'description' => 'Mendalami spesifikasi, sistem kerja, dan pengoperasian unit HD785-7 guna meningkatkan pemahaman teknis terhadap alat berat.',
                ],
            ],
            'organizations' => [
                [
                    'name' => 'Pramuka',
                    'role' => 'Anggota',
                    'location' => 'Purwokerto',
                    'period' => '2013 - 2019',
                ],
                [
                    'name' => 'Karang Taruna',
                    'role' => 'Bendahara',
                    'location' => 'Purwokerto',
                    'period' => '2013 - 2019',
                ],
            ],
            'contact' => [
                'email' => 'andikaajipratama3@gmail.com',
                'phone' => '085868921525',
                'instagram' => 'https://www.instagram.com/andikaajipratamaputra?utm_source=qr&igsh=MWtveHlpNnMxa3Fzcw==',
            ],
            'seo' => [
                'title' => 'Andika Aji Pratama Putra | Mekanik Alat Berat',
                'description' => 'Portofolio personal Andika Aji Pratama Putra, mekanik alat berat dengan pengalaman di manufaktur dan pertambangan.',
            ],
        ];

        return view('portfolio.index', compact('portfolio'));
    }

    public function contact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ]);

        Log::info('Portfolio contact message', $validated);

        return back()->with('success', 'Pesan berhasil dikirim. Detail pesan disimpan ke log aplikasi.');
    }

    public function downloadCv(): BinaryFileResponse
    {
        $path = 'd:\\KULIAH\\sertifikat\\CV andika.docx';

        abort_unless(file_exists($path), 404);

        return response()->download($path, 'CV-Andika-Aji-Pratama-Putra.docx');
    }
}
