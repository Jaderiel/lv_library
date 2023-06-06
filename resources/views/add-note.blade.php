<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  </head>

  <body>
    <h1>Add Notes</h1>
    <form action="/note" method="POST">
      @csrf
      <table class="table">
      <tr>
          <td>User ID</td>
          <td>
            <input name="user_id" type="text" placeholder="Enter Title" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Title</td>
          <td>
            <input name="title" type="text" placeholder="Enter Title" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Content</td>
          <td>
            <input name="content" type="text" placeholder="Enter Content" class="form-control"/>
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