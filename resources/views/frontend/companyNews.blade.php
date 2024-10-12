@extends('frontend.layouts.main')

@section('content')
<!-- ============================== 
    company & news page start
    ================================ -->
    <div class="antifoam-defoamers-product-finder">
      <div class="comapnyNews-header">
        <a href="{{route('home')}}">Home <i class="fas fa-angle-right"></i> </a>
        <a href="{{route('company-news')}}">Management Team</a>
      </div>

      <div class="management-team-bg">
        <div class="management-team">
          <div class="management-team-title">
            <h3>Management Team</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="management-team-items">
                <div class="management-team-items-image">
                  <img src="{{asset('frontend')}}/assets/images/company-news/image1.jpg" alt="" />
                </div>
                <div class="management-team-items-content">
                  <h2>Dr. Jörg Hinnerwisch</h2>
                  <h3>Division President</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="management-team-items">
                <div class="management-team-items-image">
                  <img src="{{asset('frontend')}}/assets/images/company-news/image2.jpg" alt="" />
                </div>
                <div class="management-team-items-content">
                  <h2>Dr. Jörg Hinnerwisch</h2>
                  <h3>Division President</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="management-team-items">
                <div class="management-team-items-image">
                  <img src="{{asset('frontend')}}/assets/images/company-news/image3.jpg" alt="" />
                </div>
                <div class="management-team-items-content">
                  <h2>Dr. Jörg Hinnerwisch</h2>
                  <h3>Division President</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="management-team-items">
                <div class="management-team-items-image">
                  <img src="{{asset('frontend')}}/assets/images/company-news/image4.jpg" alt="" />
                </div>
                <div class="management-team-items-content">
                  <h2>Dr. Jörg Hinnerwisch</h2>
                  <h3>Division President</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================== 
    company & news page end
    ================================ -->
@endsection