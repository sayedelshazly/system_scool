@extends('layouts.app')

@section('edit_department')
<h1 class="heading-page">Edit Department</h1>
<p class="promo bg-info text-white text-center">You can create edite your department!</p>
<div class="department">
   <form action="{{route('department.update',$departments->id)}}" method="POST">
    @csrf
    @method('PUT')
              <label for=""  class="form-label">department name</label><br>
              <input type="text" name="name" class="form-control" value="{{$departments->name}}"><br><br>
              <label for="" class="form-label">department code</label><br>
              <input type="text" name="code" class="form-control" value="{{$departments->code}}"><br><br>
              <button class="btn btn-primary text-white">Edit Data</button>
   </form>
</div>
@endsection
@section('description department')
        <h1 class="heading-info  mt-m2">edit your department</h1>
        <p class="promo bg-info text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p class="promo-des">
            The system of a study is a credit Hour system. The total credit hour requirements of the bachelor’s degree are 133 credit hours.
             A regular student can achieve the 133 credit hour requirements in four academic years (8 semesters).
             <br><br>
              A course of 3 credit hours is delivered as 2 hours theoretical lecture teaching and 2 hours practical/tutorial session (4 contact hours).
        </p>
    
@endsection