<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
		[
			"title" => "judul post pertama",
			"slug" => "judul-post-pertama",
			"author" => "adit",
			"body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, unde laborum? Quas impedit delectus vel esse, vitae odit asperiores error, facere ducimus, magni saepe. Ratione eius at iusto illum laboriosam nam libero dignissimos sed, vitae iste dolorum, autem eligendi consequatur inventore omnis ex quisquam? Sequi, accusamus labore est ipsum atque amet adipisci voluptatibus, suscipit similique fuga magnam nostrum. At aut eum incidunt, consectetur quisquam quam reprehenderit. Vel molestias repellendus in fugiat voluptates perferendis, amet saepe sequi, deleniti, omnis odit fuga nemo ipsum minus quis expedita! A voluptatum dolor esse iure"
		],
		[
			"title" => "judul post kedua",
			"slug" => "judul-post-kedua",
			"author" => "adiyt",
			"body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, unde laborum? Quas impedit delectus vel esse, vitae odit asperiores error, facere ducimus, magni saepe. Ratione eius at iusto illum laboriosam nam libero dignissimos sed, vitae iste dolorum, autem eligendi consequatur inventore omnis ex quisquam? Sequi, accusamus labore est ipsum atque amet adipisci voluptatibus, suscipit similique fuga magnam nostrum. At aut eum incidunt, consectetur quisquam quam reprehenderit. Vel molestias repellendus in fugiat voluptates perferendis, amet saepe sequi, deleniti, omnis odit fuga nemo ipsum minus quis expedita! A voluptatum dolor esse iure"
		],
		];
    public static function all() {
        return collect(self::$blog_post);
    }
    public static function find($slug) {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }    
}
