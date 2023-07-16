<?php

class Looping {

    function looping($repeat)
    {
        $hasil = [];
        for ($i=1; $i <= $repeat; $i++) {
            //menghitung jumlah bage concat
            $count = array_count_values($hasil);
            $two_bc = 0;
            if(array_key_exists("Bage Concat", $count)) {
                $two_bc = $count["Bage Concat"];
            }

            if($two_bc == 5) {
                //jika bage concate = 5
                break;
            } elseif($two_bc >= 2) {
                //jika bage concate >= 2
                if($i % 5 == 0 && $i % 3 == 0) {
                    array_push($hasil, "Bage Concat");
                } elseif($i % 5 == 0) {
                    array_push($hasil, "Bage");
                } elseif($i % 3 == 0) {
                    if(end($hasil) == "Bage") {
                        $hasil[array_key_last($hasil)] = "Bage Concat";
                    } else {
                        array_push($hasil, "Concat");
                    }
                }
            } else {
                //jika bage concat < 2
                if($i % 5 == 0 && $i % 3 == 0) {
                    array_push($hasil, "Bage Concat");
                } elseif($i % 5 == 0) {
                    if(end($hasil) == "Bage") {
                        $hasil[array_key_last($hasil)] = "Bage Concat";
                    } else {
                        array_push($hasil, "Concat");
                    }
                } elseif($i % 3 == 0) {
                    array_push($hasil, "Bage");
                }
            }
        }

        return $hasil;
    }
}

?>