
<nav class="navhome navbar navbar-expand-lg">
  <i class="fas fa-globe-asia icon"></i>
  <span class="fonttitle ml-2">{{config('app.name')}}</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse navhome" id="navbarNav">
    <ul class="navbar-nav  mr-auto">
    <li class="nav-item">
        <a class="nav-link Anav" href="{{route('home')}}"><i class="fas fa-circle pink mr-1"></i><span class="fontnav">Home</span><span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown Anav" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-circle ml-2 mr-1 yellow"></i><span class="fontnav">Country</span></a>
          <div class="dropdown-menu">
            <a class="dropdown-item Anav" href="{{route('guides.index')}}">Thailand</a>
            <a class="dropdown-item Anav" href="#">Korea</a>
            <a class="dropdown-item Anav" href="#">Japan</a>
            <a class="dropdown-item Anav" href="#">Italy</a>
            <a class="dropdown-item Anav" href="#">Scotland</a>
            <a class="dropdown-item Anav" href="#">Switzerland</a>
          </div>
        </li>
        
      <li class="nav-item">
        <a class="nav-link Anav" href="{{route('posts.index')}}"><i class="fas fa-circle ml-2 mr-1 green"></i><span class="fontnav">Gallery</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link Anav" href="{{route('guides.index')}}"><i class="fas fa-circle ml-2 mr-1 purple"></i><span class="fontnav">TouristGuide</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link Anav" href="{{route('stories.index')}}"><i class="fas fa-circle ml-2 mr-1 red"></i><span class="fontnav">News</span></a>
      </li></ul>

      <!-- right -->
      <ul class="navbar-nav  ml-auto">
      <li class="nav-item">
        <a class="nav-link Anav" href="{{ route('login') }}"><span class="fontnav">Sign in</span></a>

       
      </li>
      <li class="nav-item">
          <a class="nav-link Anav" href="{{ route('register') }}"><span class="fontnav">Sign up</span></a>
        </li>
      </ul>
  </div>
</nav>


 

