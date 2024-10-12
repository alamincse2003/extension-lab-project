@extends('frontend.layouts.main')

@section('content')
    <div class="contact">
        <div class="contact-header">
            <a href="{{route('home')}}">Home <i class="fas fa-angle-right"></i> </a>
            <a href="{{route('contact')}}">Contact</a>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-left-side">
                    <div class="contact-left-side-heading">
                        <h3>Contact</h3>
                    </div>
                    <div class="contact-left-side-content">
                        <p>Extension Lab</p>
                        <p>House-05, Road-04</p>
                        <p>Block-03, Turag, Uttara</p>
                        <p>Dhaka-1310, Bangladesh</p>
                        <p>Mob: +8801978605540</p>
                        <p>redwan@extension-lab.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-right-side">
                    <!-- <div class="contact-right-side-image">
                        <img src="images/contact/image1.jpg" alt="img">
                    </div> -->
                    <div class="contact-right-side-content">
                        <h3>Locations & Distributors</h3>
                        <p>Do you want to contact <span>Extension Lab</span> in Germany, USA or China? Get an overview
                            of all BYK locations and distributors worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
