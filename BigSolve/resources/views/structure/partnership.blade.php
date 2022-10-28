@extends('master.base')
@section('content')
    {{-- Partnership page First Section --}}

        
        {{-- partnership image --}}

        {{-- {{dd(Route::currentRouteName())}} --}}
        <div class="heroimage">
            <img src="{{asset('image/partnership.png')}}" alt="background"></a>
        </div>

        <div class="text-box" id="Home">
            <!--First Heading-->
            <h1 style="hhh" >{{__('our partnership program')}}</h1>
        </div>


    {{-- Partnership page second section --}}

    <section>
        <div class="contain">
            <div class="second-sec">
                <h1 class="head2">{{__('About Our Partnerships')}}</h1>
                <p> {{__('partnership content')}}
                </p>
                <p>{{__('partnership content1')}}</p>
              
            </div>
        </div>
    </section>
{{-- partnership section three --}}
<section>
    <div class="contain3">
        <div class="third-sec">
            <h1 class="hh">{{__('The Partnership Platform')}}</h1>
            <p class="xh"> {{__('The Partnership Platformcontent')}}
            </p>
        </div>
    </div>
    {{-- Partnership description images --}}
<div class="part-imgs">

    {{-- Image 1 --}}
    <div class="images-con">
        <div class="con3img">
            <img src="{{asset('image/connect.png')}}"  alt=""></a>
            <p>Meet and connect with individuals from <br> other organizations</p>
        </div>
       


        {{-- Image 2 --}}
        <div class="con3img">
            <img src="{{asset('image/collaborationImage.png')}}" width="300" height="300" alt=""></a>
            <p>collaborate and create new ways to <br> achieve the goal</p>
        </div>

    </div>

    <div class="con3img3">
        <img src="{{asset('image/networkImage.png')}}" width="300" height="300" alt=""></a>
        <p>Build systems and networks that strengthen <br> your value and the world's</p>
    </div>

    {{-- <div class="bmem d-flex" >
    <p>You automatically become a member on partnership.</p> <p class="reg">Register here to get started.</p>
    </div> --}}
</div>

</section>


{{-- Section Four --}}

<section>
    <div class="contain">
        <div class="fourth-sec">
            <h1 class="head2">{{__('Become a Partner')}}</h1>
            <p class="partner-fs"> {{__('Partnercontent1')}} <br>
                {{__('Partnercontent2')}}<br>
                {{__('Partnercontent3')}} <br>
                {{__('Partnercontent4')}}
               
            </p>
    </div>
</section>

{{-- Section Five  --}}
<section>


<section style="background-color: #fafafa;">
   
    <p class="form-text">{{__('fill form')}}<p>

    <div class="reg-form">
        <form  action="{{url(app()->getLocale(),'register')}}" method="POST">
        @csrf
            <input class="input-field" type="text" name="name" id="name" placeholder="Name of Organisation" required>

            <input class="input-field" type="text" name="location" id="location" placeholder="Location (citytown, country)" required><br>

            <input class="input-field" type="text" name="organization" id="organization" placeholder="Type of Organization (NGO, Academic Institution, etc...)" required>

            <input class="input-field" type="text" name="sdg" id="sdg" placeholder="SDG of interest" required><br>

            <input class="input-field" type="email" name="email" id="email" placeholder="Email Address" required>

            <input class="input-field" type="text" name="description" id="description" placeholder="A brief description of your aims and objective" required><br>

            <input class="input-field" type="text" name="strategy" id="strategy" placeholder="How do you wish to implement these methodologies?" required>
        
            <input class="input-field" type="text" name="experience" id="experience" placeholder="Companies you've worked for. if none, specify" required>

            <input class="input-field" name="projects" type="text" placeholder="Previous projects. If none, specify." required><br>

            <input class="input-field" type="password" name="password" placeholder="password" required>

            <input class="input-field" type="password" name="password_confirmation" placeholder="confirm-password" >

            <button type="submit" style="font-size:2rem; margin-top: 100px; cursor: pointer;">Submit</button>
        </form>
    </div>
</section>

@endsection