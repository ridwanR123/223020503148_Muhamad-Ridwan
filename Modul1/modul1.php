<?php include('../Modul1/top.php') ?>
<body>
    

    <?php
    // Variabel array untuk menyimpan nama-nama anggota keluarga
    $nama_keluarga = array("Bebas aja", "Thomas", "Evan");

    // Fungsi untuk menghitung jumlah kata
    function hitungJumlahKata($nama) {
        return str_word_count($nama);
    }

    // Fungsi untuk menghitung jumlah huruf
    function hitungJumlahHuruf($nama) {
        return strlen($nama);
    }

    // Fungsi untuk mengembalikan kebalikan dari sebuah string
    function kebalikanNama($nama) {
        return strrev($nama);
    }

    // Fungsi untuk menghitung jumlah konsonan
    function hitungJumlahKonsonan($nama) {
        $konsonan = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $nama, $matches);
        return $konsonan;
    }

    // Fungsi untuk menghitung jumlah vokal
    function hitungJumlahVokal($nama) {
        $vokal = preg_match_all('/[aeiou]/i', $nama, $matches);
        return $vokal;
    }

    // Looping untuk setiap nama anggota keluarga

    
    ?>
<?php foreach ($nama_keluarga as $nama): ?>
    <div style="border: 1px solid black; padding: 10px; margin-bottom: 20px;">
        <h3>Nama: <?php echo $nama; ?></h3>
        <p>Jumlah kata: <?php echo hitungJumlahKata($nama); ?></p>
        <p>Jumlah huruf: <?php echo hitungJumlahHuruf($nama); ?></p>
        <p>Kebalikan nama: <?php echo kebalikanNama($nama); ?></p>
        <p>Jumlah konsonan: <?php echo hitungJumlahKonsonan($nama); ?></p>
        <p>Jumlah vokal: <?php echo hitungJumlahVokal($nama); ?></p>
    </div>
<?php endforeach; ?>
</body>

  
</html>
