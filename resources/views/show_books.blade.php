<html>
<head>
    <title>Show a book</title>
</head>

<body>

    <h1>{{ $book->title }}</h1>
    <a href="{{route('home')}}">Back</a>
    <h2>Books</h2>


    <ul>
        <li>Book 1 - <a href="#">Remove</a></li>
        <li>Book 2 - <a href="#">Remove</a></li>
    </ul>

    <br>
    <h3>Add book</h3>
    <form action="/books/{{ $book->id }}/authors" method="post">
        @csrf
        <label>Book:</label>
        <input type="text" name="name" placeholder="Book name">
        <button type="submit">Add</button>
    </form>
</body>
</html>
