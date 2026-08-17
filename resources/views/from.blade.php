@extends('layout')
@section('title', 'เขียนบทความใหม่')
@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/insert">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">เนื้อหา</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" cols="30" rows="5">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog2" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>
@endsection