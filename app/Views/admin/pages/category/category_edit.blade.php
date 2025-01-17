@extends('layouts.admin')
@section('title','All Articles')
@section('content')

<div class="right_col" role="main">
   <div class="">
      <div class="row">

         @if(Session::has('message'))
         <p class="alert alert-info " id="successMessage">{{ Session::get('message') }}</p>
         @endif
         @if(Session::has('deleted'))
         <p class="alert alert-danger " id="successMessage">{{ Session::get('deleted') }}</p>
         @endif

         @if ($errors->any())
         @foreach ($errors->all() as $error)

         <ul>
            <li>{{$error}}</li>
         </ul>
         @endforeach
         @endif

         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2><i class="fa fa-align-left"></i> Edit Category <small></small></h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <div class="row">
                     
                     <div class="col-md-6 col-md-offset-3 ">
                        
                        <form method="post" action="{{route('category.update', $category->id)}}">
                           @csrf
                           {{method_field('PUT')}}
                           <!--catagory-->
                           <div class="form-group wp-input">
                              <label for="usr">Category Name</label>
                              <input type="text" class="form-control input-sm {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$category->name}}">
                              <small><i>The name is how it appears on your site.</i></small>
                           </div>

                           <!--Parent category dropdown-->
                           @if($parent)
                              
                           @else
                           'NO parent'
                           @endif

                           <div class="form-group wp-input">
                              <label for="sel1"> Web Block </label>
                              <select class="form-control input-sm" name="parent_id">
                                 <option value="0" selected>--Select Web Block--</option>
                                 @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                             @if($parent)
                                                @if($category->id == $parent->id)
                                                   selected="selected"
                                                @endif
                                             @endif     
                                       >{{$category->name}}</option>
                                 @endforeach
                                 
                              </select>
                              <small><i>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</i></small>
                           </div>


                           <div>
                              <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back</a>
                              <button type="submit" class="btn btn-dark btn-sm pull-right" style="margin-bottom: 20px;" >
                              Update
                              </button>
                           </div>
                        </form>
                     </div>
                     
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection