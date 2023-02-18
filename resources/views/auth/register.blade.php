@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Registro')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-body">
            <div class="bmd-form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" code="code" class="form-control" placeholder="{{ __('Code...') }}" value="{{ old('code') }}" required>
              </div>
              @if ($errors->has('code'))
                <div id="code-error" class="error text-danger pl-3" for="code" style="display: block;">
                  <strong>{{ $errors->first('code') }}</strong>
                </div>
              @endif
            </div>
            <br>
            <div class="bmd-form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" code="user" class="form-control" placeholder="{{ __('Username...') }}" value="{{ old('user') }}" required>
                </div>
                @if ($errors->has('username'))
                  <div id="name-error" class="error text-danger pl-3" for="username" style="display: block;">
                    <strong>{{ $errors->first('username') }}</strong>
                  </div>
                @endif
              </div>
              <br>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="{{ __(' Real Name...') }}" value="{{ old('name') }}" required>
                </div>
                @if ($errors->has('name'))
                  <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                    <strong>{{ $errors->first('name') }}</strong>
                  </div>
                @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                </div>
                @if ($errors->has('password_confirmation'))
                  <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </div>
                @endif
              </div>
              <br>
              <div class="bmd-form-group{{ $errors->has('whatsapp') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input id="phone" style="padding-left: 132px;" type="tel" name="phone" code="whatsapp" class="form-control" placeholder="{{ __('Whatsapp...') }}" value="{{ old('Whatsapp') }}" required>
                </div>
                @if ($errors->has('code'))
                  <div id="code-error" class="error text-danger pl-3" for="code" style="display: block;">
                    <strong>{{ $errors->first('code') }}</strong>
                  </div>
                @endif
              </div>
              <br>
              <div class="form-check mr-auto ml-3 mt-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                    <span class="form-check-sign">
                    <span class="check"></span>
                    </span>
                    {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
                </label>
              </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn-primary">{{ __('Create account') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

  </script>
  <footer class="footer">
    <div class="container">
        <div class="copyright float-right" style="color: white;">
            &copy;
            <script>
              document.write('2020')
            </script>
        </div>
    </div>
</footer>
<script>
    particlesJS("particles-js", {
    "particles": {
        "number": {
        "value": 380,
        "density": {
            "enable": true,
            "value_area": 800
        }
        },
        "color": {
        "value": "#ffffff"
        },
        "shape": {
        "type": "circle",
        "stroke": {
            "width": 0,
            "color": "#000000"
        },
        "polygon": {
            "nb_sides": 5
        },
        "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
        }
        },
        "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
        }
        },
        "size": {
        "value": 3,
        "random": true,
        "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
        }
        },
        "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
        },
        "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
        }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
        "onhover": {
            "enable": true,
            "mode": "grab"
        },
        "onclick": {
            "enable": true,
            "mode": "push"
        },
        "resize": true
        },
        "modes": {
        "grab": {
            "distance": 140,
            "line_linked": {
            "opacity": 1
            }
        },
        "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
        },
        "repulse": {
            "distance": 200,
            "duration": 0.4
        },
        "push": {
            "particles_nb": 4
        },
        "remove": {
            "particles_nb": 2
        }
        }
    },
    "retina_detect": true
    });

</script>
@endsection

