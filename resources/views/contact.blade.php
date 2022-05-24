@extends('layouts.app')

@section('content')

<div class="container pt-4" style="height: 100vh">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-4">
            <div class="card box-shadow">
                <div class="card-header text-center fs-4">
                    Contact With <span class="badge bg-warning text-dark">Zahid Raju</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('contactsent') }}" method="POST">
                        @csrf
                        <div class="col p-1 ">
                            <input type="text" name="name" class="form-control box-shadow text-center fs-5"
                                placeholder="Your name">
                        </div>
                        <div class="col p-1 ">
                            <input type="text" name="phone" class="form-control box-shadow text-center fs-5"
                                placeholder="Your Phone Number">
                        </div>
                        <div class="col p-1">
                            <input type="email" name="email" class="form-control box-shadow text-center fs-5"
                                placeholder="Your Email">
                        </div>
                        <div class="col p-1">
                            <textarea class="form-control box-shadow text-center fs-5" name="message" rows="5" cols="4"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="col p-1 text-center">
                            <button type="submit" class="button-17 bg-warning fs-5">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection