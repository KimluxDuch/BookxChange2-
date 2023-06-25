@extends('layout.master')
@section('content')
    <div class="fill">
        <form action="/loginUser" method="POST">
            @csrf
            <div class="grey">
                <h1>Login</h1>
            </div>
            <div class="bg">
                <div>
                    <h2>Email</h2>
                    <input type="text" placeholder="example@gmail.com" name="email">
                </div>
                <div>
                    <h2>Password</h2>
                    <input type="text" placeholder="123" name="password">
                </div>
            </div>
            <div class="grey">
                <div class="btn">
                    <button type="submit">Login</button>
                </div>
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
        .fill .btn {
            display: flex;
            justify-content: center;
        }
        .fill button {
            padding:  0.8rem 1rem;
            border: none;
            font-size: .8rem;
            color: white;
            background: rgb(0, 81, 255);
            font-family: 'Merriweather', sans-serif;
            border-radius: 6px;
            cursor: pointer;
        }
        .fill {
            padding: 4rem 0;
            display: grid;
            place-items: center;
            background: skyblue;
        }
        .fill .bg {
            background: white;
            padding: 2rem;
            border-bottom: 1px solid rgb(182, 182, 182);
            border-top: 1px solid rgb(182, 182, 182);
        }
        .fill form {
        }
        .fill h2 {
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.1rem;
        }
        .fill input {
            font-family: 'Ysabeau Office', sans-serif;
            width: 400px;
            padding: .5rem;
            padding-top: .2rem;
            font-size: 1.1rem;
            margin-bottom: .5rem;
        }
    </style>
@endsection
