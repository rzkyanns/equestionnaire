<?php

namespace App\Models;


class Post
{
    private static $blog_posts = 
        [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Rizky Annissa",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eaque cum adipisci, atque et, aliquid sint sit incidunt temporibus ullam nulla voluptatibus in aliquam provident obcaecati unde quam delectus explicabo minus suscipit! Eos error aut quia obcaecati, ratione nam sed facere dicta necessitatibus deserunt. Molestias quaerat necessitatibus, error nam veniam numquam repudiandae in? Debitis labore totam atque facere ex, laudantium repudiandae possimus praesentium! Itaque, labore mollitia deserunt deleniti nam reiciendis, quas fuga fugit odit quae, accusamus provident quibusdam! Optio, blanditiis."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Na Jaemin",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis blanditiis excepturi ab, esse molestiae ipsam accusamus tenetur quidem eos facilis ipsa dignissimos numquam cupiditate asperiores. Ipsum laudantium maxime velit, iste nihil fugiat est harum doloribus itaque repudiandae optio obcaecati sunt asperiores. Adipisci similique officiis assumenda repellendus rerum perspiciatis est sed rem quam, soluta enim quis vel atque! Voluptates voluptate officiis, cupiditate debitis sint magnam cumque harum voluptatum dicta magni amet velit quo, reiciendis ullam dolor nulla! Sint veniam quibusdam soluta dolores deserunt est illum? Hic ducimus cupiditate illum officia corrupti, odio excepturi unde quas quam modi, iusto vero, quae laudantium."
            ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
           $posts = static::all(); 
           //$post = [];
            //foreach($posts as $p) {
                //if($p["slug"] === $slug) {
                //$post = $p;
            //}
        //}

        return $posts->firstWhere('slug', $slug);
     }
}
