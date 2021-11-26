<html>
<head>
    <title>Show a book</title>
</head>

<body>
    <h1>{{ $book->title }}</h1>

    <h2>Books</h2>
    <ul>
        <li>Book 1</li>
        <li>Book 2</li>
    </ul>

    <h3>Add book</h3>
    <form>
        <label>Book</label>
        <input type="text" placeholder="Book name">
    </form>
</body>
</html>
