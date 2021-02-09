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
           <div>
            Hello 
            {{ dd($mentors->staff['Nama'])}}

           </div>
               
            </div>
        </div>
    </div>
</div>
@endsection