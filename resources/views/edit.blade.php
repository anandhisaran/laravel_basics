<form method = "post"  action="{{ url('blog/update') }}" name="blog" id="blog"
  novalidate="novalidate"  enctype="multipart/form-data">
 {{ csrf_field() }} 
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
  <div class="wrap-contact100">
       <div class="form-group">
    <label>name</label>
   <input type = "text" class="form-control" name = "name" id="name" 
   value="{{ $edit_user->name }}"/>
  </div>
    <div class="form-group">
    <label>username</label>
  <input type = "text" class="form-control" name = "username" id="username" 
   value="{{ $edit_user->user }}"/>
  </div>
  <div class="form-group">
    <label>password</label>
  <input type = "password" class="form-control" name = "password" id="password" 
    value="{{ $edit_user->password }}"/>
  </div>
   <div class="form-check">
    <label>gender</label>
 <input type="radio" class="form-control" name="gender" id="gender" value="male"
 {{ $edit_user->gender == 'male' ? 'checked' : ''}}/> 
 Male
<input type="radio" class="form-control" name="gender" id="gender" value="female"
{{ $edit_user->gender == 'female' ? 'checked' : ''}}/> Female     
  </div>
   <div class="form-group">
    <label>vehicle</label>
  <div class="checkbox">
  <label><input type="checkbox" name="vehicle[]" id="bike" value="1"
     {{ (is_array(old('vehicle')) && in_array(1, old('vehicle'))) ? ' checked' : '' }}>bike</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="vehicle[]" id="car" value="2"
     {{ (is_array(old('vehicle')) && in_array(2, old('vehicle'))) ? ' checked' : '' }}>car</label>
</div>
    </div>
<div class="form-group">
   <input type = "submit" class="btn btn-primary"  name="btn_blog" id="btn_blog" value = "Register" />
</div>  
</div>
      </form>