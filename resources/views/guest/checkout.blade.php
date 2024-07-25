{{-- resources/views/checkout.blade.php --}}
@extends('layouts.user')

@section('content')
<div class="container">
    <h1>Thanh toán COD</h1>
    <p>Nhấn vào nút dưới đây để hoàn tất thanh toán.</p>

    <form action="{{ route('cart.checkout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Thanh toán COD</button>
    </form>
</div>
@endsection
