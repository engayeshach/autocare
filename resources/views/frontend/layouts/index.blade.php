@extends('frontend.layouts.layout')
@section('title', 'Home || Auto Care')
@section('content')
<section class="quality-service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="service-content">
                        <div class="sec-title text-left">
                            <h2>We Providing Convinient & Quality Services</h2>
                            <span class="decor"></span>
                        </div>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerats voluptatem ut sed enim ad minima veniam, exercitationem ullams corporis uts laborioseds nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum voluptate consequatur.</p>
                        <a class="aut-cr-btn" href="">Read More</a>
                        <a class="aut-cr-btn" href="">View Services</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="service-client-carousel">
                        <div id="service-client-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <!--Start single item-->
                                <div class="item active">
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/resources/service-client/1.jpg')}}" alt="Awesome Image">
                                            <span class="line"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Swaan Richard</h3>
                                            <div class="info-box clearfix">
                                                <h6>Co Founder, BMW</h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite-1"></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>How to pursue pleasure ratiio encounter consequences thats are nor is pursues thereanyone ut who loves or or to obtain pain of itself, because ut it is pain, but because occasionally ut quaerat voluptatem ut sed enim ad minima veniam exercitationem ullam.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="item">
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/resources/service-client/1.jpg')}}" alt="Awesome Image">
                                            <span class="line"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Swaan Richard</h3>
                                            <div class="info-box clearfix">
                                                <h6>Co Founder, BMW</h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite"></span></li>
                                                        <li><span class="flaticon-favorite-1"></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>How to pursue pleasure ratiio encounter consequences thats are nor is pursues thereanyone ut who loves or or to obtain pain of itself, because ut it is pain, but because occasionally ut quaerat voluptatem ut sed enim ad minima veniam exercitationem ullam.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <div class="button">
                                    <a class="left testimonial-control" href="#service-client-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <a class="right testimonial-control" href="#service-client-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End quality service area-->
    <!--Start trusted service area-->
    <section class="trusted-service-area">
        <div class="container">
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-social"></span>
                        </div>
                        <div class="content">
                            <h3>100% Transparency</h3>
                            <p>We ensure that you get a well detailed break-up of each minor repair work</p>
                            <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-wrench"></span>
                        </div>
                        <div class="content">
                            <h3>Genuine Spare Parts</h3>
                            <p>We useuthorized genuine spare parts & accessories to ensure that your</p>
                            <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-map"></span>
                        </div>
                        <div class="content">
                            <h3>Trusted & Quality Service</h3>
                            <p>You can avail our free pickup & drop so that you can just sit & relax</p>
                            <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End trusted service area-->
    <!--Start best service area-->
    <section class="best-service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bg"></div>
                </div>
            </div>
            <div class="sec-title large-title text-center">
                <h2>Our Best Services</h2>
                <span class="decor"></span>
            </div>
            <div class="row our-best-service-items">
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/best-service/1.jpg')}}" alt="Awesome Image">
                        </div>
                        <div class="overlay">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/img/best-service/1-hover.jpg')}}" alt="Awesome Image"/>
                            </div><!-- /.img-holder -->
                            <div class="icon-holder">
                                <span class="flaticon-float"></span>
                            </div>
                            <div class="content">
                                <h3>diagnostic</h3>
                                <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title clearfix">
                            <div class="icon-holder">
                                <span class="flaticon-float"></span>
                            </div>
                            <h3>diagnostic</h3>
                            <div class="go-top-icon">
                                <a href="#"><span class="flaticon-up-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/best-service/2.jpg')}}" alt="Awesome Image">
                        </div>
                        <div class="overlay">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/img/best-service/2-hover.jpg')}}" alt="Awesome Image"/>
                            </div><!-- /.img-holder -->
                            <div class="icon-holder">
                                <span class="flaticon-car-service"></span>
                            </div>
                            <div class="content">
                                <h3>Inspection</h3>
                                <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title clearfix">
                            <div class="icon-holder">
                                <span class="flaticon-car-service"></span>
                            </div>
                            <h3>Inspection</h3>
                            <div class="go-top-icon">
                                <a href="#"><span class="flaticon-up-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-item middle">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/best-service/3.jpg')}}" alt="Awesome Image">
                        </div>
                        <div class="overlay">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/img/best-service/3-hover.jpg')}}" alt="Awesome Image"/>
                            </div><!-- /.img-holder -->
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="content">
                                <h3>Upgrades</h3>
                                <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="title clearfix">
                            <div class="icon-holder">
                                <span class="flaticon-car-service"></span>
                            </div>
                            <h3>Upgrades</h3>
                            <div class="go-top-icon">
                                <a href="#"><span class="flaticon-up-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End best service area-->
    <!--Start wheel work area-->
    <section class="wheel-work-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                    <div class="wheel-work-left">
                        <div class="title">
                            <h1>Wheel Works</h1>
                        </div>
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane fade in active" id="wheelworks">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/wheel-work/1.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            <h3>The trusted experts will to keep you safe on the road.</h3>
                                            <p>Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is there anyone who lovess or pursues or desires to obtain pain of itself, because it is pain, in which toil and pains can procure him some great pleasure ationally seds encounter works consequencees that are uts extremelly painfull pleasure rationally seds encounters consequences that are seds extremely painfull nor or pursues or desires. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Installation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Balancing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Allignment</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Changing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Refinishing</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Punchure Repair</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Straightning</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Air Filling</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                </div>
                                <div class="button">
                                    <a class="aut-cr-btn" href="#">Get Free Appoinment</a>
                                </div>
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane fade" id="airconditioner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/wheel-work/2.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            <h3>The trusted experts will to keep you safe on the road.</h3>
                                            <p>Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure rationally seds encounters consequences that are seds extremely painfull nor or pursues or desires.tionally seds that encounter consequences are ut painfull nor again is theounter workstheounter works consequencees that are uts extremelly painfull pleasure rationally seds </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Installation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Balancing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Allignment</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Changing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Refinishing</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Punchure Repair</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Straightning</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Air Filling</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                </div>
                                <div class="button">
                                    <a class="aut-cr-btn" href="#">Get Free Appoinment</a>
                                </div>
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane fade" id="painting-works">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/wheel-work/3.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            <h3>The trusted experts will to keep you safe on the road.</h3>
                                            <p>Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Installation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Balancing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Allignment</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Changing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Refinishing</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Punchure Repair</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Straightning</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Air Filling</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                </div>
                                <div class="button">
                                    <a class="aut-cr-btn" href="#">Get Free Appoinment</a>
                                </div>
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane fade" id="water-service">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/wheel-work/4.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            <h3>The trusted experts will to keep you safe on the road.</h3>
                                            <p>Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Installation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Balancing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Allignment</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Changing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Refinishing</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Punchure Repair</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Straightning</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Air Filling</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                </div>
                                <div class="button">
                                    <a class="aut-cr-btn" href="#">Get Free Appoinment</a>
                                </div>
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane fade" id="engine-works">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <img src="{{asset('frontend/assets/img/wheel-work/5.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            <h3>The trusted experts will to keep you safe on the road.</h3>
                                            <p>Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Installation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Balancing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Allignment</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Changing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Refinishing</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Punchure Repair</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                    <!--Start single list item-->
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-list-item">
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Straightning</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Wheel Air Filling</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End single list item-->
                                </div>
                                <div class="button">
                                    <a class="aut-cr-btn" href="#">Get Free Appoinment</a>
                                </div>
                            </div>
                            <!--End single tab pane-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="wheel-work-right">
                        <h1>Other Services</h1>
                        <ul>
                            <li class="active">
                                <a href="#wheelworks" data-toggle="tab">
                                    <div class="single-other-service-list">
                                        <div class="icon-holder">
                                            <span class="flaticon-icon-1283"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Wheel Works</h3>
                                            <h6>Installation & Alignment</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#airconditioner" data-toggle="tab">
                                    <div class="single-other-service-list">
                                        <div class="icon-holder">
                                            <span class="flaticon-technology-2 conditioner"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Air conditioner</h3>
                                            <h6>Services & Repair</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#painting-works" data-toggle="tab">
                                    <div class="single-other-service-list">
                                        <div class="icon-holder">
                                            <span class="flaticon-improvement"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Painting Works</h3>
                                            <h6>Infrared paint curing system</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#water-service" data-toggle="tab">
                                    <div class="single-other-service-list">
                                        <div class="icon-holder">
                                            <span class="flaticon-water-bomb-city-supplier"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Water Service</h3>
                                            <h6>Maintanence Inspection</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#engine-works" data-toggle="tab">
                                    <div class="single-other-service-list">
                                        <div class="icon-holder">
                                            <span class="flaticon-car"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Engine Works</h3>
                                            <h6>Inspection & Diagnostics</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End wheel work area-->
    <!--Start faq and gallery area-->
    <section class="faq-and-gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="faq-content-left">
                        <div class="sec-title text-left">
                            <h1>Customers FAQ’s</h1>
                            <span class="decor"></span>
                        </div>
                        <!--Start accordion box-->
                        <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    When should I get my oil changed?
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>To help ensure dependable, trouble-free performance, replace your fuel filter approximately every 30,000 miles or as recommended in your vehicle's owner's manual.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    When should I replace my car's fuel filter?
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content collapsed">
                                    <p>To help ensure dependable, trouble-free performance, replace your fuel filter approximately every 30,000 miles or as recommended in your vehicle's owner's manual.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    How often should I rotate my tires?
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>To help ensure dependable, trouble-free performance, replace your fuel filter approximately every 30,000 miles or as recommended in your vehicle's owner's manual.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                        </div>
                        <!--End accordion box-->
                        <div class="row">
                            <div class="col-md-12">
                                <a class="more-question" href="#">View More Questions<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="work-gallery-right">
                        <div class="sec-title text-left">
                            <h1>Our Work Gallery</h1>
                            <span class="decor"></span>
                        </div>
                        <div class="work-gallery-items">
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/img/work-gallery/1.jpg')}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="image-view">
                                            <div class="content">
                                                <a href="{{asset('frontend/assets/img/work-gallery/1.jpg')}}" class="fancybox"><span class="flaticon-zoom-in-button"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/img/work-gallery/2.jpg')}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="image-view">
                                            <div class="content">
                                                <a href="{{asset('frontend/assets/img/work-gallery/2.jpg')}}" class="fancybox"><span class="flaticon-zoom-in-button"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/img/work-gallery/3.jpg')}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="image-view">
                                            <div class="content">
                                                <a href="{{asset('frontend/assets/img/work-gallery/3.jpg')}}" class="fancybox"><span class="flaticon-zoom-in-button"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/img/work-gallery/4.jpg')}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="image-view">
                                            <div class="content">
                                                <a href="{{asset('frontend/assets/img/work-gallery/4.jpg')}}" class="fancybox"><span class="flaticon-zoom-in-button"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/img/work-gallery/5.jpg')}}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="image-view">
                                            <div class="content">
                                                <a href="{{asset('frontend/assets/img/work-gallery/5.jpg')}}" class="fancybox"><span class="flaticon-zoom-in-button"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End faq and gallery area-->
    <!--Start meet our Specialist area-->
    <section class="meet-our-specialist-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Meet Our Specialist</h1>
                <span class="decor"></span>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/our-specialist/1.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="content">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                            <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Jason Blackhead</h3>
                            <h6>Senior Mechanic</h6>
                            <p>Neque porro quisquam dolorem ut ipsum quia dolormet consecteture, adipisci velit, ut quia.</p>
                            <div class="mail">
                                <p><span class="flaticon-mail"></span><span class="email-text">Email:</span> blackhead@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/our-specialist/2.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="content">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                            <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Jonathan Duck</h3>
                            <h6>Board Director</h6>
                            <p>Porro quisquam dolorem ut under ipsum quia dolormet consecte sed adipisci velit labour got.</p>
                            <div class="mail">
                                <p><span class="flaticon-mail"></span><span class="email-text">Email:</span> jonathan@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/our-specialist/3.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="content">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                            <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Esther Fletcher</h3>
                            <h6>Senior Inspector</h6>
                            <p>Master quisquam dolorem ut under ipsum quia dolormet consecte sed adipisci common finance.</p>
                            <div class="mail">
                                <p><span class="flaticon-mail"></span><span class="email-text">Email:</span> esther@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/our-specialist/4.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="content">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                            <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Robert Harwing</h3>
                            <h6>Mechanic</h6>
                            <p>Services quisquam do lorems saving ipsum quia dolormet consecte price wil get in month.</p>
                            <div class="mail">
                                <p><span class="flaticon-mail"></span><span class="email-text">Email:</span> harwing@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End meet our Specialist area-->
    <!--Start our latest news area -->
    <section class="our-latest-news-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Our Latest News</h1>
                <span class="decor"></span>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/latest-news/1.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="image-view">
                                    <div class="icon-holder">
                                        <a href="blog-single.html"><span class="flaticon-cross"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a href="blog-single.html">Autobody</a></li>
                            <li><a href="blog-single.html"><span class="flaticon-speech-bubbles-comment-option"></span>6 Comments</a></li>
                        </ul>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="date">
                                    21
                                    <br> aug
                                </div>
                                <div class="comment">
                                    <p><span class="flaticon-favorite-heart-button"></span>24</p>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-single.html"><h3>Tips For Car Maintanence</h3></a>
                                <p>A lot of auto repair customerss questions the importance of wheel alignment. Is it really necessary? Yes, it is.</p>
                                <a class="readmore" href="blog-single.html">Read More<i aria-hidden="true" class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/latest-news/2.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="image-view">
                                    <div class="icon-holder">
                                        <a href="blog-single.html"><span class="flaticon-cross"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a href="blog-single.html">Mechanic</a></li>
                            <li><a href="blog-single.html"><span class="flaticon-speech-bubbles-comment-option"></span>12 Comments</a></li>
                        </ul>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="date">
                                    17
                                    <br> dec
                                </div>
                                <div class="comment">
                                    <p><span class="flaticon-favorite-heart-button"></span>18</p>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-single.html"><h3>How to Save Your Car Fuel</h3></a>
                                <p>shopping around town for the lowest gas prices, we have found a great video that gives some extra money saving tips.</p>
                                <a class="readmore" href="blog-single.html">Read More<i aria-hidden="true" class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="single-blog-post middle">
                        <div class="img-holder">
                            <img src="{{asset('frontend/assets/img/latest-news/3.jpg')}}" alt="Awesome Image">
                            <div class="overlay">
                                <div class="image-view">
                                    <div class="icon-holder">
                                        <a href="blog-single.html"><span class="flaticon-cross"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a href="blog-single.html">Autobody</a></li>
                            <li><a href="blog-single.html"><span class="flaticon-speech-bubbles-comment-option"></span>6 Comments</a></li>
                        </ul>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="date">
                                    4
                                    <br> jan
                                </div>
                                <div class="comment">
                                    <p><span class="flaticon-favorite-heart-button"></span>20</p>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-single.html"><h3>Polishing damaging area</h3></a>
                                <p>A lot of auto repair customerss questions the importance of wheel alignment. Is it really necessary? Yes, it is.</p>
                                <a class="readmore" href="blog-single.html">Read More<i aria-hidden="true" class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End our latest news area -->
    <!--Start free appoinment area-->
    <section class="free-appoinment-area">
        <div class="container">
            <form class="free-appoinment-form" action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sec-title text-left">
                            <h1>Make Free Appoinment</h1>
                            <span class="decor"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="name" placeholder="Your Name*">
                                    <div class="icon-holder">
                                        <span class="flaticon-people"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="mobile-number" placeholder="Mobile Num">
                                    <div class="icon-holder">
                                        <span class="flaticon-telephone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="email" placeholder="Email Address*">
                                    <div class="icon-holder">
                                        <span class="flaticon-note"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <textarea name="comment" placeholder="Comments..."></textarea>
                                    <div class="icon-holder comment">
                                        <span class="flaticon-social-1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="select-category">Select Category:</p>
                        <div class="category-item">
                            <input type="radio" id="indv" name="indvlcorpt" value="Individual">
                            <label for="indv">Individual</label>
                        </div>
                        <div class="category-item">
                            <input type="radio" id="corpt" name="indvlcorpt" value="Corporate">
                            <label for="corpt">Corporate</label>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                    <div class="icon-holder">
                                        <span class="flaticon-sign"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="select-field">
                                            <select name="service" class="selectpicker">
                                                <option>VolksWagen</option>
                                                <option>VolksWagen One</option>
                                                <option>VolksWagen Two</option>
                                                <option>VolksWagen Three</option>
                                            </select>
                                            <div class="icon-holder">
                                                <span class="flaticon-sign"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select-field">
                                            <select name="service" class="selectpicker">
                                                <option>Caravells</option>
                                                <option>Caravells One</option>
                                                <option>Caravells Two</option>
                                                <option>Caravells Three</option>
                                            </select>
                                            <div class="icon-holder">
                                                <span class="flaticon-transport"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="select-field bgarrowdf">
                                    <select class="selectpicker" name="service">
                                        <option>Airconditioner Checkup</option>
                                        <option>Airconditioner Checkup One</option>
                                        <option>Airconditioner Checkup Two</option>
                                        <option>Airconditioner Checkup Three</option>
                                    </select>
                                    <div class="icon-holder">
                                        <span class="flaticon-wrench"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="date" placeholder="Select Date">
                                    <div class="icon-holder">
                                        <span class="flaticon-dates"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="aut-cr-btn" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--End free appoinment area-->
    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand">
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/1.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/2.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/3.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/4.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/5.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{asset('frontend/assets/img/brand/6.png')}}" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection