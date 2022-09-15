<?php

namespace App\Service;

class BannerBackground
{

    public function changeBackground($route): string
    {
        switch ($route) {

            case "app_home":
                $bg_page = "build/img/banner/blog.jpg";
                break;
            case "app_contact":
                $bg_page = "build/img/banner/blog.jpg";
                break;
            case "app_create":
                $bg_page = "build/img/banner/blog.jpg";
                break;
            case "app_edit":
                $bg_page = "build/img/banner/blog.jpg";
                break;
            case "app_about":
                $bg_page = "build/img/banner/blog.jpg";
                break;
            default:
                $bg_page = "build/img/banner/blog.jpg";
                break;
        }

        return $bg_page;
    }
}
