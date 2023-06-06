<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  </head>

  <body>
    <h1>Notes</h1>
    <a href="/note">Add Notes</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">User ID</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($notes as $note)
          <tr>
            <td>{{ $note->user_id }}</td>
            <td>{{ $note->title }}</td>
            <td>{{ $note->content }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>