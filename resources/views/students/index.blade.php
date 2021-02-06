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
            <div class="card">
                <div class="card-header">{{ __('Mentee Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> No Matrik </th>
                 <th> Nama </th>
                 <th> Program</th>
                 <th> Cawangan </th>
 
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($students as $student)
                   <tr>
                   <td>{{ $student->RKD01_ID}}</td>
                   <td>{{ $student->RKD01_Nama}}</td>
                   <td>{{ $student->RKD01_Program}}</td>
                   <td>{{ $student->RKD01_Caw}}</td>

                   

                  
                 
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$students->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection