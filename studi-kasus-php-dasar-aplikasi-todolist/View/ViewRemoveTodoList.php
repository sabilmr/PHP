<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" .PHP_EOL;

    $pilihan = input("NOMOR (X UNTUK BATALKAN)");

    if ($pilihan == "x") {
        echo "BATAL MENGHAPUS TODO" .PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "SUCCESS MENGHAPUS TODO NOMOR $pilihan" .PHP_EOL;
        } else {
            echo "GAGAL MENGHAPUS TODO NOMOR $pilihan" .PHP_EOL;
        }
    }
}
