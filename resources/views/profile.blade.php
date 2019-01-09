 <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
<p class="text-center">Your Profile</p>

<h1 class="text-center"> <span style="color: red;">Welcome </span>{{ $show_profile[0]->name }}</h1>
<h1 class="text-center">Email: {{ $show_profile[0]->email }}</h1>
<h4 class="text-center"><a href="{{url('/home')}}">Go Home</a></h4>