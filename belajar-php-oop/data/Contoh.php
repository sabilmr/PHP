<?php

class ParentNew
{
    public string $name;

    function sayHello()
    {
        echo "Hello parent $this->name" .PHP_EOL;
        //echo digunakan untuk mencetak output ke layar
        //$this digunakan untuk mengakses properti atau method milik object itu sendiri
        //name properti menyimpan data atau informasi yg dimiliki oleh object
    }
}

class ChildNew extends ParentNew
{

}
