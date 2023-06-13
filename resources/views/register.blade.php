<!DOCTYPE html>
<html>
@include('common.css')
<body>
<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-lg-6 offset-md-1 offset-lg-2">
          <!-- end contact section -->
          <div class="form_container">
            <div class="heading_container">        
      <div class="container">
          <h2>Registration Form</h2>
          <form action="/register_new_user" method="post">
            </div>
              <div class="form-group">
                  <label for="username">Full Name:</label>
                  <input type="text" id="full_name" name="full_name" required>
              </div>
              <div>
                <label for="Phone number">Phone number:</label>
                <input type="contact_number" id="contact_number" name="Phone_number" required>
              </div>
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
              </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
            @csrf 
      <div class="dropdown">
          <label for="role">Select Role:</label>
          <select name="role" id="role">
              @foreach ($response_data as $i=> $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
              @endforeach
          </select>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
