@extends('layouts.app')
@section('show_department')
<h1 class="heading-show mt">Show Data of subject</h1>
<p class="promo bg-info text-white text-center">You can show your subject here!</p>
<div class="d-flex justify-content-center">
    <div class="student-data text-center">
        <table class="table table-striped">
            <thead class="head-table text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Department_DI</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->code }}</td>
                    <td>{{ $subject->department_id }}-{{$subject->department->name}}</td>
                </tr>
              </tr>
            </tbody>
          </table>

    </div>
</div>
    @endsection

