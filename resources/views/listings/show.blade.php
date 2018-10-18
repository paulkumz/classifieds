@extends('layouts.app')

@section('content')
   
    <!-- main -->
    <section id="main" class="clearfix details-page">
        <div class="container">
            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">{{ $listing->category->name}}</a></li>
             
                </ol><!-- breadcrumb -->                        
              
            </div>
                        
            <div class="section slider">                    
                <div class="row">
                    <!-- carousel -->

                    <div class="col-md-7">
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators" >
                                
                                @if($listing->images != '')
                                    @foreach($listing->images as $key => $image)
                                        
                                            <li data-target="#product-carousel" data-slide-to="{{$key}}" @if($key == 0) class="active" @endif>
                                                <img  src="{{'/storage/'.$image}}" alt="Carousel Thumb" class="image-responsive">
                                            </li>  
                                        
                                    @endforeach
                                @endif

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                @if($listing->images != '')
                                    @foreach($listing->images as $key => $image)
                                        <?php//echo $key . $image; ?>
                                        <!-- item -->
                                        <div class="item @php if($key == 0) echo 'active'; @endphp">
                                            <div class="carousel-image">
                                                <!-- image-wrapper -->
                                                <img src="{{'/storage/'.$image}}" alt="Featured Image" class="img-resp">
                                            </div>
                                        </div><!-- item -->
                                        
                                    @endforeach
                                @endif

                            </div><!-- carousel-inner -->

                            <!-- Controls -->
                            <a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a><!-- Controls -->
                        </div>
                    </div><!-- Controls --> 

                    <!-- slider-text -->
                    <div class="col-md-5">
                        <div class="slider-text">
                            <h2>${{ $listing->offer }}.00</h2>
                         <h3 class="title">{{ $listing->title }}</h3>
                            <p><span>Offered by: <a href="#">{{ $listing->user->name }}</a></span>
                            <span> Ad ID:<a href="#" class="time"> {{ $listing->id }}</a></span></p>
                            <span class="icon"><i class="fa fa-clock-o"></i><a href="#"><time>{{ $listing->created_at->diffForHumans() }}</time></a></span>
                            <span class="icon"><i class="fa fa-map-marker"></i><a href="#">{{ $listing->area->name }}</a></span>

                            <span class="icon"><i class="fa fa-suitcase online"></i><a href="#">{{ $listing->user->status }}<strong>(online)</strong></a></span>
                            
                            <!-- short-info -->
                            <div class="short-info">
                                <h4>Short Info</h4>
                                <p><strong>Condition: </strong><a href="#">{{ $listing->condition }}</a> </p>
                                <p><strong>Brand: </strong><a href="#">{{ $listing->brand }}</a> </p>
                                
                                <p><strong>Model: </strong><a href="#">{{ $listing->model }}</a></p>
                            </div><!-- short-info -->
                            
                            <!-- contact-with -->
                            <div class="contact-with">
                                <h4>Contact with </h4>
                                <span class="btn btn-red show-number">
                                    <i class="fa fa-phone-square"></i>
                                    <span class="hide-text">Click to show phone number </span> 
                                    <span class="hide-number">{{ $listing->user->phone }}</span>
                                </span>
                                <a href="#" class="btn"><i class="fa fa-envelope-square"></i>Reply by email</a>
                            </div><!-- contact-with -->
                            
                            <!-- social-links -->
                            <div class="social-links">
                                <h4>Share this ad</h4>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                                </ul>
                            </div><!-- social-links -->                     
                        </div>
                    </div><!-- slider-text -->              
                </div>              
            </div><!-- slider -->

            <div class="description-info">
                <div class="row">
                    <!-- description -->
                    <div class="col-md-8">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{{ $listing->body }}।</p>
                        </div>
                    </div><!-- description -->

                    <!-- description-short-info -->
                    <div class="col-md-4">                  
                        <div class="short-info">
                            <h4>Short Info</h4>
                            <!-- social-icon -->
                            <ul>
                                <li><i class="fa fa-shopping-cart"></i><a href="#">Delivery: Meet in person</a></li>
                                <li><i class="fa fa-user-plus"></i><a href="#">More ads by <span>{{ $listing->user->name }}</span></a></li>
                                <li><i class="fa fa-print"></i><a href="#">Print this ad</a></li>
                                <li><i class="fa fa-reply"></i><a href="#">Send to a friend</a></li>
                                <li><i class="fa fa-heart-o"></i><a href="#">Save ad as Favorite</a></li>
                                <li><i class="fa fa-exclamation-triangle"></i><a href="#">Report this ad</a></li>
                            </ul><!-- social-icon -->
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- description-info --> 
            
            <div class="recommended-info">
                <div class="row">
                    <div class="col-sm-8">              
                        <div class="section recommended-ads">
                            <div class="featured-top">
                                <h4>Recommended Ads for You</h4>
                            </div>
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <!-- item-image -->
                                <div class="item-image-box col-sm-4">
                                    <div class="item-image">
                                        <a href="details.html"><img src="/images/trending/1.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div>                              
                                
                                <div class="item-info col-sm-8">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h3 class="item-price">$800.00</h3>
                                        <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Electronics & Gedgets</a></span> /
                                            <span><a href="#">Tv & Video</a></span>
                                        </div>                                      
                                    </div><!-- ad-info -->
                                    
                                    <!-- ad-meta -->
                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
                                        </div>                                      
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->

                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="/images/trending/2.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                
                                <div class="item-info col-sm-8">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                                        <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Home Appliances</a></span> /
                                            <span><a href="#">Sofa</a></span>
                                        </div>                                      
                                    </div><!-- ad-info -->
                                    
                                    <!-- ad-meta -->
                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                            
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="/images/trending/3.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                
                                <div class="item-info col-sm-8">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                        <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Electronics & Gedgets</a></span> /
                                            <span><a href="#">Mobile Phone</a></span>
                                        </div>                                      
                                    </div><!-- ad-info -->                                  
                                                                    
                                    <!-- ad-meta -->
                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->  
                            
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="/images/trending/4.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                
                                <div class="item-info col-sm-8">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h3 class="item-price">$800.00</h3>
                                        <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Books & Magazines</a></span> /
                                            <span><a href="#">Story book</a></span>
                                        </div>                                      
                                    </div><!-- ad-info -->
                                                                        
                                    <!-- ad-meta -->
                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                        </div>
                    </div><!-- recommended-ads -->

                    <div class="col-sm-4 text-center">
                        <div class="recommended-cta">                   
                            <div class="cta">
                                <!-- single-cta -->                     
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-secure">
                                        <img src="/images/presets/preset2/13.png" alt="Icon" class="img-responsive">
                                    </div><!-- cta-icon -->

                                    <h4>Secure Trading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- single-cta -->
                                
                                <!-- single-cta -->
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-support">
                                        <img src="/images/presets/preset2/14.png" alt="Icon" class="img-responsive">
                                    </div><!-- cta-icon -->

                                    <h4>24/7 Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- single-cta -->
                            

                                <!-- single-cta -->
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-trading" >
                                        <img src="/images/presets/preset2/15.png" alt="Icon" class="img-responsive">
                                    </div><!-- cta-icon -->

                                    <h4>Easy Trading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- single-cta -->

                                <!-- single-cta -->
                                <div class="single-cta">
                                    <h5>Need Help?</h5>
                                    <p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
                                </div><!-- single-cta -->
                            </div>
                        </div><!-- cta -->
                    </div><!-- recommended-cta-->
                </div><!-- row -->
            </div><!-- recommended-info -->
        </div><!-- container -->
    </section><!-- main -->
@endsection
