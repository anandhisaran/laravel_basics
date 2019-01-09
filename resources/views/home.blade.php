<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
        .wrap-contact100 {
    width: 920px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 62px 55px 90px 55px;
}
.contact100-form {
      width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
        background-image: url('https://colorlib.com/etc/cf/ContactFrom_v11/images/bg-01.jpg');
}
.contact100-form-title {
    display: block;
    width: 100%;
    font-family: Montserrat-Black;
    font-size: 39px;
    color: #fff;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 59px;
}
.error {
  color: red;
}
      </style>
    </head>
    <body>
<h1 class="text-center">Welcome {{ $show_detail[0]->name }}</h1>
<a href="{{ url('/profile') }}">Profile</a>

{{ $show_detail->links() }}
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
           @foreach ($show_detail as $user)
      <tr>   
    <td> {{ $user->name }}</td>
    <td>{{ $user->user }}</td>
    <!-- <td><img src="{{ asset('uploads/About.png') }}"/></td> -->
    <td><img style="width:50px;height: 50px;" src="{{ asset('uploads') }}/{{ $user->resume }}"/></td>
       <td><a href="<?php echo url('/edit/'.$user->s_id); ?>">Edit</a></td>

       <td><a href="">Delete</a></td>
      </tr>
      @endforeach
      </tbody>
  </table>

         <div class="container contact100-form">
          <div class="row">
             <div class="col-md-12">
<a href="{{ url('/logout') }}">Logout</a>
<h3 class="contact100-form-title">Contact Us</h3>
<!-- alert -->
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif  
 <form method = "post"  action="{{ url('blog/store') }}" name="blog" id="blog"
  novalidate="novalidate"  enctype="multipart/form-data">
 {{ csrf_field() }} 
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
  <div class="wrap-contact100">
       <div class="form-group">
    <label>name</label>
   <input type = "text" class="form-control" name = "name" id="name" />
<!-- <label id="name-error" class="error" for="name" style="display: none;color:red;"></label> -->
  </div>
  <div class="form-group">
    <label>username</label>
  <input type = "text" class="form-control" name = "username" id="username" />
  </div>
  <div class="form-group">
    <label>password</label>
  <input type = "text" class="form-control" name = "password" id="password" />
  </div>
   <div class="form-check">
    <label>gender</label>
 <input type="radio" class="form-control" name="gender" id="gender" value="male"> 
 Male
<input type="radio" class="form-control" name="gender" id="gender" value="female"> Female     
  </div>

   <div class="form-group">
    <label>vehicle</label>
  <div class="checkbox">
  <label><input type="checkbox" name="vehicle[]" id="bike" value="bike">bike</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="vehicle[]" id="car" value="car">car</label>
</div>
    </div>

   <div class="form-group">
    <label>Bike Company</label>
<select name="company_list" id="company_list" class="form-control">
   <option value="">-- please select --</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
  </div>

  <div class="form-group">
    <label>upload file</label>
  <input type = "file" class="form-control" accept="png"" name = "myresume" id="myresume" />
  </div>

<div class="form-group">
   <input type = "submit" class="btn btn-primary"  name="btn_blog" id="btn_blog" value = "Register" />
</div>  
</div>
      </form>
    </div>
    </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

          <script src="{{ ('js/jquery_validation.js') }}"></script>
        <script src="{{ ('js/blog_validation.js') }}"></script>
      
    </body>
</html>
