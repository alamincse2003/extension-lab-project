@extends('frontend.layouts.main')

@section('content')
<!--=======================
services page start
========================== -->
<div class="services">
      <div class="service-header">
        <a href="{{route('home')}}">Home <i class="fas fa-angle-right"></i> </a>
        <a href="{{route('services')}}">Service</a>
      </div>
      <div>
        <div class="service-title">
          <h3>Starting Point Formulations</h3>
        </div>
        <div class="service-content">
          <p>
            On these pages we offer starting point formulations for pigment
            concentrates for the use in Decorative Coatings, General Industrial
            Coatings, Wood and Furniture Coatings and Household, Industrial and
            Institutional Cleaners, Polishes and Laundry Detergents. If you have
            any questions or need support, please contact our experts.
          </p>
        </div>
      </div>
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <a href="{{route('service-details')}}">
            <div class="service-items">
              <div class="service-items-image">
                <img src="{{asset('frontend')}}/assets/images/service/image1.jpg" alt="" />
              </div>
              <div class="service-items-title">
                <h3>Antifoam & Defoamers</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{route('service-details')}}">
            <div class="service-items">
              <div class="service-items-image">
                <img src="{{asset('frontend')}}/assets/images/service/image2.jpg" alt="" />
              </div>
              <div class="service-items-title">
                <h3>Wetting & Dispersing Agents</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{route('service-details')}}">
            <div class="service-items">
              <div class="service-items-image">
                <img src="{{asset('frontend')}}/assets/images/service/image3.jpg" alt="" />
              </div>
              <div class="service-items-title">
                <h3>Rheology Control</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{route('service-details')}}">
            <div class="service-items">
              <div class="service-items-image">
                <img src="{{asset('frontend')}}/assets/images/service/image4.jpg" alt="" />
              </div>
              <div class="service-items-title">
                <h3>Softener</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!--========================
services page end
========================== -->
@endsection