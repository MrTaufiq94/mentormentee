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
                <div class="card-header">{{ __('Mentor Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> No Staff </th>
                 <th> Nama </th>
                 <th> Keaktifan</th>
                 <th> Kuota </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($mentors as $mentor)
                   <tr>
                   <td>{{ $mentor->NoStaf}}</td>
                   <td>
                    {{ $mentor->NoStaf->Nama}}
                    </td>
                   <td>{{ $mentor->Keaktifan}}</td>
                   <td>{{ $mentor->Kuota}}</td>
                   

                  
                 
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$mentors->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection