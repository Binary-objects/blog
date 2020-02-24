<?php

namespace App\Http\Controllers;

use App\Events\NewCustomerHasRegisterEvent;
use Illuminate\Http\Request;

/**
 * Class pagesController
 *
 * @package App\Http\Controllers
 */
class pagesController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $customer = "vikaspatel0123@gmail.com";
        event(new NewCustomerHasRegisterEvent($customer));
        return view('pages.welcome');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getContact()
    {
        return view('pages.contact');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAbout(){
        return view('pages.about');
    }
}
