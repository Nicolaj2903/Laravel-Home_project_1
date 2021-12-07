<html>
<head>
    <title>Show a book</title>
</head>

<body>

    <h1>{{ $book->title }}</h1>
    <a href="{{route('home')}}">Back</a>
    <h2>Books</h2>


    <ul>
{{--        @foreach($book->authors as $author)--}}
        <li>{{$book->title}} - <a href="#">Remove</a></li>
{{--        @endforeach--}}

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
