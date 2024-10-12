<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApplicationCategoryController extends Controller {
    public function applicationCategory( Request $request, string $id = null ) {

        $applicationCategories = ApplicationCategory::get()->all();

        if ( $id ) {
            $applicationCategory = ApplicationCategory::findOrFail( $id );
        } else {
            $applicationCategory = new ApplicationCategory;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $applicationCategory ) ) {
                $applicationCategory = new ApplicationCategory();
            }
            $applicationCategory->name = $request->name;
            $applicationCategory->description = $request->description;
            $applicationCategory->status = $request->status;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/applicationCategory/' . $applicationCategory->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/applicationCategory';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $applicationCategory->image = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $applicationCategory->update();
                return redirect( route( 'application-category' ) )->with( 'success', 'Update Success!!' );
            } else {
                $applicationCategory->save();
                return redirect( route( 'application-category' ) )->with( 'success', 'Create Success!!' );
            }
        }
        return view( 'backend.applicationCategory', compact( 'applicationCategories', 'applicationCategory' ) );
    }
}
