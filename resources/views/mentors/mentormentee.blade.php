@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session()->has('alert'))
           <div class="alert {{session()->get('alert-type')}}">
             {{session()->get('alert')}}
            </div>
        @endif

        
        <div class="container">    
                
                  <div class="row">
                      <div class="col-md-2 col-xs-12 col-sm-5 col-lg-3">
                          <img src="https://icon-library.net/images/profile-image-icon/profile-image-icon-5.jpg" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-4 col-xs-12 col-sm-5 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{ $mentor->staff->Nama}} </h2>
                          </div>
                            <hr>

                            {{$mentor->staff->NoStaf}}</br>
                            {{$mentor->staff->Jawatan}}
                            <p>{{$mentor->staff->CawKod}}</p>


                      </div>
                  </div>

<div class="card">
                <div class="card-header">{{ __('List of ') }} {{ $mentor->staff->Nama}} Mentees</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> No Matrik </th>
                 <!-- <th> Nama </th>
                 <th> Program</th>
                 <th> Cawangan </th> -->
 
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                 @foreach ($mentor as $mentee)
                   
                   
                   <tr>
                   
                   <td>{{ $mentee['RKD01_Nomatrik']}}</td>
                   <!-- <td>{{ $mentee['RKD01_Nama']}}</td>
                   <td>{{ $mentee['RKD01_Program']}}</td>
                   <td>{{ $mentee['RKD01_Caw']}}</td> -->
                    
                   

                  
                 
                </tr>
               
                
                  
                @endforeach
                </tbody>
                </table>
                <!-- paginate here -->
                

                </div>
            </div>

        </div>
    </div>
</div>
@endsection