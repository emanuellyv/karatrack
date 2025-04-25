<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/13004837aa.js" crossorigin="anonymous"></script>
    <title>Dashboard Karatrack</title>
</head>
<body>
    <div class="container">
        <div class="barra-lateral">
            <div><h1>KaraTrack</h1></div>
            <div class="perfil">
                <img src="images/logo-perfil.png" class="logo-perfil" alt="Logo do perfil">
                <h2>Diretoria - AKSD</h2>
                <h3>Administrador</h3>
            </div>
            <div class="menu">
                <a href="">
                    <i class="fa-solid fa-house"></i>
                    <span>Início</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span>Dojos</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-user-ninja"></i>
                    <span>Karatecas</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-money-bills"></i>
                    <span>Tesouraria</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Relatórios</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-gear"></i>
                    <span>Configurações</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Sair</span>
                </a>
            </div>
        </div>

        <div class="conteudo-principal">
            <div class="barra-lista-karatecas">
                <span>Lista de Karatecas</span>
                <i class="fa-solid fa-sort"></i>
                <button>Novo Karateca</button>
            </div>
            <div>
                <table class="tabela-karatecas">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Faixa</th>
                            <th>Dojô</th>
                            <th>Data de cadastro</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="images"></td>
                            <td>João Silva</td>
                            <td>14</td>
                            <td>Amarela</td>
                            <td>Dojo Central</td>
                            <td>20/04/2024</td>
                            <td class="acoes"><i class="fa-solid fa-user-pen"></i></td>
                            <td class="acoes"><i class="fa-solid fa-trash"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>
