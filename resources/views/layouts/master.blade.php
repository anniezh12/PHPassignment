<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
  
  <!--     <script>
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': {!! json_encode(csrf_token()) !!},
        }
    });
});
</script> -->

	<title>This is master layout file for all the pages</title>
	<link rel="stylesheet" href="/css/app.css">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/rocketimg.png" width=30em height=30em></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dfd">DFD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sol">TEST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">BLOG</a>
      </li>
    </ul>
  </div>
</nav>

</head>
<body>
	<div class="container">
	
    @yield('contents')
     
  </div>
  <footer id="footer" class="text-center">
  	@copyrights Aniqa Elahi
  </footer>

</body>
</html>