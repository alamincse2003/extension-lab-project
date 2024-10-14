<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceDetailsController extends Controller {
    public function adminServiceDetails( Request $request, string $id = null ) {
        $services = ServiceDetails::get()->all();
        $productCategories = ProductCategory::get()->all();

        if ( $id ) {
            $service = ServiceDetails::findOrFail( $id );
        } else {
            $service = new ServiceDetails;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $service ) ) {
                $service = new ServiceDetails();
            }
            $service->productCategory_id = $request->productCategory_id;
            $service->status = $request->status;

            if ( $request->hasFile( 'pdf' ) ) {
                $exists = 'images/service/' . $service->pdf;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'pdf' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/service';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $service->pdf = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $service->update();
                return redirect( route( 'admin-service-details' ) )->with( 'success', 'Update Success!!' );
            } else {
                $service->save();
                return redirect( route( 'admin-service-details' ) )->with( 'success', 'Create Success!!' );
            }
        }
        return view( 'backend.serviceDetails', compact( 'services', 'service', 'productCategories' ) );
    }
}
