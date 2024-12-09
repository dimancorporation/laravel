<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function myDeal()
    {
        return view('pages.my-deal');
    }

    public function statusDescription()
    {
        return view('pages.status-description');
    }

    public function documentList()
    {
        return view('pages.document-list');
    }

    public function offerAgreement()
    {
        return view('pages.offer-agreement');
    }

    public function payment()
    {
        return view('pages.payment');
    }
}
