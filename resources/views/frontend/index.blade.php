@extends('frontend.layouts.main')

@section('content')
    <!-- =========================
            banner section start
             ========================= -->
    <div class="banner">
        <div class="row">
            <div class="col-lg-8">
                <div class="banner-left-side">
                    <div class="banner-image">
                        <img src="{{ asset('frontend') }}/assets/images/banner/image1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="banner-right-side">
                    <h3>ADDITIVE GUIDE</h3>
                    <p>
                        Discover our additives and find your suitable recommendations.
                    </p>

                    <select id="additiveSelect" class="form-control form-select" aria-label="Large select example"
                        onchange="navigateToPage(this)">
                        <option selected>SELECT APPLICATION</option>
                        {{-- <a href="{{ route('product') }}"> --}}
                            <option value="{{ route('product') }}">
                                Adhesive & Sealant
                            </option>
                        {{-- </a> --}}
                        <option value="{{ route('product') }}">Paint & Coating</option>
                        <option value="{{ route('product') }}">PVC</option>
                        <option value="{{ route('product') }}">Textiles</option>
                        <option value="{{ route('product') }}">Agriculture</option>
                        <option value="{{ route('product') }}">Construction</option>
                        <option value="{{ route('product') }}">Plastic Recycling</option>
                        <option value="{{ route('product') }}">Personal Care</option>
                    </select>
                    <br />
                    <div class="banner-right-side-divider">
                        <div class="banner-right-side-divider-line"></div>
                        <span>OR</span>
                        <div class="banner-right-side-divider-line"></div>
                    </div>

                    <br />

                    <a href="{{ route('product') }}">Show All Additives</a>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================
            banner section end
             ========================= -->

    <!-- =========================
            about section start
             ========================= -->
    <div>
        <div class="about-section">
            <div class="about-title">
                <h3>About <span>Extension Lab</span></h3>
            </div>
            <div class="about-content">
                <p>
                    <span>Extension Lab</span> is a highly regarded, privately owned
                    specialty additive company with headquarters in Abstatt, Germany. We
                    have a presence in over 40 countries and are a technology-driven
                    organization with an extensive staff of highly experienced R&D and
                    technical service personnel in Europe, the Americas and Australia.
                    Our manufacturing plants in Germany, USA, Australia, and Asia have
                    broad synthesis and formulation capabilities in order to best serve
                    our global customer base. We are committed to creating value and
                    improving our customers’ formulations with our complete range of
                    specialty additives. These additives, which include defoamers,
                    dispersants, rheology modifiers, emulsifiers, wetting and leveling
                    agents, micronized and coated waxes as well as wax dispersions and
                    emulsions have achieved worldwide recognition for their performance,
                    quality, and technical innovation.
                </p>
            </div>
        </div>
    </div>
    <!-- =========================
            about section end
             ========================= -->

    <!-- =========================
            markets section start
             ========================= -->

    <div class="market-section">
        <div class="market-title">
            <h3>Markets</h3>
        </div>

        <!-- Slider -->
        <div class="slider">
            <div>
                <div class="card">
                    <img src="{{ asset('frontend') }}/assets/images/applications/image1.jpg" class="card-img-top"
                        alt="Image 1" />
                    <div class="card-body">
                        <h5 class="card-title">Adhesive & Sealant</h5>
                        <p class="card-text">
                            Extension Lab's outstanding range of raw materials enables...
                        </p>
                        <div class="more-about-this-btn">
                            <a href="{{route('market-about-details')}}">More About This Market</a>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('product') }}">View all products <i class="fas fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="{{ asset('frontend') }}/assets/images/applications/image2.jpg" class="card-img-top"
                        alt="Image 2" />
                    <div class="card-body">
                        <h5 class="card-title">Adhesive & Sealant</h5>
                        <p class="card-text">
                            Extension Lab's outstanding range of raw materials enables...
                        </p>
                        <div class="more-about-this-btn">
                            <a href="{{route('market-about-details')}}">More About This Market</a>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('product') }}">View all products <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="{{ asset('frontend') }}/assets/images/applications/image3.jpg" class="card-img-top"
                        alt="Image 3" />
                    <div class="card-body">
                        <h5 class="card-title">Adhesive & Sealant</h5>
                        <p class="card-text">
                            Extension Lab's outstanding range of raw materials enables...
                        </p>
                        <div class="more-about-this-btn">
                            <a href="{{route('market-about-details')}}">More About This Market</a>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('product') }}">View all products <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="{{ asset('frontend') }}/assets/images/applications/image4.jpg" class="card-img-top"
                        alt="Image 4" />
                    <div class="card-body">
                        <h5 class="card-title">Adhesive & Sealant</h5>
                        <p class="card-text">
                            Extension Lab's outstanding range of raw materials enables...
                        </p>
                        <div class="more-about-this-btn">
                            <a href="{{route('market-about-details')}}">More About This Market</a>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('product') }}">View all products <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="{{ asset('frontend') }}/assets/images/applications/image4.jpg" class="card-img-top"
                        alt="Image 5" />
                    <div class="card-body">
                        <h5 class="card-title">Adhesive & Sealant</h5>
                        <p class="card-text">
                            Extension Lab's outstanding range of raw materials enables...
                        </p>
                        <div class="more-about-this-btn">
                            <a href="{{route('market-about-details')}}">More About This Market</a>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('product') }}">View all products <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================
            markets section end
             ========================= -->
@endsection
