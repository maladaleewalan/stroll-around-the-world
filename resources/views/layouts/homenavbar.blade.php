<?php use App\Country; ?>
<nav class="navhome navbar navbar-expand-lg">
  <i class="fas fa-globe-asia icon"></i>
  <span class="fonttitle ml-2">{{config('app.name')}}</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse navhome" id="navbarNav">
    <ul class="navbar-nav  mr-auto">
    <li class="nav-item">
        <a class="nav-link Anav" href="{{route('firstpage')}}"><i class="fas fa-circle pink mr-1"></i><span class="fontnav">Home</span><span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown Anav" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-circle ml-2 mr-1 yellow"></i><span class="fontnav">TouristGuide</span></a>
          <div class="dropdown-menu">
          <?php $countries = Country::get(); ?>
            @foreach($countries as $country)
            <a class="dropdown-item Anav" href="{{route('guides.indexGuidesCountry',['id'=>$country->id])}}">{{$country->name}}</a>
            @endforeach
          </div>
        </li>
        
      <li class="nav-item">
        <a class="nav-link Anav" href="{{route('posts.index')}}"><i class="fas fa-circle ml-2 mr-1 purple"></i><span class="fontnav">Gallery</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link Anav" href="{{route('stories.index')}}"><i class="fas fa-circle ml-2 mr-1 red"></i><span class="fontnav">News</span></a>
      </li></ul>

      <!-- right -->
      <ul class="navbar-nav  ml-auto">
        @guest
        <li class="nav-item">
            <a class="nav-link Anav" href="{{ route('login') }}"><span class="fontnav"><i class="fas fa-sign-in-alt"></i>&nbsp;{{ __('Login') }}</span></a>
        </li>

        @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link Anav" href="{{ route('register') }}"><span class="fontnav"><i class="fas fa-user-plus"></i>&nbsp;{{ __('Register') }}</span></a>
          </li>
        @endif
        @else
          <li class="nav-item">
              <?php $id = Auth::user()->id ?>
              <a class="nav-link Anav" href="{{ route('users.show', ['user' => $id ]) }}"><span class="fontnav"><i class="fas fa-user-circle"></i>&nbsp;{{ Auth::user()->name }}</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link Anav" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <span class="fontnav"><i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('Logout') }}</span></a>
          
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
              </form>
          </li>

          <?php if(Auth::user()->role == "admin") {?>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link Anav dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fontnav"><i class="fas fa-cog" style="font-size:25px"></i></span></a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item Anav" href="{{route('users.index')}}">View User</a>
                    <a class="dropdown-item Anav" href="{{route('countries.create')}}">Add Country</a>
                    <a class="dropdown-item Anav" href="{{route('regions.create')}}">Add Region</a>
                  </div>
                </div>
              </li>
          <?php } ?>
          @endguest
      </ul>
  </div>
</nav>


 

