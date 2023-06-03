<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  </head>

  <body>
    <h1>Create User</h1>
    <form action="/user" method="POST">
      @csrf
      <table class="table">
        <tr>
          <td>Email</td>
          <td>
            <input name="email" type="email" placeholder="Enter Email" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Password</td>
          <td>
            <input name="password" type="password" placeholder="Enter Password" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>First Name</td>
          <td>
            <input name="firstname" type="text" placeholder="Enter First Name" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td>
            <input name="lastname" type="text" placeholder="Enter Last Name" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Course/Year</td>
          <td>
            <input name="courseYear" type="text" placeholder="Enter Course/Year" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td colspan="2" class="text-center">
            <button class="btn btn-success">Save</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>