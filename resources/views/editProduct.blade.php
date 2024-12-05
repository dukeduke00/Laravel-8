@extends('layout')

@section('nazivStranice')
    Uredi Proizvod
@endsection

@section('sadrzajStranice')

    <form  style="margin: 100px 600px"  class=" d-flex justify-content-center gap-3 flex-column" method="POST" action="{{ route('updateProizvod', ['product' => $singleProduct->id]) }}">

        <div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger"> {{ $error }}</p>
                @endforeach

            @endif
        </div>

        {{ csrf_field() }}
        <input name="name" type="text" placeholder="Unesite naziv proizvoda" value="{{ old("name", $singleProduct->name) }}">
        <input name="description" type="text" placeholder="Unesite opis" value="{{ old("description", $singleProduct->description) }}">
        <input name="amount" type="number" placeholder="Unesite kolicinu proizvoda" value="{{ old("amount", $singleProduct->amount) }}">
        <input name="price" type="number" step="0.01" placeholder="Unesite cijenu " value="{{ old("price", $singleProduct->price) }}">
        <input name="image" type="text" placeholder="Unesite fotografije" value="{{ old("image", $singleProduct->image) }}">

        <button>Izmijeni podatke proizvoda</button>
    </form>

@endsection
