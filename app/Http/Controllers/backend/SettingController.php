<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller {
    public function setting( Request $request, string $id = null ) {
        $setting = Setting::first();

        if ( !$setting ) {
            $setting = new Setting();
        }

        if ( $request->isMethod( 'post' ) ) {

            $setting->linkedin = $request->linkedin;
            $setting->youtube = $request->youtube;
            $setting->instagram = $request->instagram;
            $setting->facebook = $request->facebook;
            $setting->tiktok = $request->tiktok;
            $setting->wechat = $request->wechat;

            if ( $request->hasFile( 'logo' ) ) {
                $exists = 'images/setting/' . $setting->logo;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'logo' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/setting';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $setting->logo = $imageName;
                }
            }
            
            $setting->save();

            return redirect( route( 'setting' ) )->with( 'success', 'Update Complete!!' );
        }
        return view( 'backend.setting', compact( 'setting' ) );
    }
}
