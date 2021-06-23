@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a student</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="sid">sid</label>
              <input type="text" class="form-control" name="sid"/>
          </div>
          <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="pw">pw</label>
              <input type="text" class="form-control" name="pw"/>
          </div>
          <div class="form-group">
              <label for="gentle">gentle</label>
              <input type="text" class="form-control" name="gentle"/>                         
          <button type="submit" class="btn btn-primary-outline">Add Student</button>
      </form>
  </div>
</div>
</div>
@endsection