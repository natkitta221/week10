<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Natkitta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Mitr', sans-serif;
            background-color: #fcf8f8;
        }
        .navbar {
            background: linear-gradient(135deg, #fff5f5 0%, #ffeef0 100%) !important;
            border-bottom: 2px solid #ffd8db;
            box-shadow: 0 4px 20px rgba(224, 75, 75, 0.05);
            padding: 0.9rem 1rem;
        }
        .navbar-brand {
            color: #8a1d1d !important;
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }
        .nav-link {
            color: #5c4040 !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: #e04b4b !important;
            background-color: #fff1f2;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Natkitta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #ffd8db;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link" href="/">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about2')}}">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog2')}}">บทความ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white px-3 py-1.5" href="/create" style="background-color: #e04b4b; border: none; color: white !important; font-weight: 500;">เขียนบทความใหม่</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container py-5">
       @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

