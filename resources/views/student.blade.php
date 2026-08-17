<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ประวัตินักศึกษา</title>

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
            border-radius: 25px !important;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 15px 35px rgba(239, 68, 68, 0.1) !important;
            max-width: 500px;
            width: 100%;
            padding: 10px;
        }
       
        .rounded-circle {
            border-color: #ff8787 !important;
            box-shadow: 0 5px 15px rgba(255, 135, 135, 0.4);
        }
        .text-primary {
            color: #de4444 !important;
            font-weight: 700;
        }
       
        .table {
            border-color: #ffe3e3;
        }
        .table th {
            background-color: #fff5f5 !important;
            color: #e05252;
            font-weight: 600;
            width: 40%;
        }
        .table td {
            color: #5c5050;
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

<body class="bg-primary-subtle">

<div class="container mt-5">

    <div class="card shadow-lg rounded-4">

        <div class="card-body text-center">

            <img src="https://i.pravatar.cc/180"
                class="rounded-circle border border-4 border-primary mb-3">

            <h2 class="text-primary">
                🎓 ประวัตินักศึกษา
            </h2>

            <table class="table table-bordered mt-4">

                <tr>
                    <th>รหัสนักศึกษา</th>
                    <td>{{ $id }}</td>
                </tr>

                <tr>
                    <th>ชื่อ-สกุล</th>
                    <td>น.ส.ณัฐกฤตา กิ่งชัยภูมิ</td>
                </tr>

                <tr>
                    <th>สาขา</th>
                    <td>ระบบสารสนเทศ</td>
                </tr>

                <tr>
                    <th>คณะ</th>
                    <td>บริหารธุรกิจ</td>
                </tr>

            </table>

            <a href="/" class="btn btn-primary">
                กลับหน้าแรก
            </a>

        </div>

    </div>

</div>

</body>
</html>