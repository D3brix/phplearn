<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = Post::where('category', 'world');
        dump($posts);
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = Post::where('category', 'us');
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';

        $post1 = new Post();
        $post1->title = 'Why PHP still powers a big part of the web';
        $post1->author = 'Mari Maasikas';
        $post1->category = 'tech';
        $post1->created_at = 'October 20, 2026';
        $post1->body = 'PHP has been around for almost 30 years, yet it still runs a huge share of websites. Modern PHP has types, classes, namespaces and Composer, which make it a solid choice for building web apps quickly.';

        $post2 = new Post();
        $post2->title = 'Docker makes local databases easy';
        $post2->author = 'Karl Kask';
        $post2->category = 'tech';
        $post2->created_at = 'October 18, 2026';
        $post2->body = 'Instead of installing a database server by hand, one docker-compose.yml file can start MariaDB with the right user, password and database. Every developer on the team gets the same setup with a single command.';

        $post3 = new Post();
        $post3->title = 'What a router actually does';
        $post3->author = 'Liis Lepik';
        $post3->category = 'tech';
        $post3->created_at = 'October 15, 2026';
        $post3->body = 'A router looks at the URL and the HTTP method of a request and decides which controller method should handle it. That keeps public/index.php small and puts every page in its own place.';

        $posts = [$post1, $post2, $post3];
        view('tech', compact('title', 'posts'));
    }

    public function test() {
        $db = new DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}
