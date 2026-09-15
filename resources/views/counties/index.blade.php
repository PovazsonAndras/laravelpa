<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    
</div>
<!DOCTYPE html>
<html>
<head>
    <title>Megyék</title>
</head>
<body>
    <h1>Megyék listája</h1>
    <ul>
        @foreach ($counties as $county)
            <li>{{ $county->name }}</li>
        @endforeach
    </ul>
</body>
</html>


