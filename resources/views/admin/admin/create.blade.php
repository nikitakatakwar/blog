@extends('layouts.app')
<style>
    .my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
.card:hover{
            transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

@section('content')
        <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')

                </div>

                <div class="col-md-10 ">
                    <div class="card mt-2">
                        
                        @include('layouts.admin.create')
                    </div>
                </div>
            </div>
        </div>
@endsection

