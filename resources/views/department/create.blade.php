@extends('layouts.app')

@section('create_department')
        <h1 class="heading-page mt">New Department</h1>
        <p class="promo bg-info text-white text-center">You can create a new department!</p>
     <div class="create-style d-flex justify-content-center align-items-center">
        <form action="/department" method="POST">
            
            @csrf
            <label class="form-label">department name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
            <div class="text text-danger">
                {{$message}}
            </div>
            @enderror
            <br>
            <label for="" class="form-label" >department code</label><br>
            <input type="text" name="code" class="form-control" value="{{old('code')}}" ><br>
            @error('code')
            <div class="text text-danger">
                {{$message}}
            </div>
            @enderror 
            
               <br>
                   <button class="btn btn-info text-white">Send Data</button>
        </form>
       
     </div>
@endsection
@section('description department')
        <h1 class="heading-info mt-m2">description for department</h1>
        <p class="promo bg-info text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p class="promo-des">
            The school system department is responsible for overseeing administrative tasks in schools,
             colleges or other educational institutions. They ensure that the organization runs smoothly and they also manage facilities and staff1.
             <br><br>
             The duties of school administrators may vary depending on the size and type of school they work in1.
             
        </p>
    
@endsection
