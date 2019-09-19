@extends('base.base')

@section('contenu')
<!-- Start top-post Area -->
            <section class="pt-10" xmlns:data-iview="http://www.w3.org/1999/xhtml">
				<div class="container no-padding">
					<div class="small-gutters" style="display: flex">
						<div class="col-sm-8 top-post-left">
                            <div id="iview" style="overflow: hidden">
                                <div data-iview:image="{{asset('img/slider/slider1.png')}}" data-iview:transition="slice-right-fade,slice-bottom-fade">
                                </div>
                                <div data-iview:image="{{asset('img/slider/slider2.jpg')}}" data-iview:transition="zigzag-drop-top,zigzag-drop-bottom">
                                </div>
                                <div data-iview:image="{{asset('img/slider/slider1.png')}}" data-iview:transition="strip-right-fade,strip-left-fade">
                                </div>
                                <div data-iview:image="{{asset('img/slider/slider2.jpg')}}" data-iview:transition="zigzag-drop-top,zigzag-drop-bottom">
                                </div>
                            </div>
						</div>
						<div class="col-sm-4 top-post-right">
							<div class="single-top-post">
                                <img src="{{asset('img/site/pub.png')}}" style="max-height: 290px; width: 100%;" class="img-fluid w3-right" alt="">
                            </div>
							<div class="single-top-post mt-10">

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->

            <!-- Start contact-page Area -->
            <section class=" pt-50">
				<div class="container w3-padding-16" id="theme">
                    <div class="row container" id="theme">
                        <h1 style="color: white;">Nos Produits</h1>
                    </div>
                    <hr>
                    <div class="col-sm-8">
                        <div class="w3-row-padding w3-margin-top">
                            @foreach($products as $product)
                            <div class="w3-quarter w3-margin-bottom">
                                <div class="w3-card w3-white  w3-padding-16">
                                    <img src="{{url('products/small',$product->image)}}" style="width:100%">
                                    <div class="w3-container">
                                        <h6 class="w3-center">{{$product->p_name}}</h6>
                                    </div><hr>
                                    <div class="w3-container">
                                        <div class="w3-button w3-orange w3-center" style="width: 100%">Consulter</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w3-container">
                            <img src="{{asset('img/site/pub-cat.jpg')}}" style="width: 100%" alt="">
                        </div>
                        <div class="w3-container">
                            <img src="{{asset('img/site/pub-cat.jpg')}}" style="width: 100%" alt="">
                        </div>
                    </div>
                </div>
            </section>
			<section class="contact-page-area pb-120">
				<div class="container">
					<div class="row contact-wrap">
						<div class="map-wrap" style="width:100%; height: auto;" id="map"></div>
                        <div class="col-lg-3 d-flex flex-column address-wrap"></div>
                        <div class="col-lg-1"><br></div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-left" enctype="multipart/form-data" method="post">
                                <div class="row">
									<div class="col-lg-9">
                                    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
@endsection
