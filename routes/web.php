<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ApplicationCategoryController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ProductCategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\ServiceDetailsController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\SustainabilityController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );
Route::get( '/company-news', [HomeController::class, 'companyNews'] )->name( 'company-news' );
Route::get( '/sustainability', [HomeController::class, 'sustainability'] )->name( 'sustainability' );
Route::get( '/services', [HomeController::class, 'services'] )->name( 'services' );
Route::get( '/service-details', [HomeController::class, 'serviceDetails'] )->name( 'service-details' );
Route::get( '/contact', [HomeController::class, 'contact'] )->name( 'contact' );
Route::get( '/product', [HomeController::class, 'product'] )->name( 'product' );
Route::get( '/product-details', [HomeController::class, 'productDetails'] )->name( 'product-details' );
Route::get( '/market-about-details', [HomeController::class, 'marketAboutDetails'] )->name( 'market-about-details' );

// Backend

Route::prefix( 'admin' )->group( function () {
    Route::get( 'dashboard', [AdminController::class, 'index'] )->name( 'admin.dashboard' );

    Route::match( ['get', 'post'], 'banner/{id?}', [BannerController::class, 'Banner'] )->name( 'banner' );

    Route::match( ['get', 'post'], 'admin-about/{id?}', [AboutController::class, 'adminAbout'] )->name( 'admin-about' );

    Route::match( ['get', 'post'], 'company/{id?}', [CompanyController::class, 'company'] )->name( 'company' );

    Route::match( ['get', 'post'], 'admin-sustainability/{id?}', [SustainabilityController::class, 'adminSustainability'] )->name( 'admin-sustainability' );

    Route::match( ['get', 'post'], 'admin-contact/{id?}', [ContactController::class, 'adminContact'] )->name( 'admin-contact' );

    Route::match( ['get', 'post'], 'application-category/{id?}', [ApplicationCategoryController::class, 'applicationCategory'] )->name( 'application-category' );

    Route::match( ['get', 'post'], 'product-category/{id?}', [ProductCategoryController::class, 'productCategory'] )->name( 'product-category' );
    
    
    Route::match( ['get', 'post'], 'admin-product/{id?}', [ProductController::class, 'product'] )->name( 'admin-product' );

    
    Route::match( ['get', 'post'], 'admin-service-details/{id?}', [ServiceDetailsController::class, 'adminServiceDetails'] )->name( 'admin-service-details' );

    Route::match( ['get', 'post'], 'profile/{id?}', [ProfileController::class, 'Profile'] )->name( 'profile' );

    Route::match( ['get', 'post'], 'setting/{id?}', [SettingController::class, 'setting'] )->name( 'setting' );

} );

// API
