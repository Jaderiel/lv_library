<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  </head>

  <body>
    <h1>Users</h1>
    <a href="/user">Add User</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Email</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Course/Year</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->course_year }}</td>
            <td>{{ $user->status }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>