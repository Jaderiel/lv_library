<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  </head>

  <body>
    <h1>Add Books</h1>
    <form action="/book" method="POST">
      @csrf
      <table class="table">
        <tr>
          <td>Title</td>
          <td>
            <input name="title" type="text" placeholder="Enter Title" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Description</td>
          <td>
            <input name="description" type="text" placeholder="Enter Description" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Author</td>
          <td>
            <input name="author" type="text" placeholder="Enter Author's Name" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Cover</td>
          <td>
            <input name="cover" type="file" placeholder="Enter Cover" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>Year</td>
          <td>
            <input name="year" type="text" placeholder="Enter Year" class="form-control"/>
          </td>
        </tr>

        <tr>
          <td>url</td>
          <td>
            <input name="url" type="text" placeholder="Enter url" class="form-control"/>
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