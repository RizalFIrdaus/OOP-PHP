<?php

/*
Keyword final digunakan untuk menandakan bahwa
class tersebut tidak bisa diwariskan atau di lakukan inheritance
*/

trait Data
{
    public string $name;
    public string $url;
}
interface Auth
{
    public function login(): void;
    public function register(): void;
    public function logout(): void;
}


class SocialMedia implements Auth
{
    use Data;

    public function login(): void
    {
        echo "$this->name Login Auth" . PHP_EOL;
    }

    public function register(): void
    {
        echo "$this->name Register Auth" . PHP_EOL;
    }

    public function logout(): void
    {
        echo "$this->name Logout Auth" . PHP_EOL;
    }
}

final class Facebook extends SocialMedia
{
    public function getName()
    {
        echo $this->name . PHP_EOL;
    }
    public function getUrl()
    {
        echo $this->url . PHP_EOL;
    }
}
final class Instagram extends SocialMedia
{
    public function getName()
    {
        echo $this->name . PHP_EOL;
    }
    public function getUrl()
    {
        echo $this->url . PHP_EOL;
    }
}

$facebook = new Facebook();
$facebook->name = "Facebook";
$facebook->url = "http://facebook.com";
$facebook->getName();
$facebook->getUrl();
$instagram = new Instagram();
$instagram->name = "Instagram";
$instagram->url = "http://instagram.com";
$instagram->getName();
$instagram->getUrl();
