<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Barlow:600|Rasa:300,500" rel="stylesheet">
    <script src="javascript/menu.js" defer></script>
    <title>Document</title>
</head>
<body>
   


      
       
        <header class="d-flex container">
            <div class="logo">
                <a href="/"><img src="{{asset('image/logo.png')}}" ></a>

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
                          <a href="{{url('hs',Route::currentRouteName())}}">Become a Partner</a>
                          <a href="{{url('en',Route::currentRouteName())}}">About Partnership</a>
                          <a href="{{url('yu',Route::currentRouteName())}}">Partnership Programs</a>
                          <a href="{{url('yu',Route::currentRouteName())}}">Current Partners</a>
                          <a href="{{url('yu',Route::currentRouteName())}}">Login</a>
                          
                        </div>
                    </li>
                    <li class="dropdown">
                        <button class="dropbtn"><span class="font2rem">{{__('Volunteer')}}</span>
                       
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{url('hs',Route::currentRouteName())}}">{{__('Become a Volunteer')}}</a>
                            <a href="{{url('en',Route::currentRouteName())}}">{{__('About Volunteering')}}</a>
                            <a href="{{url('yu',Route::currentRouteName())}}">{{__('Volunteer Community')}}</a>
                          <a href="{{url('hs',Route::currentRouteName())}}">{{__('Available  Volunteer')}}</a>
                        
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
                    <li class="border-bottom"><a href="">{{__('Contact')}}</a></li>
                </ul>
            </nav>
                </header>

                <div class="hero-con">
                    <img src="image/HeroImage.png" alt="" srcset="">
                </div>
                
                <div class="transparent-container">
                    <div class="transparent" data-aos="fade-down"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                        <h1 class="text-animate" style="text-align:center;">Partnership for <br>the goals</h1>
                        <p class="content">{{__('Partnership content')}}</p>
                    <button class="transparent-btn"><a href="http:">Become a Partner</a></button> 
                  
                    </div>
                   
                </div>
                <div class="sdgbg">
                    <img src="image/sdg.png">
                </div>
                <div class="bg">
                    <img src="image/bg.svg">
                    <div class="about-us" id="about" 
                        data-aos="fade-down"  
                        data-aos-duration="1000"> 
                        <h1 style="text-align: center;">{{__('Who we are')}}</h1>
                        <p style="text-align:justify;line-height:1.8">{{__('About us content')}}</p>
                        <p style="margin-top:10px; text-align:justify;line-height:1.8">{{__('About us content1')}}
                        <p style="margin-top:10px; text-align:justify;line-height:1.8;">{{__('About us content2')}}
                    </div>

                </div>
                <div class="contribution-con">
                    <img src="image/contributionImage.png">
                    <div class="contribute"> 
                        <div class="row" data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out"
                        >
                        <h1 style="text-align:center;" class="center">{{__('donor')}}</h1>
                    <p>{{__('donor content')}}</p>
                        <div class="cbtn"><button class="contribute-btn">{{__('Make a Donation')}}</button></div>
                    </div>

                    <div class="row" data-aos="fade-left"    
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <h1 style="text-align:center;" class="center">{{__('volunteer')}}</h1>
                        <p>{{__('volunteer content')}}</p>
                        <div class="cbtn"><button class="contribute-btn">{{__('Make a Donation')}}</button></div>
                    </div>
                </div>


                </div>
             <div class="footer">
             <div class="col1">
                <img class="footer-logo" src="image/whitelogo.png">
             </div>
             <div class="col2">
               <h2 class="contact">Contact us</h2>
               <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
               </div>
               <div class="d-flex tele">
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
               
                
          
                
            
                @yield('content')
            

                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                  AOS.init();
                </script>
            
</body>
</html>