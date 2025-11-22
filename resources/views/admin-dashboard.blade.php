@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Admin</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="/send-email">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Tujuan</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ session('user_email') }}" required readonly>
        </div>
        <button type="submit" class="btn btn-success">Kirim Email</button>
    </form>
</div>
@endsection
