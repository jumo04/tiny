@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('TINY')])

@section('content')
<div class="container"  style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto"  >
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-body">
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', 'admin@gmail.com') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn-primary">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-12 text-center">
            <a href="{{ route('register') }}" class="text-light">
                <span>{{ __('Create new account') }}</span>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="copyright float-right" style="color: white;">
            &copy;
            <script>
              document.write('2020')
            </script>
            <span style="color: white;">The purpose of this disclaimer is to inform users of the potential financial risks involved in online CFDs trading. Online CFDs trading involves a high risk and should not be undertaken until the user has carefully evaluated whether their financial situation is appropriate for such transactions. Trading may result in complete loss of funds and therefore should only be undertaken with risk capital. Any information included in this website does not constitute an offer of services for clients residing in any jurisdictions where such offer is not authorized. This website is owned by Securcap Securities Limited. The group of XLNTrade consists of Wanakena Ltd a European entity duly registered in 73 Arch. Makarios III Avenue, Office 301, 1070 Nicosia, Cyprus with registration number 379327 operating the website in conjunction with international entity Securcap Securities Limited having its operational address at Office 4, Suite C2, Orion Mall, Palm Street, Victoria, Mahe, Seyhchelles with the registration number 8416993-1 and licensed by the Seychelles
              Financial Services Authority under the license number SD012 </span>
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
