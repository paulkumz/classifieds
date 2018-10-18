    
            <div class="ads-info">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="my-ads section">
    <!-- ad-item -->
                        <div class="ad-item row">
                                <!-- item-image -->
                                <div class="item-image-box col-sm-4">
                                    <div class="item-image">
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
                                    </div><!-- item-image -->
                                </div>                              
                                
                                <div class="item-info col-sm-8">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h3 class="item-price">${{ $listing->offer }}.00 <a href="#" class="tag"><i class="fa fa-tags"></i></a>{{ $listing->condition }}</h3> 
                                        <h4 class="item-title"><a href="#"><strong><a href="{{ route('listings.show', [$area, $listing]) }}">{{ $listing->title }}</a></strong>
                                              </a>
                                        </h4>
                                        <div class="item-cat">
                                            <span>Published in:<a href="#">{{ $listing->category->name }} | <span class="dated"><a href="#"><time>{{ $listing->created_at->diffForHumans() }}</time></a></span>  <span> <ul class="list-inline">
            
            <li>Last updated: <time>{{ $listing->updated_at->diffForHumans() }}</time></li>
        </ul></span> </span> 
                                           
                                        </div>                                     
                                    </div><!-- ad-info -->
                                    
                                    <!-- ad-meta -->
                                    <div class="ad-meta">
                                        <div class="meta-content">
                                             <span><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Viewed {{ $listing->views() }} times</a></span> 
                                            | <a href="#" data-toggle="tooltip" data-placement="top" title="{{ $listing->area->name }}"><i class="fa fa-map-marker"></i> </a>  </a><a href="">{{ $listing->area->name }}</a> 
                                            
                                        </div>                                      
                                        <!-- item-info-right -->
                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="{{ $listing->area->name }}"><i class="fa fa-map-marker"></i> </a>
                                            <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                                            <a class="delete-item" a href="#" onclick="event.preventDefault(); document.getElementById('listings-destroy-form-{{ $listing->id }}').submit();" data-toggle="tooltip" data-placement="top" title="Remove this ad"><i class="fa fa-times"></i></a>
                                        </div><!-- item-info-right -->
                                    </div><!-- ad-meta -->
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('listings.destroy', [$area, $listing]) }}" method="post" id="listings-destroy-form-{{ $listing->id }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>
