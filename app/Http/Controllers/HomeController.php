<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    //
    function __construct() {
        
    }

    public function home(Request $request) {
        
        $data['title']="Dana - Home";
        $data['meta']="Dana - Home";
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
        return view('frontend.pages.home', $data);
    }

}
