<!-- @extends('layouts.master');

@section('contents')

<h2>This is questions/index</h2> 
<h3>You are getting results from the Questions/index.blade.php  </h3>
  @if(count($questions)>0)

    @foreach($questions as $q)
      <div class="jumbotron">
      	    {{$q->prob}};
 </h3></div>
 @endforeach
     {{$questions->links()}}
 @endif
@endsection
 -->
