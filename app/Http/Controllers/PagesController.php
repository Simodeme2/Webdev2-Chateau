<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {

        $pageData = Page::where('id', 1)->first();

        return view('pages.home')->with(compact('pageData'));
    }
}
