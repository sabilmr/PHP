<?php

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
        case "B":
            case "C":
                echo "Anda lulus" . PHP_EOL;
                break;
                case "D":
                    echo "Anda tidak lulus" . PHP_EOL;
                    break;
                    default:
                        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}
//syntax alternatif menggunakan end switch tanpa kurung kurawal
switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
