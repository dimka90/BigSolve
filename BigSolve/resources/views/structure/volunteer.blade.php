@extends('master.base')
@section('content')
<section>
    <img class="vol-img" src="{{asset('image/volunteer.png')}}" alt="volunteer">
    <p class="volunteering">{{__('Volunteering')}}</p>
    <h3 id="">{{__('About Volunteering')}}</h3>
    <p class="vol-text">{{__('Volunteercontent')}}
       
    </p>

    <p class="vol-text">{{__('Volunteercontent1')}}
        
    </p>

</section>

<section style="background-color: #fafafa;">
    <h3 class="h3-2">{{__('Become A Volunteer')}}</h3>

    <p class="form-text">{{__('fill form')}}<p>

    <div class="reg-form">
        <form action="">
        @csrf
            <input class="input-field" type="text" name="name" id="name" placeholder="Enter Full Name">
            <input class="input-field" type="email" name="email" id="email" placeholder="Enter Email Address"><br>
            <input class="input-field" type="number" name="phone" id="phone" placeholder="Phone Number">
            <input class="input-field" type="text" name="nationality" id="nationality" placeholder="Nationality"><br>
            <input class="input-field" type="text" name="occupation" id="occupation" placeholder="Occupation">
            <input class="input-field" type="text" name="skills" id="skills" placeholder="skills"><br>
            <input class="input-field" type="text" name="Sdg" id="sdg" placeholder="SDG Of Interest">
            <input class="input-field" type="text" name="availability" id="availability" placeholder="Availability per week"><br>
            <input class="input-field" type="text" name="companies" id="companies" placeholder="Companies you've worked for. if none, specify">
            <input class="input-field" type="text" name="projects" id="projects" placeholder="Previous projects. If none, specify">
            <textarea class="input-field" name="address" id="address" placeholder="Contact Address" rows="2" ></textarea>
            <textarea class="input-field" name="description" id="description" placeholder="Why do you want to volunteer?" cols="30" rows="2"></textarea>
            <input type="button" value="Register" class="reg-btn">
        </form>
    </div>
</section>

@endsection