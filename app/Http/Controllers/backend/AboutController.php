<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function adminAbout( Request $request, string $id = null ) {
        $about = About::first();

        if ( !$about ) {
            $about = new About();
        }

        if ( $request->isMethod( 'post' ) ) {

            $about->description = $request->description;

            $about->save();

            return redirect( route( 'admin-about' ) )->with( 'success', 'Update Complete!!' );
        }
        return view( 'backend.about', compact( 'about' ) );
    }

}
