
@extends('layouts.admin')

@section('title','Gallery')



@section('content') 

  <div class="right_col" role="main">
          
    <div class="row">                                              
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Media <small>app all media</small></h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <gallery></gallery>
          </div>

        </div>
      </div>
    </div>
  </div>
    
@endsection


@section('javascript')
  
  <script>
      
  </script>
@endsection