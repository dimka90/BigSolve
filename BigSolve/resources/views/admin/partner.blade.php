<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

    .th-deg{
      border: 1px solid white;
      background-color: skyblue;
      padding: 10px 40px;
      font-size: 17px;
    }
    table {
      margin-right: 500px;
      margin-top: 50px;
      border: 1px solid white;
    }
    tr td {
      border: 1px solid white;
      padding: 20px;
    }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    @include('admin.header')
        <!-- partial -->
      @include('admin.body')



<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
       
        <table>
            <tr>
                <th class="th-deg">Name</th>
                <th class="th-deg">Location</th>
                <th class="th-deg">Organization</th>
                <th class="th-deg">SDG</th>
                <th class="th-deg">Email</th>
                <th class="th-deg">Description</th>
                <th class="th-deg">Principles</th>
                <th class="th-deg">Strategy</th>
                <th class="th-deg">Experience</th>
                <th class="th-deg">Projects</th>
            </tr>

            @foreach ($partners as $partners)
                <tr>
                    <td class="td-deg">{{$partners->name}}</td>
                    <td class="td-deg">{{$partners->location}}</td>
                    <td class="td-deg">{{$partners->organization}}</td>
                    <td class="td-deg">{{$partners->sdg}}</td>
                    <td class="td-deg">{{$partners->email}}</td>
                    <td class="td-deg">{{$partners->description}}</td>
                    <td class="td-deg">{{$partners->principles}}</td>
                    <td class="td-deg">{{$partners->strategy}}</td>
                    <td class="td-deg">{{$partners->experience}}</td>
                    <td class="td-deg">{{$partners->projects}}</td>
                </tr>
            @endforeach
           
        </table>

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

      {{-- @include('admin.partner') --}}
    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>



