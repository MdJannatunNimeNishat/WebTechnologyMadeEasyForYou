<title>TimeLine</title>
@extends('home')
@section('content')

	<table class="table table-responsive">
        	<tr>
        		<th>Tile</th>
        		<th>Category</th>
        		<th>Des</th>
        		<th>Image</th>
        		<th>created at</th>
        		<th>Update date</th>

       
        	</tr>
        	@foreach($timeLine  as $tim)
        	<tr>
        		
        		<td>{{$tim->title}}</td>
                <td>{{$tim->c_id}}</td>
     		 	{{-- <td>{{$Category->name}}</td> --}}
                 {{-- <td value="{{$tim->id}}" <?php if($tim->id== $post->category_id)echo "selected"; ?> >{{$row->name}}</td> --}}

     		 	{{-- <td>{{$tim->desc}}</td> --}}
                <td>{{Str::limit($tim->desc, 50, ' ...')}}</td>
     		 	<td><img src="{{URL::to($tim->post_image)}}" style="height: 40px; width:70px;"></td>
     		 	
     			<td>{{$tim->created_at}}</td>
     		 	<td>{{$tim->updated_at}}</td>  
        		
        		<td>
        			 
                    
                     <a href="{{ route('view.post', $tim->id) }}" class="btn btn-sm btn-success">view</a>

                      <a href="{{ route('delete.post',$tim->id) }}" class="btn btn-sm btn-danger">Delete</a>

                      <a href="{{ route('editPost',$tim->id) }}" class="btn btn-sm btn-info">Edit</a>
                    

        		</td>
        	</tr>
        	@endforeach()
                {{-- <td>{{$Category->name}}</td> --}}

        </table>

@endsection