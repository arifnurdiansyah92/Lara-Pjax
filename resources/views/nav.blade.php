<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PJAX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id="home">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item" id="about">
        <a class="nav-link" href="{{ url('/about') }}">About</a>
      </li>
  </div>
</nav>
@section("js")
<script>
	document.getElementById("{{$active}}").className = "active";
</script>
@endsection