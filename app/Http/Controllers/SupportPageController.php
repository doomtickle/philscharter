<?php

namespace App\Http\Controllers;

class SupportPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('StaticPages.support',compact('page','content'));
    }
}
