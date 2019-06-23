@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <div class="text-center">
        <h5 class="font-weight-bold">Department: Information and Communication Engineering</h5>
        <h5 class="font-weight-bold">Year: 1  Semester: 1</h5>
        <h5 class="font-weight-bold">Session: 2014-2015</h5>
      </div>

      <h3>SELECT YOUR COURSES FOR REGISTRATION IN THIS SEMESTER</h3>

      <h5 class="font-weight-bold">Course List</h5>


      <form>

        <div class="form-check" style="margin-top: 10px;">
          <span style="margin-right: 35px;">1. </span>
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" style="margin-left:15px;" for="defaultCheck1">
            ICE-1103-Data Structure and Algorithm
          </label>
        </div>

        <div class="form-check" style="margin-top: 10px;">
          <span style="margin-right: 35px;">2. </span>
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
          <label class="form-check-label" style="margin-left:15px;" for="defaultCheck2">
            ICE-1103-Computer Fundamental
          </label>
        </div>

        <div class="form-group row mb-0" style="margin-top: 30px;">
          <div class="col-md-2 offset-md-4">
            <button  type="submit" class="btn btn-primary btn-block">
              {{ __('Register Now') }}
            </button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>
@endsection
