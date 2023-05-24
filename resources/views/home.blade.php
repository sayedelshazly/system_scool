@extends('layouts.app')

  @section('content')
        <div class="mt-m2">
            <div class="card">
              <h5 class="card-header">Departments</h5>
              <div class="card-body">
              <p class="card-text">Do you want to create a new department?</p>
              <a href="{{route('department.create')}}" class="btn btn-info text-white">New Department</a>
              <a href="{{route('department.index')}}" class="btn btn-light text-info">Show Department</a>
              </div>
            </div>  
            <br>
            <div class="card">
                <h5 class="card-header">Subjects</h5>
                <div class="card-body">
                <p class="card-text">Do you want to create a new subject?</p>
                <a href="{{route('subjects.create')}}" class="btn btn-info text-white">New Subject</a>
                <a href="{{route('subjects.index')}}" class="btn btn-light text-info">Show Subject</a>
                </div>
            </div>     
      </div> 
@endsection
@section('home-discript')
            <h1 class="heading-info-home">description for school system</h1>
            <div class="info">
                <p class="promo bg-info text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <p class="promo-des">
                The system of a study is a credit Hour system. The total credit hour requirements of the bachelor’s degree are 133 credit hours.
                  A regular student can achieve the 133 credit hour requirements in four academic years (8 semesters).
                   <br><br>
                A course of 3 credit hours is delivered as 2 hours theoretical lecture teaching and 2 hours practical/tutorial session (4 contact hours).
                </p>
            </div>
        
    
@endsection
