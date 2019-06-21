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
          
                <div class="col-md-6">
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

            <div class="col-md-6">
                <select class="form-control">
                    <option>select semester</option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>

              </select>
          </div>
      </div>



      <div class="form-group row">
        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

        <div class="col-md-6">
            <select class="form-control">
              <option>select department</option>
              @foreach($departments as $department)
              <option value="{{$department->id}}">{{$department->name}}</option>
              
              @endforeach
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

<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <h3>DETAILS REGULAR COURSE INFORMATION FOR THIS SEMESTER</h3>
      <div class="card-content table-responsive">
        <table id="table" class="table table-bordered table-hover"  cellspacing="0" width="100%">
          <thead class="text-primary">
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Credit Hour</th>
            <th>Year</th>
            <th>Semester</th>
          </thead>
          <tbody>

            <tr>
              <td>ICE-1102</td>
              <td>Information and communication technology fundamental</td>
              <td>3.00</td>
              <td>1</td>
              <td>1</td>
            </tr>

            <tr>
              <td>ICE-1102</td>
              <td>Information and communication technology fundamental</td>
              <td>3.00</td>
              <td>1</td>
              <td>1</td>
            </tr>


            <tr>
              <td>ICE-1102</td>
              <td>Information and communication technology fundamental</td>
              <td>3.00</td>
              <td>1</td>
              <td>1</td>
            </tr>

            <tr>
              <td>ICE-1102</td>
              <td>Information and communication technology fundamental</td>
              <td>3.00</td>
              <td>1</td>
              <td>1</td>
            </tr>
          </tbody>
          <tfoot>
            <td></td>
            <td class="text-right "><span class="bg-success" style="font-weight: bold;padding: 10px;">Total Credit</span></td>
            <td> 20</td>
            <td></td>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
