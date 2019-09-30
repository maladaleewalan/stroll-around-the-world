
<nav class="navhome navbar navbar-expand-lg">
  <i class="fas fa-globe-asia icon"></i>
  <span class="fonttitle ml-2">Stroll_around_the_World</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse navhome" id="navbarNav">
    <ul class="navbar-nav  mr-auto">
    <li class="nav-item">
        <a class="nav-link Anav" href="{{action('HomeController@first')}}"><i class="fas fa-circle pink mr-1"></i><span class="fontnav">Home</span><span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown Anav" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-circle ml-2 mr-1 yellow"></i><span class="fontnav">Country</span></a>
          <div class="dropdown-menu">
            <a class="dropdown-item Anav" href="{{action('ShowsController@guide')}}">Thailand</a>
            <a class="dropdown-item Anav" href="#">Korea</a>
            <a class="dropdown-item Anav" href="#">Japan</a>
            <a class="dropdown-item Anav" href="#">Italy</a>
            <a class="dropdown-item Anav" href="#">Scotland</a>
            <a class="dropdown-item Anav" href="#">Sweden</a>
          </div>
        </li>
        
      <li class="nav-item">
        <a class="nav-link Anav" href="{{action('ShowsController@gallery')}}"><i class="fas fa-circle ml-2 mr-1 green"></i><span class="fontnav">Gallery</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link Anav" href="{{action('ShowsController@guide')}}"><i class="fas fa-circle ml-2 mr-1 purple"></i><span class="fontnav">TouristGuide</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link Anav" href="{{action('ShowsController@news')}}"><i class="fas fa-circle ml-2 mr-1 red"></i><span class="fontnav">News</span></a>
      </li></ul>

      <!-- right -->
      <ul class="navbar-nav  ml-auto">
      <li class="nav-item">
        <a class="nav-link Anav" onclick="document.getElementById('login').style.display='block'"><span class="fontnav">Sign in</span></a>

       
      </li>
      <li class="nav-item">
          <a class="nav-link Anav" href="{{action('HomeController@signup')}}"><span class="fontnav">Sign up</span></a>
        </li>
      </ul>
  </div>
</nav>


 <div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
      <div class="w3-center "><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <p><i class="fas fa-user-circle iconlogin"></i></p>
      </div>

      <form class="w3-container">
        <div class="w3-section">
          <label><b class="fontlogin">Username</b></label>
          <input style="font-size:20px" class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b class="fontlogin">Password</b></label>
          <input style="font-size:20px" class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button onclick="window.location.href='{{action('UsersController@profile')}}'" class="btn btn-success buttonlogin" type="submit">Sign in</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16" style="background-color:F2D7D5">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="btn btn-danger buttonlogin">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>




