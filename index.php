<?php 

namespace App\Math;
    class LuasLingkaran {
        public const phi = 3.14;
        private int $jari;

        public function __construct($isijari = 1) {
            $this->jari = $isijari;
        }
    
    
        public function tampil($nama = "ban") {
            $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
            echo "Lingkaran {$nama} hasilnya adalah {$rumus} cm";
        }    

        public static function testing() {
        echo '</br>';
        echo 'ini testing static';
    }

    public function __destruct() {
        echo '</br>';
        echo 'selesai';
    }
}
    
    $lingkaran = new luaslingkaran(10); 
    $lingkaran->tampil('roda'); 
    
    LuasLingkaran::testing(); 
?>
