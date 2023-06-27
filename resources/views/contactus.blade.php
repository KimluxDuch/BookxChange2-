@extends('layout.master')
@section('content')
    <div class="fill">
        <form >
            <div class="grey">
                <h1>Contact Us</h1>
            </div>
            <div class="bg">
                <p>If you have any questions or concern don't be hesitate to contact us!!</p>
                <a href="" class="nav-link"> <i class="fa fa-phone"></i> Tel: 012 345 678 </a>
                <p><br>Or you can contact us through social media: </p>
                <a href="" class="nav-link"> <i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="" class="nav-link"><i class="fa-brands fa-twitter"></i> Twitter</a>
            </div>
        </form>
    </div>
    <style>
        .fill .grey {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background: rgb(241, 241, 241);
        }

        .fill h1 {
            padding: 1rem;
            font-weight: normal;
        }
        .fill {
            padding: 4rem 0;
            display: grid;
            place-items: center;
            background: skyblue;
            font-family: 'Ysabeau Office', sans-serif;
        }

        .fill .bg {
            background: white;
            padding: 2rem;
            border-bottom: 1px solid rgb(182, 182, 182);
            border-top: 1px solid rgb(182, 182, 182);
        }
    </style>
@endsection
