<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
        }

        .add-book-link {
            display: inline-block;
            margin-bottom: 20px;
            background-color:rgb(81, 109, 231);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
            background-color: #f9fafb;
            padding: 15px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .book-title {
            font-weight: bold;
            color:rgb(3, 31, 83);
            font-size: 18px;
        }

        .book-details {
            font-size: 16px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .actions a,
        .actions button {
            padding: 6px 12px;
            font-size: 14px;
            text-decoration: none;
            border: none;
            background-color:rgb(81, 109, 231);
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .actions button {
            background-color:rgb(252, 21, 21); /* Red color for delete button */
        }

     
      
    </style>
</head>
<body>

    <div class="container">
        <h1>All Books</h1>
        <a href="{{ route('books.create') }}" class="add-book-link">Add New Book</a>

        <ul>
            @foreach ($books as $book)
                <li>
                    <div>
                        <span class="book-title">
                            <a href="{{ route('books.show', $book->id) }}" class="book-title">{{ $book->title }}</a>
                        </span> 
                        <span class="book-details">by {{ $book->author }} ({{ $book->published_date }})</span>
                    </div>

                    <div class="actions">
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
