<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view( 'frontend.index' );
    }
    public function companyNews() {
        return view( 'frontend.companyNews' );
    }
    public function sustainability() {
        return view( 'frontend.sustainability' );
    }
    public function services() {
        return view( 'frontend.services' );
    }
    public function serviceDetails() {
        return view( 'frontend.serviceDetails' );
    }
    public function contact() {
        return view( 'frontend.contact' );
    }
    public function product() {
        return view( 'frontend.product' );
    }
    public function productDetails() {
        return view( 'frontend.productDetails' );
    }
    public function marketAboutDetails() {
        return view( 'frontend.marketAboutDetails' );
    }

}
