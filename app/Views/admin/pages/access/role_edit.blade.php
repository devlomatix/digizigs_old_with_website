
@extends('layouts.admin')

@section('title','Edit-Role')



@section('content')

	

	<div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Access Roles <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              

              

              	<div class="clearfix"></div>

                @if(Session::has('message'))
                    <p class="alert alert-info " id="successMessage">{{ Session::get('message') }}</p>
                @endif

                @if(Session::has('deleted'))
                  <p class="alert alert-danger " id="successMessage">{{ Session::get('deleted') }}</p>
                @endif

              	<div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">	                   
	                    <div class="x_title">
                        <h2>Update Role <small>Change Role name and permission</small></h2>
                        <div class="clearfix"></div>
                      </div>
	                  </div>

	                  <div class="x_content">

	                    {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update', $role->id]]) !!}
        
                        <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('name'))
                                        <p class="help-block">
                                            {{ $errors->first('name') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('permission', 'Permissions', ['class' => 'control-label']) !!}
                                    {!! Form::select('permission[]', $permissions, old('permission') ? old('permission') : $role->permissions()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('permission'))
                                        <p class="help-block">
                                            {{ $errors->first('permission') }}
                                        </p>
                                    @endif
                                </div>
                            </div>

                      {!! Form::submit(trans('Update Role'), ['class' => 'btn btn-dark btn-sm']) !!}
                      {!! Form::close() !!}
                      



                       
							     
	                  </div>
	                </div>
              	</div>
            </div>
          </div>
  </div>
    
@endsection

@section('javascript')
  <script src="{{asset('public/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script>
      $("#tags_1").select2();
      $(".select2").select2();


      $(".tags").select2({
        tags: true
      });

  </script>
@endsection