@extends('layout')


@section('body')

    <div class="col-lg-6 offset-lg-3" style="margin-top: 80px;">
        <h1 class="text-center mb-3">Add person Data</h1>

       <form method="post" action={{ route('form.save') }}>
          <div class="mb-3">

            @csrf

            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
          </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
          </div>

          <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
          </div>

          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
@endsection