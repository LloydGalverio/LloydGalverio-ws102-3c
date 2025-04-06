<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 70%;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 1.1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f9fafb;
        }


        button {
            background-color: rgb(81, 109, 231);
            color: white;
            font-size: 1.2em;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

       

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

    
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ $book->title }}" required>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" value="{{ $book->author }}" required>
            </div>

            <div class="form-group">
                <label for="published_date">Published Date:</label>
                <input type="text" name="published_date" id="published_date" value="{{ $book->published_date }}" required>
            </div>

            <button type="submit">Save Changes</button>
        </form>
    </div>

</body>
</html>
