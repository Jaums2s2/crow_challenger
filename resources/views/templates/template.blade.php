<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/painel/painel.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg mt-auto">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <svg preserveAspectRatio="xMinYMid meet" width="106" height="30" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 106 30" enable-background="new 0 0 106 30">
                        <g fill="#002d62">
                            <path
                                d="m57.2 9.9c-1.3-.9-2.9-1.4-4.5-1.4-4.3 0-6.8 2.9-6.8 6.7 0 4.1 3 6.9 6.8 6.9 1.5 0 3.1-.4 4.4-1.2l.9 1.4c-1.6 1-3.5 1.5-5.4 1.5-6.2 0-9.3-4-9.3-8.5 0-4.1 3.4-8.4 9.6-8.4 1.9 0 3.8.5 5.3 1.7l-1 1.3">
                            </path>
                            <path
                                d="m61.4 13.2l.9-.9c.5-.5 1.1-.8 1.8-.9.8.1 1.5.5 2 1.1l-1 1.4c-.5-.3-1.1-.5-1.7-.5-1.1 0-2.1 1.1-2.1 3.7v6.3h-2.2v-11.6h2.2l.1 1.4">
                            </path>
                            <path
                                d="m65.4 17.5c-.1-3.2 2.5-6 5.8-6.1 3.3-.1 6.2 2.4 6.3 5.7 0 .1 0 .3 0 .4 0 3.6-2.4 6.2-6.1 6.2s-6-2.6-6-6.2m2.4 0c0 2.2.8 4.8 3.7 4.8 2.9 0 3.7-2.6 3.7-4.8s-1-4.5-3.8-4.5c-2.8 0-3.7 2.4-3.6 4.5">
                            </path>
                            <path
                                d="m87.2 11.8c1.2 2.8 2.4 5.6 3.6 8.9 1-3.4 2-6.3 3-9.1l2 .3-4.3 11.6h-1.5c-1.2-2.9-2.5-5.8-3.7-9.1-1.2 3.3-2.3 6.2-3.6 9.1h-1.4l-4.3-11.4 2.2-.5c1 2.9 2 5.7 3 9.1 1.2-3.3 2.4-6.1 3.6-8.9">
                            </path>
                            <path
                                d="m97.7 17.7c-.1 2.3 1.7 4.3 4.2 4.5 1.2 0 2.4-.4 3.4-1l.6 1.1c-1.2.8-2.6 1.3-4.1 1.4-3.8 0-6.4-2.2-6.4-6.3-.2-3.1 2.2-5.7 5.4-5.9.2 0 .3 0 .5 0 3.7 0 5 3.2 4.8 6.3h-8.4zm6.2-1.4c0-1.8-.8-3.4-2.7-3.4-1.9 0-3.4 1.4-3.4 3.2 0 0 0 .1 0 .1h6.1z">
                            </path>
                        </g>
                        <path
                            d="m18.8.2c0-.1-.1-.1-.2-.2-.1 0-.2.1-.2.1l-18.3 29.7c-.1.1-.1.2-.1.2s.1 0 .1-.1l18.2-21.1c.1-.1.1-.1.1-.1s0 .1-.1.2l-12.6 21c0 0 0 .1 0 .1 0 0 .1 0 .1-.1l14.8-17.3c.1-.1.1-.1.1-.1s0 .1-.1.2l-9.6 17.1c0 .1 0 .2 0 .2 0 0 .1 0 .1-.1l11.8-13.7c.1-.2.2-.2.3-.2.1 0 .2.1.3.1l11.5 13.8c0 .1.1.1.1.1 0 0 0-.1-.1-.2l-16.2-29.6"
                            fill="#fdb913"></path>
                    </svg>
                    <li class="nav-item">
                        <a href="{{url("candidates/create")}}" class="nav-link active">
                            Novo Candidato
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-plus" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url("candidates")}}" class="nav-link active">
                            Tela inicial
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door" viewBox="0 0 16 16">
                                <path
                                    d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                            </svg>
                        </a>
                    </li>
            </div>
    </nav>
    @yield('content')
    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>

</html>