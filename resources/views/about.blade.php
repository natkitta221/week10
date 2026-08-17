<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เกี่ยวกับเรา</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        body {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe3e3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
       
        .card {
            border: none;
            border-radius: 20px !important;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 35px rgba(239, 68, 68, 0.1) !important;
            max-width: 500px;
            width: 100%;
        }
        
        .text-warning {
            color: #de4444 !important;
            font-weight: 700;
        }
        .btn-primary {
            background-color: #ff6b6b !important;
            border-color: #ff6b6b !important;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #fa5252 !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(250, 82, 82, 0.3);
        }
        p {
            color: #5c5050;
            line-height: 1.7;
        }
    </style>
</head>

<body class="bg-warning-subtle">

<div class="container mt-5">

    <div class="card shadow rounded-4">

        <div class="card-body">

            <h1 class="text-warning">👨‍💻 เกี่ยวกับเรา</h1>

            <p>
                เว็บไซต์นี้จัดทำขึ้นเพื่อศึกษา Laravel Framework
                และฝึกการสร้าง Routing และ View
            </p>

            <a href="/" class="btn btn-primary">
                กลับหน้าแรก
            </a>

        </div>

    </div>

</div>

</body>
</html>