<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;

class FaqFrontController extends Controller
{
    public function index()
    {
        $faqs= faq::orderBy('created_at','desc')->paginate(4);
        return view('front.faq',compact('faqs'));
    }
}
