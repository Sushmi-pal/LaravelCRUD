@extends('Company.Layout')
@section('CssSection')
    <link rel="stylesheet" type="text/css" href="{{asset('css/CompanyForm.css')}}">
@endsection
@section('BodySection')
    <div class="main">
        <div class="container-invoice">
            <form action="{{route('company.store')}}" method="post">
                @csrf
                <div id="company_title">
                    <h1>Company Info Page</h1>
                </div>

                <label for="Cname">Company Name</label><br>
                <input type="text" id="Cname" name="cname" class="cname" value="{{@old('cname')}}" size="30"><br>
                <span id="SpanCname" class="error">@error('cname'){{$message}}@enderror</span> <br>

                <label for="Address">Address</label><br>
                <input type="text" id="Address" name="address" class="address" value="{{@old('address')}}" size="30"><br>
                <span id="SpanAddress" class="error">@error('address'){{$message}}@enderror</span> <br>

                <label for="City">City</label><br>
                <input type="text" id="City" name="city" class="city" value="{{@old('city')}}" size="30"><br>
                <span id="SpanCity" class="error">@error('city'){{$message}}@enderror</span> <br>

                <label for="Email">Email</label><br>
                <input type="text" id="Email" name="email" class="email" value="{{@old('email')}}" size="30"><br>
                <span id="SpanEmail" class="error">@error('email'){{$message}}@enderror</span> <br>

                <label for="Contact">Contact num</label><br>
                <input type="text" id="Contact" name="phone" class="phone" value="{{@old('phone')}}" size="30"><br>
                <span id="SpanContact" class="error">@error('phone'){{$message}}@enderror</span><br>

                <button class="btn btn-outline-info" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
