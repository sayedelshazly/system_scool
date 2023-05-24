
@extends('layouts.app')

@section('show_department')
@if (session('status'))
    <div class="alert alert-primary">
        {{session('status')}}  
    </div>
@endif
<h1 class="heading-show mt">Show_Subject</h1>
<p class="promo bg-info text-white text-center">You can show your subject here!</p>
<div class="d-flex justify-content-center">
    <div class="student-data">
        <table class="table table-striped text-center">
            <thead class="head-table text-white">
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Action</th>
                  <th scope="col"> Uplode File</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td><a  class="link-style" href="{{ route('subjects.show' , $subject->id) }}"> {{$subject->name}}</a></td>
                        <td>
                            @auth
                            <div class="d-flex justify-content-evenly align-items-center">
                                <a href="{{route('subjects.edit',$subject->id)}}"><i class="bi text-info bi-pencil-square"></i></a>
                                <form  action="{{route('subjects.destroy', $subject->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                       <button type="submit" class="btn-link">
                                         <i class="bi text-info bi-trash"></i>
                                       </button>
                                </form>
                            </div>
                            @endauth
                        </td>
                        <td><form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="file" style="" name="file" class="btn btn-info text-white ">
                                <button type="submit" class="btn btn-info text-white" >UP</button>

                            </div>
                        </form></td>
                    </tr>
                
                @endforeach
            </tbody>
            <div class="style">
                {{$subjects->links()}}
            </div>
        </table>
        
    </div>
</div>

@endsection