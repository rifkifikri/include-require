<?php
    echo "<h1>Cara Requaire dan Include di PHP </h1>";
    echo "<br>","Contoh penggunaan include","<br>";
    include ('../belajar ifelse.php');//titik dua untuk meng akses file yang ada diluar satu file. 
                                    //untuk mengakses file yang ada di lain folder maka titik dua diganti dengan nama folder tersebut
    
    echo "<br>","Contoh penggunaan require","<br>";
    require ('../belajar ifelse.php');// memiliki fungsi sama degan include
?>