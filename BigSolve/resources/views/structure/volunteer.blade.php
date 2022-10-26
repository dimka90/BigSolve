@extends('master.base')
@section('content')
<section>
    <img class="vol-img" src="{{asset('image/volunteer.png')}}" alt="volunteer">
    <p class="volunteering">Volunteering</p>
    <h3 id="">About Volunteering</h3>
    <p class="vol-text">
        BigSolve makes room for anyone with the motive and interest 
        to make an impact but have no idea how or where to start - your 
        journey of impact can start here. This is also a space for individuals 
        who are willing to serve with their skills, time, and creativity. 
        We want people who are ready to make real changes.
    </p>

    <p class="vol-text">
        Volunteers have the free will to decide which organization or partnership 
        they wish to volunteer for depending on their SDG of interest and if these 
        organizations are in need of volunteers. Volunteers can also be recruited by 
        our partners and may have opportunities of joining any of these organizations 
        full-time.
    </p>

</section>

<section style="background-color: #fafafa;">
    <h3 class="h3-2">Become A Volunteer</h3>

    <p class="form-text">Fill the form below to get started<p>

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