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

@section('content')
        <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                    
                </div>
            
                <div class="col-md-10 ">
                    <div class="card mt-2">
                        
                        @include('layouts.role')
                    </div>
                </div>
            </div>
        </div>
@endsection

