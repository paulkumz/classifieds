@extends('layouts.app')

@section('edit-page-styles-scripts')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>


@endsection

@section('content')
    <!-- main -->
    <section id="main" class="clearfix ad-details-page">
        <div class="container">
        
           
            <div class="adpost-details">
                <div class="row">   
                    <div class="col-md-8">
                 <form action="{{ route('listings.store', [$area]) }}" method="post">

                            <input type="hidden" name="image_names" id="image_names">

                            <fieldset>
                                <div class="section postdetails">
                                    <h4>Sell an item or service <span class="pull-right">* Mandatory Fields</span></h4>
                                  
                                         @include('listings.partials.forms._areas')
                                        @include('listings.partials.forms._categories')
    
                                    <div class="row form-group add-title{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="ex, Iphone 6s plus brand new ">
                                        </div>
                                         @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif
                                    </div>
                                    <div class="row form-group add-image">
                                        <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
                                        <div class="col-sm-9">
                                            <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
                                            <div class="upload-section">

                                                <div class="form-group" style="margin-top:10px">
                                                    <label for="listing_image" style="text-align:center;">Upload an image with your listing</label>
                                                
                                                    <div class="form-group">
                                                        <div class="file-loading">
                                                            <input id="listing_image" type="file" name="listing_image[]" multiple class="file" data-overwrite-initial="false">
                                                        </div>
                                                    </div>
                                                </div> 

                                             {{--    <label class="upload-image" for="upload-image-one">
                                                    <input type="file" id="upload-image-one">
                                                </label>                                        

                                                <label class="upload-image" for="upload-image-two">
                                                    <input type="file" id="upload-image-two">
                                                </label>                                            
                                                <label class="upload-image" for="upload-image-three">
                                                    <input type="file" id="upload-image-three">
                                                </label>                                        

                                                <label class="upload-image" for="upload-imagefour">
                                                    <input type="file" id="upload-imagefour">
                                                </label> --}}

                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row form-group select-condition">
                                        <label class="col-sm-3">Condition<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="condition" value="new" id="new"> 
                                            <label for="new">New</label>
                                            <input type="radio" name="condition" value="used" id="used"> 
                                            <label for="used">Used</label>
                                        </div>
                                    </div>
                                    <div class="row form-group select-price{{ $errors->has('offer') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 label-title">Price<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <label>$USD</label>
                                            <input type="text" name="offer" class="form-control" id="offer">
                                            <input type="radio" name="negotiable" value="negotiable" id="negotiable">
                                            <label for="negotiable">Negotiable </label>
                                        </div>
                                        @if ($errors->has('offer'))
                                <span class="help-block">
                                    {{ $errors->first('offer') }}
                                </span>
                            @endif
                                    </div>
                                    <div class="row form-group brand-name{{ $errors->has('brand') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 label-title" for="brand">Brand Name<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="brand" id="brand" class="form-control" placeholder="ex, Samsung">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="row form-group model-name{{ $errors->has('model') ? ' has-error' : '' }}">
                                        <label for="model" class="col-sm-3 label-title">Model</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="model" class="form-control" id="model" placeholder="ex, GT5495">  
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group item-description{{ $errors->has('body') ? ' has-error' : '' }}">
                                        <label for="body" class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea name="body" class="form-control" id="body" placeholder="Write few lines about your products" rows="8"></textarea>   
                                            @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                            @endif  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <p>5000 characters left</p>
                                        </div>
                                    </div>                              
                                </div><!-- section -->
                                
                                
                                <div class="checkbox section agreement">
                                  
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div><!-- section -->
                                
                            </fieldset>
                            <div class="form-group">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>

                        {{ csrf_field() }}
                        </form><!-- form -->    
                    </div>
                

                    <!-- quick-rules -->    
                    <div class="col-md-4">
                        <div class="section quick-rules">
                            <h4>Quick rules</h4>
                            <p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

                            <ul>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                                <li>Do not put your email or phone numbers in the title or description.</li>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            </ul>
                        </div>
                    </div><!-- quick-rules -->  
                </div><!-- photos-ad -->                
            </div>  
        </div><!-- container -->
    </section><!-- main -->
    


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">

        let userId = {{ \Auth::user()->id }}
        console.log(userId);
        let listingImages = $("#listing_image");
            
        $('.remove-image').on('click', function(e){
            
            $('#removed_images').val(function(i, val) {
                return val + e.target.dataset.imagePath + '|';
            });
            $(this).parents('.item-image.item-thumbnail').remove();
            listingImages.fileinput('refresh');
        });
            
        listingImages.fileinput({
            theme: 'fa',
            uploadUrl: `/upload-image/${userId}`,
            uploadAsync: false,
            showUpload: false, // hide upload button
            showRemove: false, // hide remove button
            validateInitialCount: true,
            overwriteInitial: false,
            // minFileCount: 0,
            maxFileCount: 1,
            initialPreviewAsData: true,
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
        }).on("filebatchselected", function(event, files) {
            // console.log(event, files);
            listingImages.fileinput("upload");
        });

        // CATCH RESPONSE
        listingImages.on('filebatchuploaderror', function(event, data, previewId, index) {
            var form = data.form, files = data.files, extra = data.extra, 
            response = data.response, reader = data.reader;
        });

        listingImages.on('filebatchuploadsuccess', function(event, data, previewId, index) {
            if(data.jqXHR.responseJSON){
                response = data.jqXHR.responseJSON;
                if(data.jqXHR.responseJSON.success == true){
                    $("#image_names").val(function(i, val) {
                        return val += data.jqXHR.responseJSON.imagePaths + '|';
                    });
                }
            }
        });

    </script>

@endsection
