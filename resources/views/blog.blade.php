<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>บทความ</title>

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
            box-shadow: 0 15px 35px rgba(239, 68, 68, 0.1) !important;
            max-width: 550px;
            width: 100%;
        }
        .text-success {
            color: #de4444 !important;
            font-weight: 700;
        }
        
        .list-group-item {
            border: 1px solid #ffe3e3;
            margin-bottom: 8px;
            border-radius: 12px !important;
            color: #4a3f3f;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .list-group-item:hover {
            background-color: #fff0f0;
            color: #de4444;
            transform: translateX(5px);
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
    </style>
</head>

<body class="bg-success-subtle">

<div class="container mt-5">

    <div class="card shadow-lg rounded-4">

        <div class="card-body">

            <h1 class="text-success">📝 บทความทั้งหมด</h1>

            <div class="list-group mt-3">

                <div class="list-group-item">
                    🌸 Laravel Framework เบื้องต้น
                </div>

                <div class="list-group-item">
                    🚀 Routing ใน Laravel
                </div>

                <div class="list-group-item">
                    💙 Blade Template คืออะไร
                </div>

            </div>

            <br>

            <a href="/" class="btn btn-primary">
                กลับหน้าแรก
            </a>

        </div>

    </div>

</div>

</body>
</html>