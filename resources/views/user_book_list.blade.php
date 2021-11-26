<html>
<head>
    <title>User's book list</title>
</head>
<body>
    <div>
        <h1> User's book list</h1>
    </div>

{{--    {{ var_dump($books) }}--}}

    <div>
        <a href="{{route('home')}}">Home</a>
    </div>

   <div>
       <br>
       <u1>
           @foreach($books as $book)   {{-- '$books' is the variable from the 'BookMainController -> index()'--}}
           <li><a href="/books/1">{{ $book->title }}</a></li>  {{-- Iterates through every book in the DB and shows the title of the book --}}
           @endforeach
       </u1>
   </div>

</body>
</html>
