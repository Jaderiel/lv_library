<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>

    <body>
        <h1>Books</h1>
        <a href="/book">add book</a>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Cover</th>
            <th scope="col">Year</th>
            <th scope="col">Url</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                <td>{{ $book -> title}}</td>
                <td>{{ $book -> description}}</td>
                <td>{{ $book -> author}}</td>
                <td>{{ $book -> cover}}</td>
                <td>{{ $book -> year}}</td>
                <td>{{ $book -> url}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </body>
</html>
