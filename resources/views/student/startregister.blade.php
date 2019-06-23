@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <h3>SELECT YEAR/SEMESTER AND SESSION FOR COURSE REGISTRATION IN THIS SEMESTER</h3>

      <form action="{{ route('student.confirmregistration') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('YEAR') }}</label>

          <div class="col-md-5">
            <select name="year" class="form-control">
              <option>select year</option>
              <option value="1">1st Year</option>
              <option value="2">2nd Year</option>
              <option value="3">3rd Year</option>
              <option value="4">4th Year</option>

            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SEMESTER') }}</label>

          <div class="col-md-5">
            <select yname="term" class="form-control">
              <option>select semester</option>
              <option value="1">1st Semester</option>
              <option value="2">2nd Semester</option>

            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SESSION') }}</label>

          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="2014-2015" name="session">
          </div>
        </div>



        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

          <div class="col-md-5">
            <select name="department_id" class="form-control">
              <option>select department</option>
              @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
              @endforeach
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('RESIDIENT HALL NAME') }}</label>

          <div class="col-md-5">
            <select name="hall_id" class="form-control">
              <option>select hall name</option>
        @foreach($halls as $hall)
            <option value="{{$hall->id}}">{{$hall->name}}</option>
        @endforeach
            </select>
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-2 offset-md-4">
            <button  type="submit" class="btn btn-primary btn-block">
              {{ __('Submit') }}
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
