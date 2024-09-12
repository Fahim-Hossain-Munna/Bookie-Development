@extends('layouts.frontmaster')

@section('content')


<x-front-header-title title="Cart"></x-front-header-title>

@livewire('boostquantity',['carts' => $carts])

@endsection
