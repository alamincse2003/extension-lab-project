@extends('frontend.layouts.main')

@section('content')
    <!--==========================
    sustainability page start
    ==============================-->
    <div class="sustainability-bg">
        <div>
            <div class="sustainability-header">
                <a href="{{'home'}}">Home <i class="fas fa-angle-right"></i> </a>
                <a href="{{route('sustainability')}}">Sustainability</a>
            </div>
        </div>
        <div>
            <div class="sustainability-title">
                <h3>sustainability@extension-lab</h3>
            </div>
        </div>
        <div class="sustainability">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sustainability-left-side">
                        <div class="sustainability-left-side-heading">
                            <h3>
                                What does sustainability mean at <span>Extension Lab</span>
                            </h3>
                        </div>
                        <div class="sustainability-left-side-content">
                            <p>
                                Sustainability is of high value at
                                <span>Extension Lab</span> and has many facets. The search for
                                alternative raw materials, the reorientation of research and
                                development towards more sustainable products, sustainability
                                in the applications of our customers, and the safest possible
                                recycling in the sense of the circular economy are also among
                                our most important topics.
                            </p>
                            <p>
                                We integrate the three dimensions of ecology, economy and
                                social commitment into all decision-making processes at
                                <span>Extension Lab</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sustainability-right-side">
                        <div class="sustainability-right-side-content">
                            <p>
                                Unfortunately, we cannot be THE solution to climate change -
                                but we can be part of the solution. With our sustainable
                                solutions, we want to create value - not only for our
                                customers, but also for our environment, our employees and
                                future generations.
                            </p>
                        </div>
                        <div class="sustainability-right-side-image">
                            <img src="" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
    sustainability page end
    ==============================-->
@endsection
