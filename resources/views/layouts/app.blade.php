<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('internautes.index') }}">Hotel Booking App</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('internautes.index') }}">Internautes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservations.index') }}">Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservations.create') }}">ajouter Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hotels.index') }}">Hôtels</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>