@extends('admin.layouts.template')

@section('content')
<!-- breadcrumb Start -->
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="#">{{ URL::to('admin/users') }}</a>
 </li>
 <li class="breadcrumb-item active">Create</li>
</ol>
<!-- breadcrumb End -->
@include('admin.layouts.partials.flash-message')

<div class="card mb-3">
  <div class="card-header">Create User</div>
  <div class="card-body">
    <form method="POST" action="{{ URL::to('admin/users/'.$item->id) }}">

    <div class="card border-dark">
          <div class="card-header">
            Login Information
          </div>
          <div class="card-body text-dark">
              <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" id="email" name="email" type="email" value="{{ old('email') ? old('email') : $item->email }}" aria-describedby="emailHelp" placeholder="Enter email" disabled>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <label for="confirm_password">Confirm password</label>
                    <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Confirm password">
                    @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                    @endif
                  </div>
                </div>
              </div>
          </div>
    </div>
    <br />
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="name">First name</label>
            <input class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $item->name}}" type="text" aria-describedby="nameHelp" placeholder="Enter first name">


          </div>
          <div class="col-md-6">
            <label for="surname">Last name</label>
            <input class="form-control" id="surname" name="surname" value="{{ old('surname') ? old('surname') : $item->surname}}" type="text" aria-describedby="nameHelp" placeholder="Enter last name">


          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="mobile">Mobile</label>
            <input class="form-control" id="mobile" name="mobile" value="{{ old('mobile') ? old('mobile') : $item->mobile}}" type="text" aria-describedby="nameHelp" placeholder="Enter first name">


          </div>
          <div class="col-md-6">
            <label for="age">Age</label>
            <input class="form-control" id="age" name="age" value="{{ old('age') ? old('age') : $item->age}}" type="text" aria-describedby="nameHelp" placeholder="Enter last name">


          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="address">Address</label>
            <input class="form-control" id="address" name="address" value="{{ old('address') ? old('address') : $item->address}}" type="text" aria-describedby="nameHelp" placeholder="Enter first name">


          </div>
          <div class="col-md-6">
            <label for="city">City</label>
            <select class="form-control" id="city" name="city">
                <option value="">---- Select ----</option>
                <option value="bangkok">bangkok</option>
                <option value="nakornpathom">nakornpathom</option>
                <!--<option value="bangkok" {{ ( (old('city')?old('city'):$item->city)  == "bangkok" ? "selected":"" ) }} >bangkok</option>
                <option value="nakornpathom"  {{ ( (old('city')?old('city'):$item->city)  == "nakornpathom" ? "selected":"" ) }} >nakornpathom</option>-->
            </select>
            
          </div>
        </div>
      </div>

      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" value="Submit" class="btn btn-primary">&nbsp;
      <input type="reset" value="Reset" class="btn btn-danger">

    </form>
  </div>
</div>

@stop
