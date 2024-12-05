@extends("layout")  {{--sadrzi fajl layout u kom je navigacija i footer--}}

@section("nazivStranice") {{-- u layoutu smo yiled da je title naziv stranice --}}
    Dodavanje proizvoda
@endsection


@section("sadrzajStranice") {{-- u layoutu smo stavili (yiled) da je sadrzajStranice sve izmedju navigacije i footer --}}



<form  style="margin: 100px 600px"  class=" d-flex justify-content-center gap-3 flex-column" method="POST" action="{{ route("snimanjeOglasa") }}">

    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger"> {{ $error }}</p>
            @endforeach

        @endif
    </div>

    {{ csrf_field() }}
    <input name="name" type="text" placeholder="Unesite naziv proizvoda" value="{{ old("name") }}">
    <input name="description" type="text" placeholder="Unesite opis" value="{{ old("description") }}">
    <input name="amount" type="number" placeholder="Unesite kolicinu proizvoda" value="{{ old("amount") }}">
    <input name="price" type="number" step="0.01" placeholder="Unesite cijenu " value="{{ old("price") }}">
    <input name="image" type="text" placeholder="Unesite fotografije" value="{{ old("image") }}">

    <button>Dodaj proizvod</button>
</form>


@endsection
