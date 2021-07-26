@extends('Company.Layout')
@section('CssSection')
    <link rel="stylesheet" type="text/css" href="{{asset('css/CompanyForm.css')}}">
@endsection
@section('BodySection')


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden=false>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit company details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="sno" id="sno" class="sno">
                        <div class="form-floating">
                            Company Name:<br> <input type="text" id="cname" name="cname" class="cname" size="50"
                                                     placeholder="Company Name"><br><br>
                            Address: <br><input type="text" id="address" name="address" class="address" size="50"
                                                placeholder="Address"><br><br>
                            City: <br><input type="text" id="city" name="city" class="city" size="50"
                                             placeholder="City"><br><br>
                            Email: <br><input type="text" id="email" name="email" class="email" size="50"
                                              placeholder="Email"><br><br>
                            Contact number: <br><input type="text" id="phone" name="phone" class="phone" size="50"
                                                       placeholder="Phone"><br><br>
                        </div>
                        <button type="button" id="submit" name="update" class="btn btn-primary submit">Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <br><br>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">SN</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Contact</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody id="CompanyTable">
        <?php $index = 1;?>
        @foreach($CompanyArr as $EachCompany)
            <tr>
                <td>{{$index}}</td>
                <td>{{$EachCompany->CompanyName}}</td>
                <td>{{$EachCompany->Address}}</td>
                <td>{{$EachCompany->Email}}</td>
                <td>{{$EachCompany->City}}</td>
                <td>{{$EachCompany->ContactNumber}}</td>
                <td><a href="{{route('company.delete', $EachCompany->id)}}">Delete</a> /
                    <a href="{{route('company.edit', $EachCompany->id)}}">Edit</a></td>
            </tr>
            <?php $index++;?>
        @endforeach<br>
        </tbody>
    </table>
@endsection
