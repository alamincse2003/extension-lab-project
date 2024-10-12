@extends('frontend.layouts.main')

@section('content')
<section class="services-details-page">
      <div class="service-header">
        <a href="{{route('home')}}">Home <i class="fas fa-angle-right"></i> </a>
        <a href="{{route('services')}}">Service <i class="fas fa-angle-right"></i></a>
        <a href="{{route('service-details')}}">Services Details</a>
      </div>

      <div>
        <div class="services-details-segment">
          <div class="services-details-segment-heading">
            <h3>Pigment Concentrates, for water-based systems</h3>
          </div>
          <div class="services-details-segment-content">
            <a
              href="images/download/L-SF_2_ANTI-TERRA-250_EN.pdf"
              target="_blank"
              class="services-details-btn"
              download
            >
              pdf
            </a>
            <p>
              - Pigment concentrates for water-based systems with ANTI-TERRA-250
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection