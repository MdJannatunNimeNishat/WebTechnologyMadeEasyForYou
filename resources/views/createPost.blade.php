
@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add.post',$id->id) }}" enctype="multipart/form-data">
                    {{-- <form method="POST" action="{{ route('add.post',['u_id'=>$id->id,'c_id'=>$category->id]) }}" enctype="multipart/form-data"> --}}
                      {{-- {{$id->id}}
                      
                       @foreach($category  as $cat)
                        {{$cat->id}}
                            @endforeach() --}}

                     <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus>


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
                                  <select class="btn btn-primary dropdown-toggle" name="category">
                                   @foreach($category  as $cat)
                                      <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                          
                                      @endforeach()
                                  </select>
                              </div>
                            {{-- drop --}}
                        </div>
                        {{--  --}}
                       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Decription') }}</label>

                            <div class="col-md-6">
                                
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fieldOfInterest" value="" required autocomplete="name" autofocus>


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                 <div class="form-group">
                                  {{-- <label for="comment">Comment:</label> --}}
                                  <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
                                 </div> 
                            </div>
                        </div>
                        {{--  --}}
                        {{-- image --}}
                        <div class="form-group row">
                        	<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select a image') }}</label>
                        	<div class="col-md-6">
                  		<input type="file" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address" name="image" value="{{ old('image') }}">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                 </div>
                </div>
                        {{--  --}}

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
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