@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-danger">
                  <div class="panel-heading" style="text-align:center">Instructors Register</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('instructor.submit.register') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                              <label for="first_name" class="col-md-4 control-label">First Name</label>

                              <div class="col-md-6">
                                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                  @if ($errors->has('first_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('first_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                              <label for="last_name" class="col-md-4 control-label">Last Name</label>

                              <div class="col-md-6">
                                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                                  @if ($errors->has('last_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('job_id') ? ' has-error' : '' }}">
                              <label for="job_id" class="col-md-4 control-label">Job ID</label>

                              <div class="col-md-6">
                                  <input id="job_id" type="password" class="form-control" name="job_id" placeholder="Please provide your instructor ID..." required>

                                  @if ($errors->has('job_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('job_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                  @if ($errors->has('password_confirmation'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                              <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                              <div class="col-md-6">
                                  <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                  @if ($errors->has('phone_number'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('phone_number') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('office_location') ? ' has-error' : '' }}">
                              <label for="office_location" class="col-md-4 control-label">Office Location</label>

                              <div class="col-md-6">
                                  <input id="office_location" type="text" class="form-control" name="office_location" value="{{ old('office_location') }}" required placeholder="Must be one letter and two integers, e.g: 'A26'">

                                  @if ($errors->has('office_location'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('office_location') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                              <label for="job_title" class="col-md-4 control-label">Job Title</label>

                              <div class="col-md-6">
                                  <select name="job_title" id="job_title" class="form-control">
                                    <option value="" disabled selected>Please select your Job Title</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Teaching Assistant">Teaching Assistant</option>
                                  </select>

                                  @if ($errors->has('job_title'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('job_title') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                              <label for="gender" class="col-md-4 control-label">Gender</label>

                              <div class="col-md-6">
                                  <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>Please select your gender</option>
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                  </select>

                                  @if ($errors->has('gender'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('gender') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>


              						<div class="form-group{{ $errors->has('faculty_name') ? ' has-error' : '' }}">
                            <label for="faculty_name" class="col-md-4 control-label">Please select the faculties you're working with currently</label>

              							<div class="col-md-6 btn-group">
              								 <select id="faculty_name" type="select" class="form-control" name="faculty_name[]" multiple="multiple" required>
              									<option value="" disabled selected>(Multiple choices are allowed)</option>
              										@foreach ($faculties as $key => $value) {
              											<option value="{{ $key }}">{{ $value }}</option>
              										@endforeach
              								</select>

                                    @if ($errors->has('faculty_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('faculty_name') }}</strong>
                                        </span>
                                    @endif
              							</div>
                        </div>

                        <div class="form-group{{ $errors->has('course_name') ? ' has-error' : '' }}">
                          <label for="course_name" class="col-md-4 control-label">Which courses do you currently teach?</label>

                          <div class="col-md-6 btn-group">
                             <select id="course_name" type="select" class="form-control" name="course_name[]" required  multiple>
                              <option value="" disabled selected>(Multiple choices are allowed)</option>
                                @foreach ($courses as $key => $value) {
                                  <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>

                                  @if ($errors->has('course_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('course_name') }}</strong>
                                      </span>
                                  @endif
                          </div>
                      </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Register
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
