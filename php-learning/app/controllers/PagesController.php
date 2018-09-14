<?php

namespace App\Controllers;

class PagesController {
    public function home() {
        // Receive the request.
        // Delegate.
        // return a response.

        return view('index');
    }

    public function about() {
        // Receive the request.
        // Delegate.
        // return a response.
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    public function contact() {
        // Receive the request.
        // Delegate.
        // return a response.
        
        return view('contact');
    }
}