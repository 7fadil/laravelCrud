@extends('layout.layout')
@section('myContent')
    <div class="mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
            Add new
        </button>
        <a href="" class="btn btn-outline-secondary mb-2">Bulk upload</a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create student bio-data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First name</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="firstName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Surname name</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="surName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Other name</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="otherName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone number</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="firstNumber" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alternative phone number</label>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" name="secNumber" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Other name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alternative number</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
