@extends('layouts.app')


@section('content')

    <!-- myads-page -->
    <section id="main" class="clearfix myads-page">
        <div class="container">

            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol><!-- breadcrumb -->                        
                <h2 class="title">My Ads</h2>
            </div><!-- banner -->

            <div class="ad-profile section">    
                    <div class="user-profile">
                        <div class="user-images">
                            <img src="images/user.jpg" alt="User Images" class="img-responsive">
                        </div>
                        <div class="user">
                            <h2>Hello, <a href="#">Jhon Doe</a></h2>
                            <h5>You last logged in at: 14-01-2016 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
                        </div>

                        <div class="favorites-user">
                            <div class="my-ads">
                                <a href="my-ads.html">23<small>My ADS</small></a>
                            </div>
                            <div class="favorites">
                                <a href="#">18<small>Favorites</small></a>
                            </div>
                        </div>                              
                    </div><!-- user-profile -->
                            
                    <ul class="user-menu">
                    <li class="active" ><a href="profile">Profile</a></li>
                    <li><a href="my-ads">My ads</a></li>
                    <li><a href="favourite">Favourite ads</a></li>
                    <li><a href="archived">Archived ads </a></li>
                    <li><a href="pending">Pending approval</a></li>
                    <li><a href="close">Close account</a></li>
                    </ul>
            
            </div><!-- ad-profile -->           
            
            <div class="ads-info">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="my-ads section">
                            <h2>My ads</h2>
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <!-- item-image -->
                                <div class="item-image-box col-sm-4">
                                    <div class="item-image">
                                        <a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div>
                                
                                <!-- rending-text -->
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
                                            <span class="dated">Posted On: <a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <span class="visitors">Visitors: 221</span> 
                                        </div>                                      
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a class="edit-item" href="#" data-toggle="tooltip" data-placement="top" title="Edit this ad"><i class="fa fa-pencil"></i></a>
                                            <a class="delete-item" href="#" data-toggle="tooltip" data-placement="top" title="Delete this ad"><i class="fa fa-times"></i></a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->

                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                <!-- rending-text -->
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
                                            <span class="dated">Posted On: <a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <span class="visitors">Visitors: 221</span>
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a class="edit-item" href="#" data-toggle="tooltip" data-placement="top" title="Edit this ad"><i class="fa fa-pencil"></i></a>
                                            <a class="delete-item" href="#" data-toggle="tooltip" data-placement="top" title="Delete this ad"><i class="fa fa-times"></i></a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                            
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                <!-- rending-text -->
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
                                            <span class="dated">Posted On: <a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <span class="visitors">Visitors: 221</span> 
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a class="edit-item" href="#" data-toggle="tooltip" data-placement="top" title="Edit this ad"><i class="fa fa-pencil"></i></a>
                                            <a class="delete-item" href="#" data-toggle="tooltip" data-placement="top" title="Delete this ad"><i class="fa fa-times"></i></a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->  
                            
                            <!-- ad-item -->
                            <div class="ad-item row">
                                <div class="item-image-box col-sm-4">
                                    <!-- item-image -->
                                    <div class="item-image">
                                        <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div><!-- item-image-box -->
                                
                                <!-- rending-text -->
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
                                            <span class="dated">Posted On: <a href="#">7 Jan, 16  10:10 pm </a></span>
                                            <span class="visitors">Visitors: 221</span> 
                                        </div>                                  
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a class="edit-item" href="#" data-toggle="tooltip" data-placement="top" title="Edit this ad"><i class="fa fa-pencil"></i></a>
                                            <a class="delete-item" href="#" data-toggle="tooltip" data-placement="top" title="Delete this ad"><i class="fa fa-times"></i></a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                        </div>
                    </div><!-- my-ads -->

                    <!-- recommended-cta-->
                    <div class="col-sm-4 text-center">
                        <!-- recommended-cta -->
                        <div class="recommended-cta">                   
                            <div class="cta">
                                <!-- single-cta -->                     
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-secure">
                                        <img src="images/icon/13.png" alt="Icon" class="img-responsive">
                                    </div><!-- cta-icon -->

                                    <h4>Secure Trading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- single-cta -->
                                

                                <!-- single-cta -->
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-support">
                                        <img src="images/icon/14.png" alt="Icon" class="img-responsive">
                                    </div><!-- cta-icon -->

                                    <h4>24/7 Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div><!-- single-cta -->
                            

                                <!-- single-cta -->
                                <div class="single-cta">
                                    <!-- cta-icon -->
                                    <div class="cta-icon icon-trading">
                                        <img src="images/icon/15.png" alt="Icon" class="img-responsive">
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
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- myads-page -->
    
    @endsection