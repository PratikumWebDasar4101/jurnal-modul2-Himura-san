<?php 
    $angka = $_POST['angka'];
    $genap = array();
    $ganjil = array();

    function rekursif_piramid($i, $j){
        if ($i > 0) {
            if ($j > 0) {
                echo "* ";
                $j--;
                rekursif_piramid($i, $j);
            }
            else {
                echo "<br>";
                $i--;
                rekursif_piramid($i, $i);
            }
        }
    }
    rekursif_piramid($angka, $angka);

// =============================================================================== //

    for ($i = 1; $i <= $angka ; $i++) { 
        if ( $i % 2 == 0) {
            if (count($genap) >= 0 ) {
                $index = count($genap);
            }
            $genap[$index] = $i;
        }
        else {
            if (count($ganjil) >= 0 ) {
                $index = count($ganjil);
            }
            $ganjil[$index] = $i;
        }
    }

// =============================================================================== //
    echo "<br>";
// =============================================================================== //

    echo "Genap : ";
    for ($i = 0; $i < count($genap) ; $i++) { 
        echo $genap[$i]." ";
    }

// =============================================================================== //
    echo "<br>";
// =============================================================================== //

    echo "Ganjil : ";
    for ($i = 0; $i < count($ganjil) ; $i++) { 
        echo $ganjil[$i]." ";
    }

// =============================================================================== //
    echo "<br><br>";
// =============================================================================== //

    echo "Jumlah Deret Genap : ".count($genap);
    echo "<br>";
    echo "Jumlah Deret Ganjil : ".count($ganjil);

?>
