
@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update.post',$post->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$post->title}}" required autocomplete="title" autofocus>


                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Select Category') }}</label>

                        
                                   <div class="col-md-6">
                                  <select class="btn btn-primary dropdown-toggle" name="category" value=''>
                                  	{{-- <option>{{$id->category}}</option> --}}
                                   @foreach($category  as $cat)
                                      {{-- <option >{{$cat->name}}</option> --}}
                                  {{--  --}}
                                  <option value="{{$cat->id}}" <?php if($cat->id== $post->c_id)echo "selected"; ?> >{{$cat->cat_name}}</option>
                                  {{--  --}}
                                      @endforeach()
                                  </select>
                              </div>
                            {{-- drop --}}
                        </div>
                        {{--  --}}
                       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Decription') }}</label>

                            <div class="col-md-6">
                                
                                
                                 <div class="form-group">
                                  
                                  <textarea class="form-control" rows="5" id="comment" name="desc" >
                                  	 {{$post->desc}}
                                  </textarea>
                                 </div> 
                            </div>
                        </div>
                        {{--  --}}
                        {{-- image --}}
                        <div class="form-group row">
                        	<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select a image') }}</label>
                        	<div class="col-md-6">
                  		<input type="file" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail"  name="image" value="{{ old('image') }}">

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                 </div>
                 <img src="{{URL::to($post->post_image)}}" style="height: 40px; width:70px;">
                 <input type="hidden" name="old_photo" value="{{$post->post_image}}">

                </div>
                  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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