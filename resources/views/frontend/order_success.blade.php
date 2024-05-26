@extends('frontend.layouts.app')
@section('content')
<div class="page-content mt-3">
        <div class="col-lg-6 m-auto mt-5">
            <div class="summary summary-cart text-center">
                <h3 class="text-success">Order Place Successfully</h3><!-- End .summary-title -->
                <p class="ft-regular fs-md text-success">আপনার অর্ডারটি  <span class="text-body text-dark">{{ session('order_id') }}</span> সফলভাবে সম্পন্ন হয়েছে আমাদের কল সেন্টার থেকে ফোন করে আপনার অর্ডারটি কনফার্ম করা হবে</p>
                <a class="btn btn-success mt-2 border-0" href="{{ url('/') }}">প্রোডাক্ট বাছাই করুন</a>
            </div><!-- End .summary -->
        </div>
</div>
@endsection



