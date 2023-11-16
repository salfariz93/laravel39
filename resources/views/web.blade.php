<!DOCTYPE html>
<html>

<head>
    <title>laravel fahri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            display: flex;
            align-items: center
        }

        .title-container {

            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .paragraph-container1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .row-container1 {
            display: flex;
            justify-content: space-between;
            padding: 0px 20px;
            width: 100%;
            margin: 20px 10px;
        }

        .content-container1 {
            width: 45%;
            padding: 0px 20px;
        }

        .content-container2 {
            width: 45%;
            padding: 0px 20px;
        }

        .paragraph-container2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .row-container2 {
            display: flex;
            justify-content: space-between;
            padding: 0px 20px;
            width: 100%;
            margin: 20px 20px;
        }

        .content-container3 {
            width: 45%;
            padding: 0px 20px;
        }

        .content-container4 {
            width: 45%;
            padding: 0px 20px;
        }

        .title1 {
            font-weight: bold;
            font-size: 20px;
        }

        .title2 {
            font-weight: bold;
            font-size: 20px;
        }

        .paragraph1 {
            font-size: 18px;
        }

        .paragraph2 {
            font-size: 18px;
        }

        .paragraph3 {
            font-size: 18px;
        }

        .paragraph4 {
            font-size: 18px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <header>
        <h1>
            <title-container>
                LOREM IPSUM
            </title-container>
        </h1>
    </header>
    <div id="content">
        <div class="paragraph-container1">
            <div class="row-container1">
                <div class="content-container1">
                    <p class="title1">what lorem ipsum</p>
                    <p class="paragraph1"><b>Lorep IpsumLorep Ipsum</b>Lorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                        IpsumLorep
                        IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                        IpsumLorep
                        IpsumLorep Ipsum</p>
                </div>
                <div class="content-container2">
                    <p class="title2">why lorem ipsum</p>
                    <p class="paragraph2"><b>Lorep Ipsum</b>Lorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                        IpsumLorep
                        IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep Ipsum</p>
                </div>
            </div>
            <div class="paragraph-container2">
                <div class="row-container2">
                    <div class="content-container1">
                        <p class="title1">what lorem ipsum</p>
                        <p class="paragraph3"><b>Lorep Ipsum</b>Lorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                            IpsumLorep
                            IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                            IpsumLorep IpsumLorep IpsumLorep Ipsum</p>
                    </div>
                    <div class="content-container4">
                        <p class="title2">why lorem ipsum</p>
                        <p class="paragraph4">Lorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep
                            IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep IpsumLorep Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>