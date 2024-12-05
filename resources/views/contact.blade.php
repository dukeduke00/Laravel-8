@extends("layout")

@section("nazivStranice")
    Kontakt
@endsection


@section("sadrzajStranice")

    <form class="m-5">
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <input type="text" name="message" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <iframe class="m-4 container text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2004.2319497979934!2d18.083379489046294!3d44.73161060367578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475e823b2ed04757%3A0xe81b7ad6a5d32bf2!2sPark%20Hotel!5e0!3m2!1sen!2sba!4v1732039710409!5m2!1sen!2sba" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>@endsection


