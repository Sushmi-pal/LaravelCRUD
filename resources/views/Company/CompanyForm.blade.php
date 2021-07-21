@extends('Company.Layout')
@section('CssSection')
    <link rel="stylesheet" type="text/css" href="{{asset('css/CompanyForm.css')}}">
@endsection
@section('BodySection')

    <div class="main">
        <div class="container-invoice">
            <form id="addPostForm" action="/invoice" method="post">
                @csrf
                <div id="company_title">
                    <h1>Company Info Page</h1>
                </div>

                <label for="Cname">Company Name</label><br>
                <input type="text" id="Cname" name="cname" class="cname" size="30"><br>
                <span id="SpanCname" class="error"></span> <br>

                <label for="Address">Address</label><br>
                <input type="text" id="Address" name="address" class="address" size="30"><br>
                <span id="SpanAddress" class="error"></span> <br>

                <label for="City">City</label><br>
                <input type="text" id="City" name="city" class="city" size="30"><br>
                <span id="SpanCity" class="error"></span> <br>

                <label for="Email">Email</label><br>
                <input type="text" id="Email" name="email" class="email" size="30"><br>
                <span id="SpanEmail" class="error"></span> <br>

                <label for="Contact">Contact num</label><br>
                <input type="text" id="Contact" name="phone" class="phone" size="30"><br>
                <span id="SpanContact" class="error"></span><br>

                <button class="btn btn-outline-info" type="submit" id="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
