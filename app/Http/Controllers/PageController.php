<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome!';
        }
        public function about() {
            return 'My name is Antonius Kaharap Kautsar and my NIM is 2341720067';
            }
            public function articles($id)   {
                return 'Page article with the id of ' + $id;
                }
}
