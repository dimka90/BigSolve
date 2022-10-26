@extends('master.base')
@section('content')
    {{-- Partnership page First Section --}}
    <section class="header">

        
        {{-- partnership image --}}

        <div class="heroimage">
            <img src="{{asset('image/partnership.png')}}" width="100%" height="100%" alt="background"></a>
        </div>

        <div class="text-box" id="Home">
            <!--First Heading-->
            <h1>OUR PARTNERSHIPS</h1>
        </div>

    </section>

    {{-- Partnership page second section --}}

    <section>
        <div class="contain">
            <div class="second-sec">
                <h1 class="head2">About Our Partnerships</h1>
                <p> Our Partnerships are the key to success. We work with individuals as well as local,
                    national, and global organizations and companies with like minds and interests to
                    provide helpand resources to those in need of them. We serve as the bridge that connects
                    these individuals to our partners that are in good grounds to make the difference they seek.
                </p>
                <p> We are always open to new partners to join us on our journey to make a difference in the world.</p>
               <p>  Want to join our community of partners? Click <a href="">here</a> to get started</p>
            </div>
        </div>
    </section>
{{-- partnership section three --}}
<section>
    <div class="contain3">
        <div class="third-sec">
            <h1 class="head2">The Partnership Platform</h1>
            <p> The partnership platform is a society created for our partners to interact, strategize,
                and collaborate to achieve a goal in line with one or all of the SDGs.
            </p>
        </div>
    </div>
    {{-- Partnership description images --}}
<div class="part-imgs">

    {{-- Image 1 --}}
    <div class="images-con">
        <div class="con3img">
            <img src="{{asset('image/connect.png')}}" width="300" height="300" alt=""></a>
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
            <h1 class="head2">Become A Partner</h1>
            <p> Our team of professionals carry out background checks on every aspiring partner. This is to <br>
                enable us verify the integrity of each partner.<br>
                At the end of five business days from time of registration, emails will be sent to aspiring <br>
                partners as regards registration status.
            </p>
    </div>
</section>

{{-- Section Five  --}}
<section>
<div class="contain5">
    <h2>Fill the form below to register</h2>
        <form action="">
                <input type="text" placeholder="Name of Organisation">
                <input type="text" placeholder="Location (citytown, country)"> <br>
                <input type="text" placeholder="Type of Organization (NGO, Academic Institution, etc...)">
                <input type="text" placeholder="SDG of interest"><br>
                <input id="f-width" type="email" placeholder="Email Address"><br>
                <input id="f-width" type="text" placeholder="A brief description of your aims and objective"><br>
                <input id="f-width" type="text" placeholder="clearly and briefly highlight the principles and methodologies governing this objective"> <br>
                <input id="f-width" type="text" placeholder="How do you wish to implement these methodologies?"><br>
                <input type="text" placeholder="Organizations you've worked with. If none , specify.">
                <input type="text" placeholder="Previous projects. If none, specify."><br>

        </form>
        <input id="btn" class="reg-btn" type="submit" value="Register"> 
        Already a partner? <a href="">Login</a>

</div>
</section>

@endsection