@extends('layout.master')
@section('content')
    <div class="fill">
        <div class="container">
            <div class="grey">
                <img class="" src="../../images/logo.png" alt="">
                <h1>Terms & Condtions</h1>
            </div>
            <div class="bg">
                <div class="intro">

                    <p style="text-align: center"> Welcome to BookxChange! </p>
                    <p> &emsp;&emsp;&emsp;&emsp;
                        These terms and conditions outline the rules and regulations for the use of BookxChange's Website,
                        located at none.

                        By accessing this website we assume you accept these terms and conditions. Do not continue to use
                        BookxChange if you do not agree to take all of the terms and conditions stated on this page.
                    </p>
                </div>
                <div class="Cookies">
                    <h2> Cookies </h2>
                    <p> We employ the use of cookies. By accessing BookxChange, you agreed to use cookies in agreement with
                        the
                        BookxChange's Privacy Policy. <br>
                        Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies
                        are
                        used by our website to enable the functionality of certain areas to make it easier for people
                        visiting
                        our website. Some of our affiliate/advertising partners may also use cookies.</p>

                </div>
                <div class="License">
                    <h2> License </h2>
                    <p>&emsp;&emsp;&emsp;&emsp;
                        Unless otherwise stated, BookxChange and/or its licensors own the intellectual property rights for
                        all
                        material on BookxChange. All intellectual property rights are reserved. You may access this from
                        BookxChange for your own personal use subjected to restrictions set in these terms and conditions.
                        <br>
                        You must not: <br>

                        &#8226; Republish material from BookxChange <br>
                        &#8226; Sell, rent or sub-license material from BookxChange <br>
                        &#8226; Reproduce, duplicate or copy material from BookxChange<br>
                        &#8226; Redistribute content from BookxChange<br>
                        &emsp;&emsp;&emsp;&emsp;
                        Parts of this website offer an opportunity for users to post and exchange opinions and information
                        in
                        certain areas of the website. BookxChange does not filter, edit, publish or review Comments prior to
                        their presence on the website. Comments do not reflect the views and opinions of BookxChange,its
                        agents
                        and/or affiliates. Comments reflect the views and opinions of the person who post their views and
                        opinions. To the extent permitted by applicable laws, BookxChange shall not be liable for the
                        Comments
                        or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or
                        posting of and/or appearance of the Comments on this website.
                    </p>

                </div>
                <div class="rights">
                    <p> &emsp;&emsp;&emsp;&emsp;
                        BookxChange reserves the right to monitor all Comments and to remove any Comments which can be
                        considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
                </div>


            </div>
        </div>
    </div>
    <style>
        .grey {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background: rgb(241, 241, 241);
        }

        .grey img {
            width: 100px;
        }
        .fill {
            padding: 0rem 4;
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
