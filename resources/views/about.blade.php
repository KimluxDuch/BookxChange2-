@extends('layout.master')
@section('content')
    <div class="about">
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to BookXchange! <br>
   &emsp;&emsp;&emsp;Book X Change is a revolutionary platform dedicated to connecting book enthusiasts and promoting a culture of reading and knowledge sharing.
Our platform provides a seamless and user-friendly experience for individuals to browse through an extensive collection of books and connect with other members. 
<br><br>&emsp;&emsp;&emsp;Mission: Our mission is to create a vibrant community where individuals can easily exchange books, discover new literary treasures, and connect with like-minded readers.
At Book X Change, we understand the joy of immersing oneself in the pages of a captivating book and the desire to share that experience with others;and could be to promote literacy, knowledge sharing, and a love for books among readers. It might include encouraging reading habits, supporting authors and publishers, fostering a sense of community, and providing resources for book enthusiasts.
<br><br>&emsp;&emsp;&emsp;Goal: The goal of Book X Change could vary depending on your specific vision. Some potential goals might include:
<br>Building a large and engaged user base of readers and book lovers.
  <br>&emsp;&emsp;&emsp;Providing a platform for authors to promote their work and connect with readers.
  <br>&emsp;&emsp;&emsp;Offering a wide range of books across various genres and formats.
  <br>&emsp;&emsp;&emsp;Facilitating book discussions, recommendations, and reviews.</p>
    </div>
</div class="about">

<style>
    .about {
        padding: 2rem 0;
        background: linear-gradient(rgba(233, 233, 233, .8),rgba(233, 233, 233, .8)), url('../../images/classmate.jpg');
        background-position: center;
        background-size: cover;
    }
    .about h1 {
        text-align: center;
        font-family: 'Merriweather', sans-serif;
    }
    .about p {
        text-align: center;
        font-family: 'Ysabeau Office', sans-serif;
        font-size: 1.1rem;
    }
</style>
@endsection