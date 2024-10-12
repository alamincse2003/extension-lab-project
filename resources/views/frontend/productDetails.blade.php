@extends('frontend.layouts.main')

@section('content')
    <!--=======================================
                    antifoam & defoamers details page start
                ===================================== -->
    <div class="comapnyNews-header">
        <a href="{{ route('home') }}">Home <i class="fas fa-angle-right"></i> </a>
        <a href="{{ route('product-details') }}">Product Finder</a>
    </div>
    <section class="antifoam-defoamers-product-title">
        <div>
            <div class="row">
                <div class="antifoam-defoamers-product-finder-section">
                    <div class="col-8 col-md-6">
                        <nav class="antifoam-defoamers-product-heading">
                            <a href="{{ route('product-details') }}">Break-THRU<sup>®</sup> S 240</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="antifoam-defoamers-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="antifoam-defoamers-details-left-side">
                            <div class="antifoam-defoamers-details-left-side-content">
                                <div>
                                    <h1>Description</h1>
                                    <p>
                                        <span>Break-THRU<sup>®</sup> S 240</span> is a polyether
                                        trisiloxane. In aqueous solution, it imparts super
                                        spreading and dramatically reduces surface tension.
                                        Therefore the biological performance of crop protection
                                        products can be significantly enhanced by
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="fas fa-circle"></i>
                                            Superior Wetting of hydrophobic surfaces, in particular
                                            leaves and other parts of plants
                                        </li>
                                        <li>
                                            <i class="fas fa-circle"></i> Better uptake through
                                            penetration of cuticular waxes
                                        </li>
                                        <li><i class="fas fa-circle"></i> Stomatal flooding</li>
                                    </ul>
                                </div>
                                <br />
                                <div>
                                    <h1>Typical Applications</h1>
                                    <p>
                                        <span>Break-THRU<sup>®</sup> S 240</span> can be used in
                                        tank mix applications as well in formulations. Please
                                        inquire for details. For tank mixtures pesticide
                                        manufactures may suggest a rate of a non-ionic surfactant
                                        to be used with their product. Follow the corresponding
                                        lablel recommendation.
                                    </p>
                                </div>
                                <br />

                                <div>
                                    <h1>Downloads</h1>
                                    <a href="{{asset('frontend')}}/assets/images/download/L-SF_2_ANTI-TERRA-250_EN.pdf" target="_blank"
                                        class="download-btn" download>
                                        <i class="fas fa-book"></i> TDS Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="antifoam-defoamers-details-right-side">
                            <div class="contact-information">
                                <h3>Your Contact</h3>
                            </div>
                            <div class="antifoam-defoamers-details-right-side-content">
                                <div class="antifoam-defoamers-details-right-side-image">
                                    <img src="{{ asset('frontend') }}/assets/images/products/image1.png" alt="img" />
                                </div>
                                <div class="contact-information">
                                    <a href="#">Redwanul Hoque</a>
                                </div>
                            </div>
                            <div class="contact-information-email">
                                <a href="#">
                                    <span>Email</span><i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="back-btn-section">
            <div class="back-btn-container">
                <a href="{{ route('product') }}" class="back-btn"><i class="fas fa-angle-left"></i> Back</a>
            </div>
        </div>
    </section>
@endsection
