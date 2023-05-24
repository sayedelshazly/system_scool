@extends('layouts.app')

@section('create_department')
        <h1 class="heading-page mt">New Subject</h1>
        <p class="promo bg-info text-white text-center">You can create a new subject!</p>
     <div class="create-style d-flex justify-content-center align-items-center">
        <form action="/subjects" method="POST" >
            @csrf
                   <label for="" class="form-label">Subject Name </label><br>
                   <input type="text" name="name" class="form-control" value="{{old('name')}}"><br>
                   @error('name')
                       <div class="text text-danger">
                        {{$message}}
                       </div>
                   @enderror
                   
                   <label for="" class="form-label">Subject Code </label><br>
                   <input type="text" name="code" class="form-control" value="{{old('code')}}" ><br>
                   @error('code')
                   <div class="text text-danger">
                    {{$message}}
                   </div>
               @enderror
               <div>
                <label class="form-label">Department </label><br>
                <select name="department_id" class="form-control" >
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">
                    {{$department->name}}
                    </option>
                    @endforeach
                </select>
                {{-- <input type="text" name="department_id" value="{{old('department_id')}}" ><br> --}}
            </div>
            <br>
                   <button class="btn btn-info text-white">Send Data</button>
        </form>
     </div>
@endsection
@section('description department')
        <h1 class="heading-info mt-m2">description for subject</h1>
        <p class="promo bg-info text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p class="promo-des">
            In our daily lives, a wide range of subjects are taught in school, and we must know these subjects,
            which would help us in the various aspects of our lives.
            <br><br>
            Hence the subjects list given further in this article will surely help you know and understand all these subjects.

        </p>
    
@endsection
