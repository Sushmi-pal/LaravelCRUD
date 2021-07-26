@extends('Company.Layout')
@section('CssSection')
    <link rel="stylesheet" type="text/css" href="{{asset('css/CompanyForm.css')}}">
@endsection
@section('BodySection')

    <div class="main">
        <div class="container-invoice">
            <form action="{{route('company.update',$CompanyEditArr->id)}}" method="post">
                @csrf
                @method('PUT')
                <div id="company_title">
                    <h1>Company Info Page</h1>
                </div>
                @if(isset($CompanyEditArr)&&count((array)$CompanyEditArr))

                <label for="Cname">Company Name</label><br>
                <input type="text" id="Cname" name="cname" class="cname" value="{{$CompanyEditArr->CompanyName}}" size="30"><br>
                <span id="SpanCname" class="error"></span> <br>

                <label for="Address">Address</label><br>
                <input type="text" id="Address" name="address" class="address" value="{{$CompanyEditArr->Address}}" size="30"><br>
                <span id="SpanAddress" class="error"></span> <br>

                <label for="City">City</label><br>
                <input type="text" id="City" name="city" class="city" value="{{$CompanyEditArr->City}}" size="30"><br>
                <span id="SpanCity" class="error"></span> <br>

                <label for="Email">Email</label><br>
                <input type="text" id="Email" name="email" class="email" value="{{$CompanyEditArr->Email}}" size="30"><br>
                <span id="SpanEmail" class="error"></span> <br>

                <label for="Contact">Contact num</label><br>
                <input type="text" id="Contact" name="phone" class="phone" value="{{$CompanyEditArr->ContactNumber}}" size="30"><br>
                <span id="SpanContact" class="error"></span><br>
                @endif

                <button type="submit">Update</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

        </div>
    </div>
@endsection
