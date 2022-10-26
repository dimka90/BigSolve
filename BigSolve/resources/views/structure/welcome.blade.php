@extends('master.base')

@section('content')
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

@endsection