@extends('master')
@section("content")
{{-- https://dart.dev/guides --}}
<style>
    .form{
        background-image: linear-gradient(90deg, rgba(39,27,111,1) 0%, rgba(87,25,45,1) 100%);
        margin-top: 150px;
        border: none;
     color: white;
border-radius: 20px;
    }
    form{
        margin-bottom: 20px;
        margin-top: 20px;

    }

</style>
<div class="container">
    <div class="row">
        <div class="col-sm-4  m-auto form">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">login</button>
              </form>
        </div>
    </div>
</div>
@endsection
