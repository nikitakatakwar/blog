@extends('layouts.app')
<style>
    .my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
</style>

            @section('content')
                    <div class="container bg-dark p-5">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                @extends('layouts.nav')
                            </div>
                            <div class="col-md-12 ">
                                <div class="card mt-2">
                                @include('layouts.emp')
                                </div>
                            </div>
                        </div>
                    </div>
            @endsection







