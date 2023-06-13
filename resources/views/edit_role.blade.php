<!DOCTYPE html>
<html>
<head>
  <title>Role Management</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      text-align: center;
      color: #333333;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555555;
    }
    
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #cccccc;
    }
    
    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: none;
      background-color: #4CAF50;
      color: #ffffff;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    .form-group .error-message {
      color: #ff0000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Role Management</h2>
    <form action="/update_role" method="post">
      @csrf 
      <div class="form-group">
        <label>Role Name:</label>
        <input type="text" id="role_name" value="{{$data->name}}" name="role_name">
        <input type="hidden" value="{{$data->id}}" name="record_id" placeholder="record_id">
        <input type="hidden" value="{{$data->status}}" id="status_id">
        <label>Status:</label>
        <input type="radio" value="Active" id="status1" name="status">
        <label>Active:</label>
        <input type="radio" value="Inactive" id="status2" name="status">
        <label>Inactive:</label>

    <script>
        let status_value=document.getElementById('status_id').value;
        //alart(status_value)
        if(status_value=="Active"){
            document.getElementById('status1').checked = true;
        }else{
            document.getElementById('status2').checked = true;
        }
    </script>
      </div>
      <div class="form-group">
        <input type="submit" value="submit">
      </div>
    </form>
  </div>
</body>
</html>
