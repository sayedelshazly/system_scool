@extends('layouts.app')

@section('edit_department')
<h1 class="heading-page mt">Edit Subject</h1>
<p class="promo bg-info text-white text-center">You can edite your subject!</p>
<div class="department">
    <form action="{{ route('subjects.update' , $subject->id) }}" method="POST" >
    @csrf
    @method('PUT')
              <label for="" class="form-label">Subject Name</label><br>
              <input type="text" name="name" class="form-control" value="{{$subject->name}}"><br>
              <label for="" class="form-label">Subject Code</label><br>
              <input type="text" name="code" class="form-control" value="{{$subject->code}}"><br>
              <div>
                <label class="form-label">Department</label><br>
                <select name="department_id" class="form-control">
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">
                    {{$department->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <br>
            <button class="btn btn-primary text-white">Edit Data</button>
   </form>
</div>
@endsection
@section('description department')
        <h1 class="heading-info  mt-m2">Edit your subjects</h1>
        <p class="promo bg-info text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p class="promo-des">
            The system of a study is a credit Hour system. The total credit hour requirements of the bachelor’s degree are 133 credit hours.
             A regular student can achieve the 133 credit hour requirements in four academic years (8 semesters).
             <br><br>
              A course of 3 credit hours is delivered as 2 hours theoretical lecture teaching and 2 hours practical/tutorial session (4 contact hours).
        </p>
    
@endsection