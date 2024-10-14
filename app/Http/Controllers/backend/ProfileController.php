<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller {
    public function Profile( Request $request, string $id = null ) {

        $profile = Profile::first();

        if ( !$profile ) {
            $profile = new Profile();
        }

        if ( $request->isMethod( 'post' ) ) {

            $profile->name = $request->name;
            $profile->email = $request->email;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/profile/' . $profile->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/profile';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $profile->image = $imageName;
                }
            }

            $profile->save();

            return redirect( route( 'profile' ) )->with( 'success', 'Update Complete!!' );
        }
        return view( 'backend.profile', compact( 'profile' ) );
    }
}
