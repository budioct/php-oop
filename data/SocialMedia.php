<?php

namespace Data;

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    final public function login(string $name, string $password): bool
    {

        return true;
    }
}

// Error tidak bisa inheritance class parent karna class parent di set final
//class FakeFacebook extends Facebook
//{
    // Error tidak bisa di override function karna class parent sudah set final di function login
    //public function login(string $name, string $password): bool
    //{
    //    return true;
    //}
//}