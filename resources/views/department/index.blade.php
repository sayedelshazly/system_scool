@extends('layouts.app')

@section('show_department')

@if (session('status'))
    <div class="alert alert-primary">
        {{session('status')}}  
    </div>
@endif

<h1 class="heading-show mt">Show_Department</h1>
<p class="promo bg-info text-white text-center">You can show your department here!</p>

<div class="d-flex justify-content-center">
    <div class="student-data text-center">
        <table>
            <thead class="head-table text-white">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->code }}</td>
                    <td>
                        @auth
                            <div class="d-flex justify-content-evenly align-items-center ">
                                <a href="{{route('department.edit',$department->id)}}"><i class="bi text-info bi-pencil-square"></i></a>
                                <form  action="{{route('department.destroy', $department->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn-link">
                                            <i class="bi text-info bi-trash"></i>
                                        </button>
                                </form>
                            </div>
                        @endauth
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection