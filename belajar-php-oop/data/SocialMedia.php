<?php

class SocialMedia
{
    public string $name;
}

//jika final class tidak bisa diturunkan
class Facebook extends SocialMedia
{
    public final function login(string $username, string $password): bool
    {
        return true;
    }

}
class FakeFacebook extends Facebook
{
    //jika final function tidak bisa di override
    //override adalah digunakan untuk mengganti atau mengubah implementasi method yg sudah di definisikan dalam kelas induk atau parent
    //oleh class turunan atau child
    public final function login(string $username, string $password): bool
    {
        return false;
    }
}
