<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductCategoryController extends Controller {
    public function productCategory( Request $request, string $id = null ) {
        $productCategories = ProductCategory::get()->all();

        if ( $id ) {
            $productCategory = ProductCategory::findOrFail( $id );
        } else {
            $productCategory = new ProductCategory;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $productCategory ) ) {
                $productCategory = new ProductCategory();
            }
            $productCategory->name = $request->name;
            $productCategory->status = $request->status;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/productCategory/' . $productCategory->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/productCategory';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $productCategory->image = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $productCategory->update();
                return redirect( route( 'product-category' ) )->with( 'success', 'Update Success!!' );
            } else {
                $productCategory->save();
                return redirect( route( 'product-category' ) )->with( 'success', 'Create Success!!' );
            }
        }
        return view( 'backend.productCategory',compact('productCategories','productCategory') );
    }
}
