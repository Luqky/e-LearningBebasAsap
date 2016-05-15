@extends('layouts.main')

@section('title')
  E-Learning Bebas Asap
@endsection

@section('content')

  <section id="main-banner">
    <div class="wrapper">
      <a href="#quick-register" class="btn btn-default btn-daftar">Daftar</a>
    </div>
  </section>

  <section id="main-features">
    <div class="wrapper">
      <h3 class="title-features">Yang Kami Ajarkan</h3>
      <ul>
        <li><span class="fa fa-circle fa-btn"></span>Lorem ipsum dolor sit amet</li>
        <li><span class="fa fa-circle fa-btn"></span>Consectetur adipisicing elit</li>
        <li><span class="fa fa-circle fa-btn"></span>Sed do eiusmod tempor incididunt</li>
      </ul>
    </div>
  </section>

  <section id="main-quotation">
    <div class="wrapper">
      <div class="container">
        {{-- TODO: add background and carousel here --}}
        <div class="quotation-content">
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
          </p>
        </div>
        <div class="quotation-by">
          <p>
            - Cicero -
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="main-courses">
    <div class="wrapper">
      <div class="container">
        {{-- left course --}}
        <div class="col-md-6">
          <div class="course-preview">
            {{-- TODO: background url nanti di ganti sama url yg ada di database; sama title dan summary juga di load dari database --}}
            <div class="course-thumbnail" style="background:url('/images/sub_zero_mortal_kombat_x-t2.jpg'); background-size:cover; background-repeat:no-repeat;"></div>
            <div class="course-title">
              <h3>Cara Memakai Masker</h3>
            </div>
            <div class="course-summary">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
        {{-- right course --}}
        <div class="col-md-6">
          <div class="course-preview">
            <div class="course-thumbnail" style="background:url('/images/shutterstock_147095324.jpg'); background-size:cover; background-repeat:no-repeat;"></div>
            <div class="course-title">
              <h3>Cara Bersepeda</h3>
            </div>
            <div class="course-summary">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-quick-register">
    <div class="wrapper" id="quick-register">
      <div class="container">
        <div class="title">
          <h2>Tertarik Dengan Kursus Bebas Asap?</h2>
        </div>
        <div class="form-register">

          <form class="form-inline" action="{{url('/quick-register')}}" method="post">
            {!! csrf_field() !!}

            <div class="form-inputs">
              <div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
                <input class="form-control" type="text" name="username" value="{{old('username')}}" placeholder="Username">
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="E-mail">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input class="form-control" type="password" name="password" value="" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input class="form-control" type="password" name="password_confirmation" value="" placeholder="Re-enter Password">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-buttons">
              <input class="btn btn-default btn-daftar" type="submit" name="register" value="Ya, Saya Tertarik">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section id="main-footer">
    <div class="wrapper">
      <div class="container">
        <hr>
        <div class="col-md-3">
          <div class="media-sosial">
            <h3 class="title">Media Sosial</h3>
            <div class="content">
              <ul>
                <li><span class="fa fa-btn fa-facebook"></span></li>
                <li><span class="fa fa-btn fa-twitter"></span></li>
                <li><span class="fa fa-btn fa-google-plus"></span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sitemap">
            <h3 class="title">Sitemap</h3>
            <div class="content">
              <ul>
                <li><b>Menu 1</b>
                  <ul>
                    <li>child 1</li>
                    <li>child 2</li>
                    <li>child 3</li>
                  </ul>
                </li>
                <li><b>Menu 2</b>
                  <ul>
                    <li>child 1</li>
                    <li>child 2</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Kursus">
            <h3 class="title">Kursus</h3>
            <div class="content">
              <ul>
                <li>Course Category 1</li>
                <li>Course Category 2</li>
                <li>Course Category 3</li>
                <li>Course Category 4</li>
                <li>Course Category 5</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Feed Twitter">
            <h3 class="title">Feed Twitter</h3>
            <div class="content">
              {{-- TODO: add twitter feed here  --}}
              <a class="twitter-timeline" href="https://twitter.com/bebasasaporg" data-widget-id="727245910187511809" width="220px" height="275px" data-chrome="noheader nofooter">Tweets by @bebasasaporg</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
