@extends('common')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-5" style="color: rgb(205, 90, 180)">LIST OF TOP {{ $courses->name}} COLLEGES IN INDIA BASED ON 2021 RANKING</h2>
      
    <div class="row mt-5">
        @foreach ($courses->course as $item)
        <div class="col-3">
            <div class="card">
                
                <div class="card-body">
                    <h4 class="text-truncate">Course Name : {{ $item->name }}</h4>
                    <p>Fee : {{ $item->fee }} per year</p>
                    <p>durtion : {{ $item->duration }} years</p>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
@endsection