<div class="black-bar">
    <a href="">CAMBODIA</a>
    @if (Auth::check())
    <a href="">{{Auth::User()->username}}</a>
        <a href="../../logout">Logout</a>
    @else
        <a href="../../signUp">Register</a>
        <a href="../../login">Login</a>
    @endif
</div>
<nav class="container">
    <div class="logo">
        <div class="wrapper">
            <img class="" src="../../images/logo.png" alt="">
        </div>
        <h1 class="titleFont">bookXchange</h1>
    </div>
    <div class="left">
        <a href="../../about">About Us</a>
        <a href="../../upload">Upload Book</a>
    </div>
</nav>
<div class="home">
    <a href="../../">Home</a>
</div>
<style>
    .home {
        display: flex;
        justify-content: center;
        background: rgb(228, 228, 228);
        padding: 1rem 0;
        column-gap: 8rem;
    }
    .black-bar {
        display: flex;
        justify-content: center;
        background: black;
        padding: 1rem 0;
        column-gap: 8rem;
    }
    .black-bar a {
        color: white;
    }
    nav {
        padding: 1rem 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .wrapper {
        width: 60px;
        aspect-ratio: 1/1;
        padding: 1rem;
        background: rgb(235, 233, 233);
        border-radius: 50%;
    }
    nav img {
        display: block;
        width: 60px;
        transform: translateY(-.3rem);
    }
    .logo {
        display: flex;
        align-items: center;
    }
    nav h1 {
        font-family: 'Merriweather', sans-serif;
        font-size: 2.5rem;
        margin-left: .5rem;
    }
    a {
        padding: 0 1rem;
        font-size: 1.2rem;
        font-family: 'Ysabeau Office', sans-serif;
        color: black;
        transition: 0.15s ease-in-out;
    }
    a:hover {
        color: orangered;
    }
</style>
