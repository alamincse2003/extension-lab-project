<?php

namespace App\Http\Controllers;

use App\Models\Sustainability;
use Illuminate\Http\Request;

class SustainabilityController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function adminSustainability( Request $request, string $id = null ) {

        $sustainability = Sustainability::first();

        if ( !$sustainability ) {
            $sustainability = new Sustainability(); 
        }

        if ( $request->isMethod( 'post' ) ) {

            $sustainability->title = $request->title;
            $sustainability->first_content = $request->first_content;
            $sustainability->second_content = $request->second_content;

            $sustainability->save();

            return redirect( route( 'admin-sustainability' ) )->with( 'success', 'Update Complete!!' );
        }
        return view( 'backend.adminSustainability', compact( 'sustainability' ) );
    }

}
