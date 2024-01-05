@extends('layouts.error-app')

@section('content')
    <div class="flex flex-col items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
        <div class="flex flex-col items-center">
            <h2 class="text-9xl text-text-light mb-3">404</h2>
            <p class="text-xl text-text-light mb-3">Halaman tidak di temukan.</p>
            <a href="{{ route('index') }}" class="text-primary-color">Kembali ke halaman utama</p>
        </div>
    </div>
@endsection
