<!DOCTYPE html>
<html>
<head>
  <title>Empty Table</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
  <table>
  <buttonn type="button">
            <a href="/create_role_index">
            Create New</a></button>
  <buttonn type="button">
            <a href="/get_role_list/Status/NA/Active">
            List Active Role</a></button>
  <buttonn type="button">
            <a href="/get_role_list/Status/NA/Inactive">
            List Inactive Role</a></button>
  <buttonn type="button">
            <a href="/get_role_list/ALL/NA/ALL">
            List ALL Role</a></button>
    <thead>
      <tr>
        <th>SI no</th>
        <th>Role Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($response_data as $i=> $data)
      <tr>
        <td>{{$i+1}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->status}}</td>
        <td>
            <buttonn type="button">
            <a href="/edit_role/{{$data->id}}">  
            Edit</a></button>
            <buttonn type="button">
            <a href="/delete_role/{{$data->id}}">
            Delete</a></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
