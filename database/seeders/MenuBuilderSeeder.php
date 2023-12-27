<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuBuilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_menus = array(
            array(
                "id" => 1,
                "name" => "Main Menu",
                "created_at" => NULL,
                "updated_at" => "2023-11-16 04:10:52",
            ),
            array(
                "id" => 2,
                "name" => "Footer Menu One",
                "created_at" => "2023-11-16 06:32:01",
                "updated_at" => "2023-11-16 06:32:01",
            ),
            array(
                "id" => 3,
                "name" => "Footer Menu Two",
                "created_at" => "2023-11-16 06:32:48",
                "updated_at" => "2023-11-16 06:32:48",
            ),
            array(
                "id" => 4,
                "name" => "Footer Menu Three",
                "created_at" => "2023-11-16 06:33:13",
                "updated_at" => "2023-11-16 06:33:13",
            ),
        );

        $admin_menu_items = array(
            array(
                "id" => 1,
                "label" => "Home",
                "link" => "/",
                "parent_id" => 0,
                "sort" => 0,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 04:11:29",
                "updated_at" => "2023-11-16 05:15:44",
            ),
            array(
                "id" => 2,
                "label" => "About Us",
                "link" => "/about-us",
                "parent_id" => 0,
                "sort" => 3,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 05:15:22",
                "updated_at" => "2023-11-16 06:03:04",
            ),
            array(
                "id" => 3,
                "label" => "Blogs",
                "link" => "/blog",
                "parent_id" => 0,
                "sort" => 2,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 05:16:17",
                "updated_at" => "2023-11-16 06:03:08",
            ),
            array(
                "id" => 4,
                "label" => "Listings",
                "link" => "/listings",
                "parent_id" => 0,
                "sort" => 1,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 05:16:45",
                "updated_at" => "2023-11-16 06:03:08",
            ),
            array(
                "id" => 5,
                "label" => "Contact Us",
                "link" => "/contact",
                "parent_id" => 8,
                "sort" => 5,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 1,
                "created_at" => "2023-11-16 05:17:11",
                "updated_at" => "2023-11-16 06:02:41",
            ),
            array(
                "id" => 6,
                "label" => "Privacy Policy",
                "link" => "/privacy-policy",
                "parent_id" => 8,
                "sort" => 6,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 1,
                "created_at" => "2023-11-16 05:17:33",
                "updated_at" => "2023-11-16 07:27:22",
            ),
            array(
                "id" => 7,
                "label" => "Terms and Conditions",
                "link" => "/terms-and-condition",
                "parent_id" => 8,
                "sort" => 7,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 1,
                "created_at" => "2023-11-16 05:18:00",
                "updated_at" => "2023-11-16 07:08:45",
            ),
            array(
                "id" => 8,
                "label" => "Pages",
                "link" => "#",
                "parent_id" => 0,
                "sort" => 4,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 05:45:36",
                "updated_at" => "2023-11-16 06:02:35",
            ),
            array(
                "id" => 12,
                "label" => "Login",
                "link" => "/login",
                "parent_id" => 0,
                "sort" => 0,
                "class" => NULL,
                "menu_id" => 2,
                "depth" => 0,
                "created_at" => "2023-11-16 07:26:15",
                "updated_at" => "2023-11-16 07:26:35",
            ),
            array(
                "id" => 13,
                "label" => "Register",
                "link" => "/register",
                "parent_id" => 0,
                "sort" => 1,
                "class" => NULL,
                "menu_id" => 2,
                "depth" => 0,
                "created_at" => "2023-11-16 07:26:34",
                "updated_at" => "2023-11-16 07:26:50",
            ),
            array(
                "id" => 14,
                "label" => "Forget Password",
                "link" => "/forgot-password",
                "parent_id" => 0,
                "sort" => 2,
                "class" => NULL,
                "menu_id" => 2,
                "depth" => 0,
                "created_at" => "2023-11-16 07:26:50",
                "updated_at" => "2023-11-16 07:26:50",
            ),
            array(
                "id" => 15,
                "label" => "Login",
                "link" => "/login",
                "parent_id" => 0,
                "sort" => 8,
                "class" => NULL,
                "menu_id" => 1,
                "depth" => 0,
                "created_at" => "2023-11-16 07:27:21",
                "updated_at" => "2023-11-16 07:27:21",
            ),
            array(
                "id" => 16,
                "label" => "Contact Us",
                "link" => "/contact",
                "parent_id" => 0,
                "sort" => 0,
                "class" => NULL,
                "menu_id" => 3,
                "depth" => 0,
                "created_at" => "2023-11-16 09:09:27",
                "updated_at" => "2023-11-16 09:09:37",
            ),
            array(
                "id" => 17,
                "label" => "Terms and Conditions",
                "link" => "/terms-and-condition",
                "parent_id" => 0,
                "sort" => 1,
                "class" => NULL,
                "menu_id" => 3,
                "depth" => 0,
                "created_at" => "2023-11-16 09:09:36",
                "updated_at" => "2023-11-16 09:09:43",
            ),
            array(
                "id" => 18,
                "label" => "Privacy Policy",
                "link" => "/privacy-policy",
                "parent_id" => 0,
                "sort" => 3,
                "class" => NULL,
                "menu_id" => 3,
                "depth" => 0,
                "created_at" => "2023-11-16 09:09:43",
                "updated_at" => "2023-11-16 09:09:43",
            ),
            array(
                "id" => 19,
                "label" => "Blogs",
                "link" => "/blog",
                "parent_id" => 0,
                "sort" => 2,
                "class" => NULL,
                "menu_id" => 4,
                "depth" => 0,
                "created_at" => "2023-11-16 09:10:03",
                "updated_at" => "2023-11-16 09:10:26",
            ),
            array(
                "id" => 20,
                "label" => "Listings",
                "link" => "/listings",
                "parent_id" => 0,
                "sort" => 1,
                "class" => NULL,
                "menu_id" => 4,
                "depth" => 0,
                "created_at" => "2023-11-16 09:10:09",
                "updated_at" => "2023-11-16 09:10:26",
            ),
            array(
                "id" => 21,
                "label" => "Home",
                "link" => "/",
                "parent_id" => 0,
                "sort" => 0,
                "class" => NULL,
                "menu_id" => 4,
                "depth" => 0,
                "created_at" => "2023-11-16 09:10:16",
                "updated_at" => "2023-11-16 09:10:23",
            ),
        );

        \DB::table('admin_menus')->insert($admin_menus);
        \DB::table('admin_menu_items')->insert($admin_menu_items);

    }
}