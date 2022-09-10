<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iHamster</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-light" id="home">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">iHamster</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav right">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#porque">Por que ter um</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#quanto">Quanto vou gastar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#comprar">Comprar</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <section class="area">
            <img class="gif" src="assets/img/hamster.gif" alt="" srcset="">
        </section>
        <section class="area" id="porque">
            <h2>Por que comprar um ?</h2>
            <ul class="list-group">
                <li class="list-group-item">É fofo</li>
                <li class="list-group-item">Supre sua carência</li>
                <li class="list-group-item">É baratin</li>
                <li class="list-group-item">É super facil de cuidar</li>
                <li class="list-group-item">Você vai ter um amigo</li>
            </ul>
        </section>
        <section class="area" id="quanto">
            <h2>Quanto vou gastar por mês ?</h2>
            <span class="placeholder col-11 bg-danger">Ração: R$ 8,00 -  R$ 14,00</span>
            <span class="placeholder col-11 bg-danger">Serragem: R$ 4,00 -  R$ 6,00</span>
            <span class="placeholder col-11 bg-warning" style="color: black;">Total: Você gastará somente entre R$ 12,00 e R$ 20,00 por mês para cuidar dele!!</span>
        </section>
        <section class="area" id="comprar">
            <div class="card" style="width: 18rem;">
            <img src="assets/img/hamster.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Não tenho nome ainda :(</h5>
                <p class="card-text">Me compre por favor, estou muito barato, nunca te pedi nada :3</p>
                <a href="https://api.whatsapp.com/send?phone=5531985730757&text=Ol%C3%A1%2C%20Gostaria%20de%20comprar%20um%20ramisti%20%F0%9F%90%B9%F0%9F%98%8A" class="btn btn-danger">Comprar R$ 20,00</a>
            </div>
            </div>
        </section>
        <section class="area">
            <h2>Ta carente</h2>
            <h2>compra um ramisti :)</h2>
            <span class="placeholder col-9 bg-success">Whatsapp : (31) 98573-0757</span>
        </section>
    </main>
    <footer>
        <p>Developed by @ <a href="https://www.instagram.com/gustavo_code/"> Welberthy Gustavo</a></p>
    </footer>
    <!--Gu-->
</body>
</html>