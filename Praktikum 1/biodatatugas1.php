
<?php

// ==========================================================
// PROGRAM BIODATA MAHASISWA
// Nama  : Ridwan Odi Nugroho
// NIM   : 4524210089
// Prodi : Teknik Informatika
// ==========================================================


// ==========================================================
// BAGIAN 1: FUNGSI STATUS KELULUSAN
// Kode asli
// ==========================================================

function statusKelulusan(float $ipk): string
{
    // Jika IPK 3.50 atau lebih,
    // mahasiswa mendapat predikat Sangat Memuaskan
    if ($ipk >= 3.50) {
        return 'Sangat Memuaskan';
    }

    // Jika IPK 3.00 sampai kurang dari 3.50,
    // mahasiswa mendapat predikat Memuaskan
    if ($ipk >= 3.00) {
        return 'Memuaskan';
    }

    // Jika IPK kurang dari 3.00
    return 'Perlu Peningkatan';
}


// ==========================================================
// BAGIAN 2: DATA MAHASISWA
// MODIFIKASI 1
// ==========================================================

// Data mahasiswa disimpan dalam array.
// Data ini sudah disesuaikan dengan identitas mahasiswa.

$mahasiswa = [
    'nim' => '4524210089',
    'nama' => 'Ridwan Odi Nugroho',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.50,
];


// ==========================================================
// MODIFIKASI 2: MENAMBAHKAN FUNGSI STATUS MAHASISWA
// ==========================================================

// Fungsi ini merupakan modifikasi dari program awal.
// Fungsi digunakan untuk menentukan status mahasiswa
// berdasarkan semester yang sedang ditempuh.

function statusMahasiswa(int $semester): string
{
    // Semester 1 dan 2 dianggap sebagai mahasiswa baru
    if ($semester <= 2) {
        return 'Mahasiswa Baru';
    }

    // Semester 3 sampai 6 dianggap sebagai mahasiswa aktif
    if ($semester <= 6) {
        return 'Mahasiswa Aktif';
    }

    // Semester 7 ke atas dianggap sebagai mahasiswa tingkat akhir
    return 'Mahasiswa Tingkat Akhir';
}

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <title>Biodata Mahasiswa</title>


    <!-- ======================================================
         MODIFIKASI 3: MENAMBAHKAN CSS / STYLING
         ======================================================

         Program awal belum memiliki styling.
         CSS berikut digunakan untuk membuat tampilan
         biodata menjadi lebih rapi dan menarik.
    -->

    <style>

        /* Mengatur tampilan seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 40px;
        }

        /* Membuat kotak utama biodata */
        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;

            /* Memberikan bayangan pada kotak */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Mengatur judul agar berada di tengah */
        h1 {
            text-align: center;
        }

        /* Memberikan jarak antar data */
        li {
            margin: 10px 0;
        }

        /* Membuat bagian hasil lebih mudah dibedakan */
        .hasil {
            padding: 10px;
            background-color: #eeeeee;
            border-radius: 5px;
        }

    </style>

</head>

<body>


<div class="container">

    <h1>Biodata Mahasiswa</h1>


    <!-- ======================================================
         BAGIAN 3: MENAMPILKAN DATA MAHASISWA
         ======================================================

         Perulangan foreach digunakan agar semua data yang
         terdapat di dalam array $mahasiswa dapat ditampilkan
         secara otomatis.
    -->

    <ul>

        <?php foreach ($mahasiswa as $kunci => $nilai): ?>

            <li>

                <?= ucfirst($kunci) ?>:

                <?= htmlspecialchars((string)$nilai) ?>

            </li>

        <?php endforeach; ?>

    </ul>


    <!-- ======================================================
         BAGIAN 4: MENAMPILKAN PREDIKAT IPK
         ======================================================

         Nilai IPK mahasiswa dikirim ke fungsi
         statusKelulusan() untuk menentukan predikat.
    -->

    <div class="hasil">

        <p>
            <strong>Predikat:</strong>

            <?= htmlspecialchars(
                statusKelulusan($mahasiswa['ipk'])
            ) ?>
        </p>


        <!-- ==================================================
             MODIFIKASI 2:
             MENAMPILKAN STATUS MAHASISWA
             ==================================================

             Semester mahasiswa dikirim ke fungsi
             statusMahasiswa() untuk menentukan statusnya.
        -->

        <p>
            <strong>Status Mahasiswa:</strong>

            <?= htmlspecialchars(
                statusMahasiswa($mahasiswa['semester'])
            ) ?>
        </p>

    </div>

</div>


</body>

</html>
```
