@extends('layouts.default')

@section('content')

<section id="service" class="home-section text-center bg-gray"> 
    <div class="heading-about">
        <div class="container">
            <div class="row">
            <h2>Our Services</h2>

                <div class="col-sm-4 col-md-4">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img class="th" src="img/icons/service-icon-3.png"/>
                        </div><!--end of service icon-->
                        <div class="service-desc">
                            <p id="opaco">Mobile Applications</p>
                        </div><!--service-desc-->
                    </div><!--end of service box-->
                    </div><!--end of fadeInleft-->
                </div><!--end of col-3 -->


                <div class="col-sm-4 col-md-4">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img class="th" src="img/icons/service-icon-4.png"/>
                            </div>
                            <div class="service-desc">    
                                <p id="opaco">Informative Sites</p>
                            </div>
                        </div><!--end of service-box-->
                    </div><!--end of fadeInLeft-->
                </div><!--end of col-3-->

              <div class="col-sm-4 col-md-4">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img class="th" src="img/icons/service-icon-2.png"/>
                        </div><!--end of service icon-->
                        <div class="service-desc">
                            <p id="opaco">E-commerce sites</p>
                        </div><!--service-desc-->
                    </div><!--end of service box-->
                    </div><!--end of fadeInleft-->
                </div><!--end of col-3 -->

            </div><!--row-->
        </div><!--end of container-->
    </div><!--end of heading about-->
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            
                    <div class="item active">
                        <img src="img/service_img_slider_0.jpg"/>
                        <div class="carousel-caption">We will make the WEBsite your business deserves.</div>
                    </div>
                    <div class="item">
                        <img src="img/service_img_slider_1.jpg"/>
                        <div class="carousel-caption">You need the exposure on the web, let us manage that for you.</div>
                    </div>
                <div class="item">
                    <img src="img/service_img_slider_2.jpg"/>
                    <div class="carousel-caption">You will not spend a fortune for quality, security, and reliability.</div>
                </div>
        
        </div><!--end of carousel-inner-->

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class"glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="ghlyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div><!--end of carousel-->
</div>   
</section>


@stop