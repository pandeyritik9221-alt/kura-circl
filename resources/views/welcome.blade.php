<!DOCTYPE html>
<html>
<head>
    <title>Test Input</title>
</head>
<body>
    <h1>Test Input Form</h1>

    <!-- Success Message -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Input Form -->
    <form action="{{ route('test.submit') }}" method="POST">
        @csrf
        <input type="text" name="input_text" placeholder="Enter something" required>
        <button type="submit">Submit</button>
    </form>

    <hr>

    <!-- Show all entries from tests table -->
    <h2>All Entries:</h2>
    @if($tests->isEmpty())
        <p>No entries yet.</p>
    @else
        <ul>
            @foreach($tests as $test)
                <li>{{ $test->input_text }} ({{ $test->created_at }})</li>
            @endforeach
        </ul>
    @endif
</body>
</html>