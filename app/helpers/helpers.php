<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use App\Category;
use App\Blog;
use App\Slider;
use App\AboutUsHome;
use App\DonationInfomation;
use App\book_category;
use App\books;

if (!function_exists('get_all_post')) {

    function get_all_post(){
        $posts = Blog::orderBy('created_at', 'desc')->get();
        return $posts;
    }

}

if (!function_exists('get_post')) {

    function get_post(int $limit){
        $posts = Blog::orderBy('created_at', 'desc')->take($limit)->get();
        return $posts;
    }

}

if (!function_exists('get_book_by_id')) {

    function get_book_by_id($id){
        $book = books::where('id', $id)->first();
        return $book;
    }

}

if (!function_exists('get_books_by_category')) {

    function get_books_by_category($id, $limit, $not){
        $books = books::where('categories', $id)->where('id', '!=', $not)->take($limit)->get();
        return $books;
    }

}

if (!function_exists('get_post_categories')) {

    function get_post_categories(){
        $categories = Category::all();
        return $categories;
    }

}

if (!function_exists('get_books_categories')) {

    function get_books_categories(){
        $categories = book_category::all();
        return $categories;
    }

}

if (!function_exists('get_post_category_by_id')) {

    function get_post_category_by_id($id){
        $category = Category::where('id', $id)->first();
        return $category;
    }
    
}

if (!function_exists('get_book_category_by_id')) {

    function get_book_category_by_id($id){
        $category = book_category::where('id', $id)->first();
        return $category;
    }
    
}

if (!function_exists('get_posts_by_category')) {

    function get_posts_by_category($id, int $limit){
        $posts = Blog::where('category', $id)->take($limit)->get();
        return $posts;
    }
    
}

if (!function_exists('get_books_by_category')) {

    function get_books_by_category($id, int $limit){
        $books = book_category::where('category', $id)->take($limit)->get();
        return $books;
    }
    
}

if (!function_exists('get_slider')) {

    function get_slider(){
        $slider = Slider::all();
        return $slider;
    }
    
}

if (!function_exists('get_about_us_home')) {

    function get_about_us_home(){
        $aboutushome = AboutUsHome::where('id', 1)->first();
        return $aboutushome;
    }
    
}

if (!function_exists('get_info_donation')) {

    function get_info_donation(){
        $info = DonationInfomation::where('id', 1)->first();
        return $info;
    }
    
}