@extends('master.base')
@section('content')
    {{-- Partnership page First Section --}}

        
        {{-- partnership image --}}

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
                <p> Our Partnerships are the key to success. We work with individuals as well as local,
                    national, and global organizations and companies with like minds and interests to
                    provide helpand resources to those in need of them. We serve as the bridge that connects
                    these individuals to our partners that are in good grounds to make the difference they seek.
                </p>
                <p> We are always open to new partners to join us on our journey to make a difference in the world.</p>
              
            </div>
        </div>
    </section>
{{-- partnership section three --}}
<section>
    <div class="contain3">
        <div class="third-sec">
            <h1 class="hh">The Partnership Platform</h1>
            <p class="xh"> The partnership platform is a society created for our partners to interact, strategize,
                and collaborate to achieve a goal in line with one or all of the SDGs.
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
            <h1 class="head2">Become A Partner</h1>
            <p class="partner-fs"> Our team of professionals carry out background checks on every aspiring partner. This is to <br>
                enable us verify the integrity of each partner.<br>
                At the end of five business days from time of registration, emails will be sent to aspiring <br>
                partners as regards registration status.
            </p>
    </div>
</section>

{{-- Section Five  --}}
<section>


<section style="background-color: #fafafa;">
    <h3 class="h3-2">Become A Volunteer</h3>

    <p class="form-text">Fill the form below to get started<p>

    <div class="reg-form">
        <form action="">
        @csrf
            <input class="input-field" type="text" name="name" id="name" placeholder="Name of Organisation">
            <input class="input-field" type="email" name="email" id="email" placeholder="Location (citytown, country)"><br>
            <input class="input-field" type="number" name="phone" id="phone" placeholder="Type of Organization (NGO, Academic Institution, etc...)">
            <input class="input-field" type="text" name="nationality" id="nationality" placeholder="SDG of interest"br>
            <input class="input-field" type="text" name="occupation" id="occupation" placeholder="Email Address">
            <input class="input-field" type="text" name="skills" id="skills" placeholder="A brief description of your aims and objective"><br>
            <input class="input-field" type="text" name="Sdg" id="sdg"placeholder="How do you wish to implement these methodologies?">
        
            <input class="input-field" type="text" name="companies" id="companies" placeholder="Companies you've worked for. if none, specify">

            <textarea class="input-field" name="address" id="address" placeholder="Contact Address" rows="2" ></textarea>
            <textarea class="input-field" name="description" id="description" placeholder="Organisation you have work for?" cols="30" rows="2"></textarea>
            <input style="font-size:2rem;"type="button" value="Submit" class="reg-btn">
        </form>
    </div>
</section>

@endsection