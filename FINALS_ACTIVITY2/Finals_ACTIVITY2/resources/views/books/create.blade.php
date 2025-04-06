<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9fafb;
            margin-bottom: 15px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(11, 91, 167);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

      
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div>
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" required>
            </div>

            <div>
                <label for="published_date">Published Date:</label>
                <input type="date" name="published_date" id="published_date" required>
            </div>

            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

</body>
</html>
