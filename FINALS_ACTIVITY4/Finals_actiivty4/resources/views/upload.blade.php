<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload (Single + Multiple)</title>
</head>
<body>
    <h1>Single Image Upload</h1>
    <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h1>Multiple Images Upload</h1>
    <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
        
    @csrf
        <input type="file" name="images[]" multiple required>
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Photo Gallery</title>
</head>
<body>
    <h1>Uploaded Photos</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div style="display: flex; flex-wrap: wrap;">
        @forelse($photos as $photo)
            <div style="margin: 10px; text-align: center;">
                <img src="{{ asset('images/' . $photo->image) }}" width="150" height="150" onerror="this.src='https://via.placeholder.com/150'"><br>
                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Delete this photo?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @empty
            <p>No photos uploaded yet.</p>
        @endforelse
    </div>

    <div>
        {{ $photos->links() }} 
    </div>

    <br>
    <a href="{{ url('/upload') }}">Go to Upload Page</a>
</body>
</html>
