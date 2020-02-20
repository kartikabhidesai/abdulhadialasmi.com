<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {

    function __construct() {
        
    }

    public function blog() {
        $data['title'] = "Dana - Blog";
        $data['meta'] = "Dana - Blog";
        $data['js'] = array(
        );
        $data['js_plugin'] = array(
        );
        $data['css'] = array(
        );
        $data['css_plugin'] = array(
        );
        $data['init'] = array(
        );
        return view('frontend.pages.blog.blog',$data);
    }

}
