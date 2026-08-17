@extends('layout')
@section('title', 'แก้ไขบทความ')
@section('content')
    <style>
        :root {
            --red-primary: #e04b4b;
            --red-primary-hover: #c93b3b;
            --red-light: #fff5f5;
            --red-soft-bg: #ffeef0;
            --red-border: #ffd8db;
            --text-dark-red: #8a1d1d;
        }

        .edit-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 8px 30px rgba(224, 75, 75, 0.05);
            border: 1px solid var(--red-border);
            max-width: 650px;
            margin: 0 auto;
        }

        .form-title {
            color: var(--text-dark-red);
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--red-soft-bg);
            padding-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #5c4040;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            font-family: inherit;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--red-primary);
            box-shadow: 0 0 0 4px rgba(224, 75, 75, 0.15);
        }

        .btn-submit {
            background-color: var(--red-primary);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 500;
            transition: all 0.2s ease;
            box-shadow: 0 4px 15px rgba(224, 75, 75, 0.15);
        }

        .btn-submit:hover {
            background-color: var(--red-primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(224, 75, 75, 0.25);
        }

        .btn-cancel {
            background-color: #f1f3f5;
            color: #495057;
            border: 1px solid #e9ecef;
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .btn-cancel:hover {
            background-color: #e9ecef;
            color: #212529;
            transform: translateY(-1px);
        }
    </style>

    <div class="edit-card">
        <h2 class="form-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit" style="color: var(--red-primary);"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            แก้ไขบทความ
        </h2>
        
        @if ($errors->any())
            <div class="alert alert-danger" style="border-radius: 10px; background-color: #fff5f5; border-color: #ffc9c9; color: #c92a2a;">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('update', $blog->id)}}">
            @csrf
            <div class="mb-4">
                <label for="title" class="form-label">ชื่อบทความ</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$blog->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="form-label">เนื้อหา</label>
                <textarea name="content" cols="30" rows="6" class="form-control @error('content') is-invalid @enderror">{{$blog->content}}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex gap-2 justify-content-end mt-4">
                <a href="/blog2" class="btn-cancel">ยกเลิก</a>
                <input type="submit" value="บันทึกการแก้ไข" class="btn-submit">
            </div>
        </form>
    </div>
@endsection