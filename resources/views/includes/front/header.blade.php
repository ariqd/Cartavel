<!-- Frontend Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Cartavel') }}</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('products.list', 'all')}}">All Products</a></li>
            @foreach ($categories as $category)
                <li><a href="{{route('products.list', $category->slug)}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route('blog.index')}}">Blog</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i>&nbsp;Cart ({{ Cart::count() }})</a></li>
        @if (Auth::check())
          <li class="dropdown">
              <button
              class="dropdown-toggle btn btn-primary navbar-btn"
              data-toggle="dropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false">
              {{ (strlen(Auth::user()->name) > 30) ? substr(Auth::user()->name, 0, 30).'...' : Auth::user()->name }}
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Hello</a></li>
                @if (Auth::user()->isAdmin())
                  <li><a href="{{url('/admin')}}">Admin Page</a></li>
                @endif
                <li><a href="{{url('logout')}}">Logout</a></li>
              </ul>
            </li>
        @else
          <li class="dropdown dropdown-login">
            <a href="#" class="dropdown-toggle"
            data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Login <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-login-menu">
              <form role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email"
                    value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>
                    @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password"
                    placeholder="Password" required>
                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                        Remember Me
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                      Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                      Forgot Your Password?
                    </a>
                  </div>

              </form>
            </div>
          </li>

          <a href="{{ url('/register') }}" class="btn btn-primary navbar-btn">Register</a>
        @endif
      </ul>
      <form class="navbar-form navbar-right hidden-sm">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div><!-- /input-group -->
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Messages -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @include('messages.success')
      @include('messages.errors')
    </div>
  </div>
</div>
