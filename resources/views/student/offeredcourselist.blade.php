@extends('layouts.app')

@section('content')
<div class="container" >

  <div class="form-group row">
    <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('YEAR') }}</label>

    <div class="col-md-5">
      <select class="form-control" name="year" id="year">
        <option value="1">select year</option>
        <option value="2">1st Year</option>
        <option value="3">2nd Year</option>
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
    <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

    <div class="col-md-5">
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
      <button class="btn btn-primary btn-block" id="read-data">
        {{ __('Check Offered Course') }}
      </button>
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
          <tbody id="courselist">

          


           
          </tbody>
          <!-- <tfoot>
            <td></td>
            <td class="text-right "><span class="bg-success" style="font-weight: bold;padding: 10px;">Total Credit</span></td>
            <td> 20</td>
            <td></td>
          </tfoot> -->
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection


@section('js')


<script type="text/javascript">

  $('#read-data').on('click',function(){


    var year = $("#year :selected").val();
    $.get("{{URL::to('student/courselist/1')}}",function(data){
      
      $('#courselist').empty().html(data);
    })
  })
 




</script>




@endsection