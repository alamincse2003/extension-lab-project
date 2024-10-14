<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller {
    public function product( Request $request, string $id = null ) {

        $products = Product::get()->all();
        $applicationCategories = ApplicationCategory::get()->all();
        $productCategories = ProductCategory::get()->all();

        if ( $id ) {
            $product = Product::findOrFail( $id );
        } else {
            $product = new Product;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $product ) ) {
                $product = new Product();
            }
            $product->name = $request->name;
            $product->short_description = $request->short_description;
            $product->first_description = $request->first_description;
            $product->second_description = $request->second_description;
            $product->applicationCategory_id = $request->applicationCategory_id;
            $product->productCategory_id = $request->productCategory_id;
            $product->status = $request->status;

            if ( $request->hasFile( 'pdf' ) ) {
                $exists = 'images/product/' . $product->pdf;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'pdf' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/product';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $product->pdf = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $product->update();
                return redirect( route( 'admin-product' ) )->with( 'success', 'Update Success!!' );
            } else {
                $product->save();
                return redirect( route( 'admin-product' ) )->with( 'success', 'Create Success!!' );
            }
        }
        return view( 'backend.product', compact( 'products', 'product', 'applicationCategories', 'productCategories' ) );
    }
}
