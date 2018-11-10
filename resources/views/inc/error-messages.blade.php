@if(count($errors) >0 )
@foreach($error->all() as $error)
  <div class="alert alert-danger">
     {{$error}}
 </div>
     @endforeach
     @endif
     