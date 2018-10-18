


<div class="panel panel-default">
   <div class="panel-body">
  
   <div class="row">
    @foreach ($areas as $country)

      <div class="col-md-12">
          <h3><a href="{{ route('user.area.store', $country) }}"> {{ $country->name }}</a></h3>
          <hr>
   
      </div>
      @endforeach
    </div>
   </div>

  </div>





