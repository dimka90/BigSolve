@extends('master.base')

@section('content')
    <!-- Required meta tags -->

    <style type="text/css">

    .t-deg{
      border: 1px solid black;
      background-color: skyblue;
      padding: 10px 100px;
      font-size: 17px;
    }
    table {
      margin: 10%;
      border: 1px solid black;
      margin-right: 30%;
    }
    tr td {
      border: 1px solid black;
      padding: 20px;
    }
    </style>

        <table>
            <tr>
                <th class="t-deg">Name</th>
                <th class="t-deg">Organization</th>
                <th class="t-deg">SDG</th>
                <th class="t-deg">Description</th>
            </tr>

            @foreach ($current as $current)
                <tr>
                    <td class="td-deg">{{$current->name}}</td>
                    <td class="td-deg">{{$current->organization}}</td>
                    <td class="td-deg">{{$current->sdg}}</td>
                    <td class="td-deg">{{$current->description}}</td>
                </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
            @endforeach
           
        </table>


@endsection