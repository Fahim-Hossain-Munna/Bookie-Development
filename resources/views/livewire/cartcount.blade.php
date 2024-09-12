<div>
    {{-- The whole world belongs to you. --}}

    <span class="tp-product-count">
        {{ $cartcount }}
    </span>
</div>


{{-- App\Models\Cart::where('auth_id',Auth::guard('customer')->user()->id)->get()->count(); --}}
