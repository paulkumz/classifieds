@extends('layouts.app')


@section('content')

    <!-- myads-page -->
    <section id="main" class="clearfix myads-page">
        <div class="container">

          

            <div class="ad-profile section">    
         
            </div><!-- ad-profile -->           
            
             

        <div class="col-lg-8">         
                
  @if ($listings->count())
        @foreach ($listings as $listing)
            @include ('listings.partials._popular', compact('listing'))
        @endforeach

        {{ $listings->links() }}
    @else
        <p>You have not posted an Ad yet!.</p>
    @endif
        </div>       
       
       


            
                   
                    <!-- recommended-cta-->
                    <div class="col-sm-4 text-center">
                        <!-- recommended-cta -->
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
                                    <div class="cta-icon icon-trading">
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
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- myads-page -->
    @endsection
