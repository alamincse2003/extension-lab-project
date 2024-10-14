<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller {
    public function Banner( Request $request, string $id = null ) {
        $banners = Banner::get()->all();

        if ( $id ) {
            $banner = Banner::findOrFail( $id );
        } else {
            $banner = new Banner;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $banner ) ) {
                $banner = new Banner();
            }
            $banner->name = $request->name;
            $banner['video'] = $request->video;
            $banner->type = $request->type;
            $banner->status = $request->status;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/banner/' . $banner->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/banner';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $banner->image = $imageName;
                }
            }
            if ( $request->hasFile( 'video' ) ) {
                $exists = 'images/banner/' . $banner->video;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'video' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/banner';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $banner->video = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $banner->update();
                return redirect( route( 'banner' ) )->with( 'success', 'Update Success!!' );
            } else {
                $banner->save();
                return redirect( route( 'banner' ) )->with( 'success', 'Create Success!!' );
            }
        }
        return view( 'backend.banner', compact( 'banners', 'banner' ) );
    }
}
