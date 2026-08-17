@extends('layout')

@section('title', 'บทความทั้งหมด')

@section('content')
    <!-- Import Google Fonts for modern look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --red-primary: #e04b4b;
            --red-primary-hover: #c93b3b;
            --red-light: #fff5f5;
            --red-soft-bg: #ffeef0;
            --red-border: #ffd8db;
            --text-main: #333333;
            --text-dark-red: #8a1d1d;
            --shadow-subtle: 0 8px 30px rgba(224, 75, 75, 0.05);
            --shadow-hover: 0 12px 35px rgba(224, 75, 75, 0.12);
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Mitr', sans-serif;
            background-color: #fcf8f8;
            color: var(--text-main);
        }

        .page-header {
            background: linear-gradient(135deg, #fff5f5 0%, #ffeef0 100%);
            border-left: 5px solid var(--red-primary);
            border-radius: 12px;
            padding: 1.5rem 2rem;
            margin-bottom: 2.5rem;
            box-shadow: var(--shadow-subtle);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .page-header:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }

        .page-header h2 {
            font-weight: 600;
            color: var(--text-dark-red);
            margin: 0;
            font-size: 1.75rem;
        }

        .page-header p {
            margin: 0.25rem 0 0 0;
            color: #8c7676;
            font-size: 0.9rem;
        }

        .table-container {
            background: #ffffff;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--red-border);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .table-container:hover {
            box-shadow: var(--shadow-hover);
        }

        .custom-table {
            width: 100%;
            margin-bottom: 0;
            vertical-align: middle;
            border-collapse: separate;
            border-spacing: 0 0.75rem;
        }

        .custom-table th {
            font-weight: 600;
            color: var(--text-dark-red);
            background-color: var(--red-light);
            border: none;
            padding: 1rem 1.25rem;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        .custom-table th:first-child {
            border-radius: 10px 0 0 10px;
        }

        .custom-table th:last-child {
            border-radius: 0 10px 10px 0;
        }

        .custom-table tbody tr {
            transition: all 0.2s ease;
            background-color: #ffffff;
        }

        .custom-table tbody tr:hover {
            background-color: var(--red-light);
            transform: scale(1.005);
        }

        .custom-table td {
            padding: 1.25rem;
            border-top: 1px solid #f8ecee;
            border-bottom: 1px solid #f8ecee;
            color: var(--text-main);
            font-size: 0.95rem;
        }

        .custom-table td:first-child {
            border-left: 1px solid #f8ecee;
            border-radius: 12px 0 0 12px;
            font-weight: 500;
        }

        .custom-table td:last-child {
            border-right: 1px solid #f8ecee;
            border-radius: 0 12px 12px 0;
        }

        /* Modern Badges & Buttons */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .status-active {
            background-color: #e6fcf5;
            color: #0ca678;
            border: 1px solid #c3fae8;
        }

        .status-active:hover {
            background-color: #c3fae8;
            color: #087f5b;
            transform: translateY(-1px);
        }

        .status-inactive {
            background-color: #f1f3f5;
            color: #495057;
            border: 1px solid #e9ecef;
        }

        .status-inactive:hover {
            background-color: #e9ecef;
            color: #212529;
            transform: translateY(-1px);
        }

        .btn-edit {
            background-color: transparent;
            color: #d97706;
            border: 1px solid #fde68a;
            padding: 0.5rem 1.25rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.2s ease;
        }

        .btn-edit:hover {
            background-color: #fef3c7;
            color: #b45309;
            border-color: #fcd34d;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(217, 119, 6, 0.08);
        }

        .btn-delete {
            background-color: transparent;
            color: #e03131;
            border: 1px solid #ffa8a8;
            padding: 0.5rem 1.25rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.2s ease;
        }

        .btn-delete:hover {
            background-color: #fff5f5;
            color: #c22525;
            border-color: #ff6b6b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(224, 49, 49, 0.08);
        }

        .content-preview {
            color: #666;
            max-width: 350px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-block;
        }
    </style>

    <div class="page-header">
        <div>
            <h2>บทความทั้งหมด</h2>
            <p>จัดการและเผยแพร่เรื่องราวบทความในระบบ</p>
        </div>
        <a href="/create" class="btn btn-danger px-4 py-2" style="background-color: var(--red-primary); border: none; border-radius: 20px; font-weight: 500; transition: all 0.2s ease; box-shadow: 0 4px 15px rgba(224, 75, 75, 0.2);" onmouseover="this.style.backgroundColor='var(--red-primary-hover)'; this.style.transform='translateY(-1px)'" onmouseout="this.style.backgroundColor='var(--red-primary)'; this.style.transform='translateY(0)'">
            + เขียนบทความใหม่
        </a>
    </div>

    <div class="table-container table-responsive">
        <table class="table custom-table text-center align-middle">
            <thead>
                <tr>
                    <th scope="col" style="width: 25%">ชื่อบทความ (Title)</th>
                    <th scope="col" style="width: 35%">เนื้อหา (Content)</th>
                    <th scope="col" style="width: 15%">สถานะ (Status)</th>
                    <th scope="col" style="width: 12%">แก้ไข (Edit)</th>
                    <th scope="col" style="width: 13%">การจัดการ (Delete)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td class="text-start ps-4" style="color: var(--text-dark-red); font-weight: 600;">
                            {{ $item->title }}
                        </td>
                        <td class="text-start">
                            <span class="content-preview">{{ Str::limit($item->content, 60) }}</span>
                        </td>
                        <td>
                            @if ($item->status)
                                <a href="{{ route('change', $item->id) }}" class="status-badge status-active">
                                    <span style="width: 8px; height: 8px; border-radius: 50%; background-color: #0ca678; display: inline-block;"></span>
                                    เผยแพร่
                                </a>
                            @else
                                <a href="{{ route('change', $item->id) }}" class="status-badge status-inactive">
                                    <span style="width: 8px; height: 8px; border-radius: 50%; background-color: #868e96; display: inline-block;"></span>
                                    ไม่เผยแพร่
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn-edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path></svg>
                                แก้ไข
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('delete', $item->id) }}" class="btn-delete"
                               onclick="return confirm('คุณต้องการลบบทความนี้ {{ $item->title }} จริงหรือไม่?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                ลบ
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
