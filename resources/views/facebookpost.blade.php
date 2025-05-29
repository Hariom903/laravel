<!DOCTYPE html>
<html>
<head>
    <title>Post to Facebook</title>
</head>
<body>
    <h1>Post to Facebook Page</h1>
   @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif
    <form action="{{ route('facebook.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>
        <label for="message">Photo :</label><br>
         <input type="file" name="img" id="img" required>
        <button type="submit">Post to Facebook</button>
    </form>
</body>
</html>
