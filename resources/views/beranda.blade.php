@extends('layouts.app')

@section('content')
<!-- Section 'Yang kami ajarkan' (list whatweteach) -->
<section id="whatweteach">
    <div class="container">
      <h2 class="section-heading text-center">Yang Kami Ajarkan</h2>
      <br></br>
      <br></br>
      <div class="row">
        <div class="col-md-4 text-center">
          <ul class="list-inline fa-ul">
              <li><i class="fa-li fa fa-circle fa-lg" style="color:#ee591f;"></i>Lorem ipsum1</li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <ul class="list-inline fa-ul">
            <li>
              <li><i class="fa-li fa fa-circle fa-lg" style="color:#ee591f;"></i>Lorem ipsum2</li>
            </li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <ul class="list-inline fa-ul">
            <li>
              <li><i class="fa-li fa fa-circle fa-lg" style="color:#ee591f;"></i>Lorem ipsum3</li>
            </li>
          </ul>
        </div>
      </div>
  </div>
</section>

<!-- Section quotation -->
<section id="main-quotation main-quotation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-subheading text-muted">"Bebas Asap Learning adalah..."</h3>
            </div>
        </div>
    </div>
</section>


<!-- Course Section -->
<section id="course" class="bg-green">
    <div class="container">
      <div class="row">
        <div class="col-md-6 main-courses" >
            <a href="#">
              <img src="images/1.jpg" class="img-responsive img-centered" alt="">
            </a>
        </div>

        <div class="col-md-6 main-courses" >
            <a href="#">
              <img src="images/2.jpg" class="img-responsive img-centered" alt="">
            </a>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section id="quickregister" class="main-quick-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Tertarik dengan kursus bebas asap?</h2>
                <h3 class="section-subheading text-muted">Segera daftarkan diri Anda</h3>
            </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <input type="username" class="form-control" placeholder="Username" id="username" required data-validation-required-message="Silahkan mengisi username Anda terlebih dahulu.">
              <p class="help-block text-danger">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Silahkan mengisi email Anda terlebih dahulu.">
              <p class="help-block text-danger">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Silahkan mengisi password Anda terlebih dahulu.">
              <p class="help-block text-danger">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Re-enter password" id="password_confirmation" required data-validation-required-message="Silahkan mengisi password Anda terlebih dahulu.">
              <p class="help-block text-danger">
            </div>
          </div>

          <div class="clearfix"></div>
          <br></br>
          <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-xl">Ya, saya tertarik</button>
          </div>

        </div>
      </div>
</section>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
              @if (Auth::check())
                <div class="panel-body"> Udah Login </div>

              @else
              <div class="panel-heading">Register</div>

              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/quick-register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          @endif
        </div>
    </div>
    //-->
    <section id="sebelumfooter" class="bg-light-gray">
      <div class="container">
        <div class="row">

          <div class="col-md-3 text-center">
            <div class="social-media">
              <h4>Media Sosial</h4>
              <ul class="list-inline social-buttons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="sitemap">
              <h4>Sitemap</h4>
              <ul class="list-inline social-buttons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="listkursus">
              <h4>Kursus</h4>
              <ul class="list-inline social-buttons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
              </ul>
            </div>
          </div>
      <!--twitter-->
          <div class="col-md-3 text-center">
            <div class="twitterfeed">
            <h4>Feed Twitter</h4>
            <a class="twitter-timeline" href="https://twitter.com/bebasasaporg" data-widget-id="727245910187511809">Tweets by @bebasasaporg</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
        </div>
    </div>
  </section>


@endsection
