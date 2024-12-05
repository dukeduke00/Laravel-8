@extends('layout')

@section("nazivStranice")
    Prodavnica
@endsection


@section("sadrzajStranice")
    <p>Dobrodosli u moj Shop</p>


    @foreach($allProducts as $product)
        {{ $product->name }}
        <br>
        {{ $product->description }}
        <br>
        Kolicina: {{ $product->amount }}
        <br>
        Cijena: {{ $product->price }}
        <br><br>
    @endforeach


@endsection
