<?php

namespace Helper;

class MathHelper
{
    //kalo akses name tidak bisa menggunakan object lagi melainkan nama classnya karna static
    static public string $name = "MathHelper";

    static public function sum(int...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
