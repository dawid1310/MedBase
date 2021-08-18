@extends('layout')
@section('name')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap');
        $background: #fffffb;
        $accent: #ff6b6c;
        $otherAccent: #ffc145;
        $darkBackground: #5b5f97;


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Roboto", arial, sans-serif;
            color: #222
        }

        #login-container {
            height: 400px;
            width: 350px;
            padding: 20px;
            border-radius: 5px;
            background: $background;
            position: relative;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);

            .profile-img {
                height: 100px;
                width: 100px;
                background: url('https://images.unsplash.com/photo-1504933350103-e840ede978d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=564&q=80');
                background-size: cover;
                background-position: center;
                position: absolute;
                top: -25px;
                left: -25px;
                border-radius: 50%;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            }

            h1 {
                font-family: 'Sriracha', arial, sans-serif;
                text-align: center;
                margin-bottom: 20px;
                color: $otherAccent;
            }

            .description {
                margin-bottom: 20px;
            }

            .social {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: calc(100% - 40px);
                margin: 0 auto;

                a {
                    text-align: center;
                    border: solid 2px $accent;
                    width: 75px;
                    padding: 5px 0;
                    border-radius: 5px;

                    &:hover {
                        background: $accent;
                        color: white;
                        cursor: pointer;
                    }
                }
            }

            button {
                width: 80%;
                height: 80px;
                font-size: 2rem;
                margin: 30px 10% 0 10%;
                color: $background;
                border: none;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
                border-radius: 5px;
                background: linear-gradient(45deg, $accent, $otherAccent, $otherAccent, $accent);
                background-size: 300% 300%;
                outline: none;
                transition: all 200ms ease-in-out;

                &:hover {
                    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
                    transform: translateY(2px);
                    -webkit-animation: gradientBG 1.5s ease-in-out forwards;
                    animation: gradientBG 1.5s ease-in-out forwards;
                    cursor: pointer;
                }

                &:active {
                    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
                    transform: translateY(4px);
                }
            }

            footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: $darkBackground;
                color: white;
                width: 100%;
                position: absolute;
                bottom: 0;
                height: 30px;
                padding: 0 20px;
                margin-left: -20px;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;

                div {
                    display: flex;

                    .fa-heart {
                        color: $accent;
                    }

                    p:first-child {
                        margin-right: 10px;
                        border-right: 4px solid white;
                        padding-right: 10px;
                    }
                }
            }
        }

        @-webkit-keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }

            // 100% {
            //   background-position: 0% 50%;
            // }
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }

            // 100% {
            //   background-position: 0% 50%;
            // }
        }

    </style>
@endsection
@section('content')
    <div class='w-75 mx-auto'>
        <table>
            <row>

                <column>
                    <h1>Doktor: {{ $doctor->name }}</h1>
                </column>
                <column>
                    <h2>Specjalizacja: {{ $doctor->specialization }}, {{ $doctor->specification }}</h2>
                </column>
                <column>
                    <h2>Informacje: {{ $doctor->informations }}</h2>
                </column>
                <column>
                    <h2>Ocena: {{ $doctor->rating }}</h2>
                </column>
                <form action="/doctors/{{ $doctor->id }}/edit" method="get">
                    <input type="submit" value="Modyfikuj">
                </form>

            </row>

            @foreach ($visits as $visit)
                <div id="login-container">
                    <div class="profile-img"></div>
                    <h1>
                        Maddie
                    </h1>
                    <div class="description">
                        Maddie is a front end web developer in New York. She has worked in the field for 10 years now. Check
                        out her projects in the links below. She is available for hire as well.
                    </div>
                    <div class="social">
                        <a>GitHub</a>
                        <a>Twitter</a>
                        <a>LinkedIn</a>
                    </div>
                    <button>Hire Me</button>
                    <footer>
                        <div class="likes">
                            <p><i class='fa fa-heart'></i></p>
                            <p>1.5K</p>
                        </div>
                        <div class="projects">
                            <p>Projects</p>
                            <p>154</p>
                        </div>
                    </footer>
                </div>
            @endforeach
        </table>
    </div>
@endsection
