<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function company( Request $request, string $id = null ) {
        $companies = Company::get()->all();

        if ( $id ) {
            $company = Company::findOrFail( $id );
        } else {
            $company = new Company;
        }

        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $company ) ) {
                $company = new Company();
            }
            $company->name = $request->name;
            $company->designation = $request->designation;
            $company->status = $request->status;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/company/' . $company->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/company';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $company->image = $imageName;
                }
            }

            if ( !empty( $id ) ) {
                $company->update();
                return redirect( route( 'company' ) )->with( 'success', 'Update Success!!' );
            } else {
                $company->save();
                return redirect( route( 'company' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.company', compact( 'companies', 'company' ) );
    }
}
