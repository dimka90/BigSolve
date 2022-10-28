<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/partnership.css')}}">
    <link rel="stylesheet" href="{{asset('css/volunteer.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/aos@next/dist/aos.css')}}" />
    <link href="{{asset('https://fonts.googleapis.com/css?family=Barlow+Condensed|Barlow:600|Rasa:300,500" rel="stylesheet')}}">
    <script src="javascript/menu.js" defer></script>
    <title>Document</title>
</head>
<body>
   


      
       
        <header class="d-flex container">
            <div class="logo">
                <a href="{{url('/',app()->getLocale())}}"><img src="{{asset('image/logo.png')}}" ></a>

            </div>
           
              

            {{-- <div class="menu"> --}}
                <button class="menu"><img src="{{asset('image/menu.png')}}" id="image"></button>
            {{-- </div> --}}
            <nav>
                <ul class="d-flex links " data-visible="false">
                    {{-- <li><a href="" >{{__('Home')}}</a></li>
                    <li><a href="">{{__('Sdg')}}</a></li> --}}
                    <li class="dropdown">
                        <button class="dropbtn"><span class="font2rem">{{__('Partnership')}}</span>
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="{{url(url(app()->getLocale(),'partnership'),Route::currentRouteName())}}">Become a Partner</a>
                          {{-- <a href="{{url(app()->getLocale(),'partnership')}}">{{__('About Partnership')}}</a> --}}
                          {{-- <a href="{{url(app()->getLocale(),'partnership')}}">{{__('Partnership Programs')}}</a> --}}
                          <a href="{{url('current/{local}')}}">Current Partners</a>
                          
                          @auth
                              <a href="{{url('logout/{local}')}}">Logout</a>

                              @else 

                              <a href="{{url('login/{local}')}}">Login</a>
                        
                          @endauth
                        </div>
                    </li>
                    <li class="dropdown">
                        <button class="dropbtn"><span class="font2rem">{{__('Volunteer')}}</span>
                       
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{url(app()->getLocale(),'volunteer')}}">{{__('Become a Volunteer')}}</a>
                            {{-- <a href="{{url(app()->getLocale(),'volunteer')}}">{{__('About Volunteering')}}</a>
                            <a href="{{url(app()->getLocale(),'volunteer')}}">{{__('Volunteer Community')}}</a> --}}
                          <a href="{{url(app()->getLocale(),'volunteer')}}">{{__('Available  Volunteer')}}</a>
                        
                        </div>
                    </li>
                   
                    
                    <li class="dropdown">
                        <button class="dropbtn"><span class="font2rem">{{__('Language')}}</span>
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                          <a href="{{url('en',Route::currentRouteName())}}">{{__('English')}}</a>
                          <a href="{{url('hs',Route::currentRouteName())}}">{{__('Hausa')}}</a>
                          <a href="{{url('ig',Route::currentRouteName())}}">{{__('Igbo')}}</a>
                        <a href="{{url('yu',Route::currentRouteName())}}">{{__('Yoruba')}}</a>
                      
                      </div>
                    </li>
                    <li class="border-bottom"><a href="#about" class="lists">{{__('About us')}}</a></li>
                    <li class="border-bottom"><a href="#contact">{{__('Contact')}}</a></li>
                </ul>
            </nav>
                </header>

                @yield('content')
                
         
                
                <div class="footer" id="footer">
                    <div class="col1">
                    <img class="footer-logo" src="{{asset('image/whitelogo.png')}}">
                    </div>
                    <div class="col2">
                    <h2 class="contact">Contact us</h2>
                    <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="d-flex tele" id="contact">
                    <p><i class="fa-solid fa-phone"> </i><span class="lite">+234 9034234108</span> </p> 
                    <p><i class="fa-solid fa-envelope"></i><span class="lite">Bigsolve@forums.com</span></p>
                    </div>
                    </div>
                    <div class="program col3">
                    <ul>
                        <li >Resources</li>
                        <li>Comunities</li>
                        <li>Events</li>
                        <li>Donations</li>
                    </ul>
                    </div>
                    </footer>
              
            

                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                  AOS.init();
                </script>
            
</body>
</html>