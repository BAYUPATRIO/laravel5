<?php
// Definisi class Mobil
class Mobil {
    // Properti
    public $namaMobil;
    public $tahunTerbit;

    // Constructor untuk menginisialisasi properti
    public function __construct($namaMobil, $tahunTerbit) {
        $this->namaMobil = $namaMobil;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Metode untuk mendapatkan informasi mobil
    public function getInfo() {
        return "Nama Mobil: $this->namaMobil, Tahun Terbit: $this->tahunTerbit";
    }

    // Metode untuk mengatur ulang nama mobil
    public function setNamaMobil($namaBaru) {
        $this->namaMobil = $namaBaru;
    }

    // Metode untuk mengatur ulang tahun terbit
    public function setTahunTerbit($tahunBaru) {
        $this->tahunTerbit = $tahunBaru;
    }
}

// Contoh penggunaan class Mobil
$mobil1 = new Mobil("Toyota Avanza", 2020);
echo $mobil1->getInfo(); // Output: Nama Mobil: Toyota Avanza, Tahun Terbit: 2020

// Mengubah properti mobil
$mobil1->setNamaMobil("Honda Civic");
$mobil1->setTahunTerbit(2022);
echo "<br>" . $mobil1->getInfo(); // Output: Nama Mobil: Honda Civic, Tahun Terbit: 2022
?>

        

    <?php /**PATH C:\laragon\www\laravel11\resources\views/A.blade.php ENDPATH**/ ?>