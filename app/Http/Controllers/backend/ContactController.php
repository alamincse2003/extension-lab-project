<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function adminContact( Request $request, string $id = null ) {
        $contact = Contact::first();

        if ( !$contact ) {
            $contact = new Contact();
        }

        if ( $request->isMethod( 'post' ) ) {

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->address = $request->address;
            $contact->details = $request->details;

            $contact->update();

            return redirect( route( 'admin-contact' ) )->with( 'success', 'Update Complete!!' );
        }
        return view( 'backend.contact', compact( 'contact' ) );
    }

}
