@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <h3>SELECT YEAR/SEMESTER AND SESSION FOR COURSE REGISTRATION IN THIS SEMESTER</h3>

      <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" >
        @csrf

        <div class="form-group row">
          <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('YEAR') }}</label>

          <div class="col-md-5">
            <select class="form-control">
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
            <select class="form-control">
              <option>select semester</option>
              <option value="1">1st Semester</option>
              <option value="2">2nd Semester</option>

            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SESSION') }}</label>

          <div class="col-md-5">
            <input type="text" class="form-control" name="">
          </div>
        </div>



        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

          <div class="col-md-5">
            <select name="department_id" class="form-control">
              <option>select department</option>
              <option value="">Information and Communication Engineering</option>
              
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('RESIDIENT HALL NAME') }}</label>

          <div class="col-md-5">
            <select class="form-control">
              <option>select hall name</option>
              <option value="">ASH</option>
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
