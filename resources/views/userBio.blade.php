<title>user Bio</title>

{{--  --}}
{{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> --}}
<link rel='stylesheet' href='{{ asset('blogFontEnd/font-awesome.min.css') }}'>


<link rel="stylesheet" type="text/css" href="{{ asset('blogFontEnd/userBio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('blogFontEnd/card.css') }}">




<a class="btn btn-secondary" style="margin-left: 15px; margin-top: 10px;"href="{{ route('welcome') }}">Home</a>
<a class="btn btn-secondary" style="margin-left: 15px; margin-top: 10px;"href="{{ url()->previous() }}">Back</a>

<div class='card '>
  <img src='{{URL::to($user->image)}}' alt='D.img' style='width:100%'>
  <h1>{{$user->name}}</h1>

  <p>{{$user->email}}</p>
  
</div>
<br>

<br>
<h3 style="margin-left: 30px;">Other posts of <strong>{{$user->name}}:</strong></h3>

{{-- card --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


 <link href="{{ asset('blogFontEnd/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('blogFontEnd/bootstrap.min.js') }}" rel="stylesheet">
 <link href="{{ asset('blogFontEnd/jquery.min.js') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="box">
    <div class="container">
      <div class="row">
       {{--  --}}
         @foreach($post as $p)
  
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        
                        {{-- <i class="fa fa-instagram fa-3x" aria-hidden="true"></i> --}}
                     <a href="{{route('view.post',$p->id)}}"> <img   style="height: 150px; width:150px;" src="{{URL::to($p->post_image)}}"></a>
                        
            <div class="title">
              <h4>{{$p->title}}</h4>
            </div>
                        
            {{-- <div class="text">
              <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
            </div> --}}
                        
            <a href="{{route('view.post',$p->id)}}">Read post</a>
                        
           </div>
        </div>
          @endforeach   
        

    
    </div>    
    </div>
</div>
{{-- /card --}}



