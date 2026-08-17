<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe3e3 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .main-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .navbar {
            background: linear-gradient(90deg, #ff6b6b 0%, #ff8787 100%) !important;
            box-shadow: 0 4px 12px rgba(255, 107, 107, 0.2);
            padding: 12px 0;
        }
        
        .navbar .btn {
            border: none !important;
            margin-left: 5px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .navbar .btn-light { color: #de4444; background-color: #fff; }
        .navbar .btn-warning { color: #fff; background-color: #ff922b; }
        .navbar .btn-success { color: #fff; background-color: #51cf66; }
        .navbar .btn-danger { color: #fff; background-color: #ff6b6b; box-shadow: 0 0 0 1px rgba(255,255,255,0.4); }
        
        .navbar .btn:hover {
            transform: translateY(-1px);
            opacity: 0.95;
        }

        
        .card {
            border: none;
            border-radius: 25px !important;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.1) !important;
            max-width: 650px;
            width: 100%;
            padding: 20px;
        }
        .text-primary {
            color: #de4444 !important;
            font-weight: 800;
        }
        .lead {
            color: #665858;
        }
        
        .btn-success {
            background-color: #ff6b6b !important;
            border-color: #ff6b6b !important;
            border-radius: 12px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }
        .btn-success:hover {
            background-color: #fa5252 !important;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(250, 82, 82, 0.4);
        }
    </style>
</head>

<body class="bg-info-subtle">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🌈 My Website</a>

        <div>
            <a href="/" class="btn btn-light btn-sm">หน้าแรก</a>
            <a href="/about" class="btn btn-warning btn-sm">เกี่ยวกับเรา</a>
            <a href="/blog" class="btn btn-success btn-sm">บทความ</a>
            <a href="/student/65001" class="btn btn-danger btn-sm">นักศึกษา</a>
        </div>
    </div>
</nav>

<div class="main-wrapper">
    <div class="container">

        <div class="card shadow-lg border-0 rounded-4 mx-auto">

            <div class="card-body text-center">

                <h1 class="text-primary">🎉 ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>

                <p class="lead">
                    เว็บไซต์ตัวอย่างที่พัฒนาด้วย Laravel Framework และ Bootstrap 5
                </p>

                <a href="/blog" class="btn btn-success">อ่านบทความ</a>

            </div>

        </div>

    </div>
</div>

</body>
</html>