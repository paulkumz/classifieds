@extends('layouts.app')

@section('content')
    <section id="main" class="clearfix ad-details-page">
        <div class="container">
        
           
            <div class="adpost-details">
                <div class="row">   
                    <div class="col-md-8">
                    Continue editing listing
                    @if ($listing->live())
                        <span class="pull-right"><a href="{{ route('listings.show', [$area, $listing]) }}">Go to listing</a></span>
                    @endif
                </div>
                <div class="panel-body">
                    <form action="{{ route('listings.update', [$area, $listing]) }}" method="post">
                        
                        <input type="hidden" name="image_names" id="image_names" value="{{ implode("|", $listing->images) . '|'}}">

                        @include('listings.partials.forms._areas')
                        @include('listings.partials.forms._categories')

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $listing->title }}">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="control-label">Body</label>
                            <textarea name="body" id="body" cols="30" rows="8" class="form-control">{{ $listing->body }}</textarea>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-default">Save</button>

                            @if (!$listing->live())
                                <button type="submit" name="payment" value="true" class="btn btn-primary pull-right">Continue to payment</button>
                            @endif
                        </div>

                        @if ($listing->live())
                            <input type="hidden" name="category_id" value="{{ $listing->category_id }}">
                        @endif

                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                    </form>
                </div>

                @if($listing->images != '')
                    @foreach($listing->images as $key => $image)
                        
                            <div data-target="#product-carousel" data-slide-to="{{$key}}" @if($key == 0) class="active" @endif style="width:30%;height:30%;">
                                
                                <img src="{{'/storage/'.$image}}" alt="Carousel Thumb" class="img-responsive">
                                <button class="remove-image" data-button-function="remove" data-image-id={{$image}}>Remove Image</button>
                            
                            </div>  
                        
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <script>
        let removeImagesBtns = document.querySelectorAll('.remove-image');
        let imageNames = document.querySelector('#image_names');

        removeImagesBtns.forEach(function(item){
            item.addEventListener('click', removeImage, false);
        });

        function removeImage(e){
            if(e.target.dataset.buttonFunction === 'remove'){
                e.target.textContent = 'Add Image';
                e.target.dataset.buttonFunction = 'add';
                imageNames.value = (imageNames.value).replace(e.target.dataset.imageId, '');
            }else{
                e.target.textContent = 'Remove Image';
                e.target.dataset.buttonFunction = 'remove';
                imageNames.value += e.target.dataset.imageId + '|';
            }
        }
    </script>

@endsection
