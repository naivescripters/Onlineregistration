@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
        <h3>SELECT YEAR/SEMESTER FOR CHECKING OFFERED COURSE INFORMATION IN THIS SEMESTER</h3>

        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" >
            @csrf

            <div class="form-group row">
                <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('YEAR') }}</label>

                <div class="col-md-5">
                    <select class="form-control">
                    <option>select year</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                    <option>3rd Year</option>
                    <option>4th Year</option>

                  </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SEMESTER') }}</label>

            <div class="col-md-5">
                <select class="form-control">
                    <option>select semester</option>
                    <option>1st Semester</option>
                    <option>2nd Semester</option>

              </select>
          </div>
      </div>



      <div class="form-group row">
        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

        <div class="col-md-5">
            <select class="form-control">
              <option>Information and Communication Engineering</option>
              <option>Computer Science and Telecommunication Engineering</option>
              <option>Fisheries and Merine Science</option>

          </select>
      </div>
  </div>



  <div class="form-group row mb-0">
    <div class="col-md-4 offset-md-5">
        <button  type="submit" class="btn btn-primary btn-block">
            {{ __('Check Offered Course') }}
        </button>
    </div>
</div>
</form>

</div>
</div>
</div>
@endsection
