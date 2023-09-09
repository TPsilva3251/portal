<div>
    {{-- <h1>Hello Word!!!</h1>

    <h3>{{ $teste }}</h3>

    <input type="text" wire:model="novo" style="border: 1px solid black;">
    <button wire:click="buscar">pesquisar</button>

    <h3>{{$outro}}</h3>
    <input type="text" name="outro" id="outro" wire:model="outro" style="border: 1px solid red;">


    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button> --}}


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clone.css">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <title>Clone</title>
</head>

<body>
    <div class="nav-bar" id="start">
        <div class="links">
            <div class="links-main">
                <a href="#" id="logo"><img src="imagens/nome.png" alt="" class="logo"></a>
                <a href="#" class="publique">PUBLIQUE GRÁTIS</a>
            </div>
            <a href="#" class="lojas">Lojas</a>
            <a href="#" class="produtos">Produtos</a>
            <a href="#" class="anuncios">Anúncios</a>
        </div>
        <div class="search">
            <input type="text" name="search" id="search" placeholder="O que você procura?">
            <button class="btn-search">BUSCAR</button>
        </div>
    </div>
    <!-- SlideBarFotos -->
    <section class="galery">
        <div class="fotos">
            <img src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t39.30808-6/293183963_5588879427813191_90071583153164295_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeELeYIEwZe0Rw7c2FeyvXNNBom1xQpJb2wGibXFCklvbLgeTswCmdOetKDi64WvbknYYvkJYnwvKQKDPQJ4spJn&_nc_ohc=Q-SN7rVsPFYAX8kXFHU&_nc_ht=scontent.fmoc4-1.fna&oh=00_AfAJtfnTJd9Abqq8WxybRqoQB8HpeaXkV0KT6nDRWS910g&oe=6500CFE9"
                alt="slide">
            <img src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t39.30808-6/286252487_5489342141100254_2093504964233849333_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeEwZ72QVWnwP4vyhVYATA3AksQWvZdW2AuSxBa9l1bYC2KoIlAmcL1Y8Qcb9Nx6HBePGm67yHVcinJq_F5kJlzt&_nc_ohc=zQ0OvwX52A0AX9aKKHj&_nc_ht=scontent.fmoc4-1.fna&oh=00_AfCVEPPrwYGPfnWOVCuirGVmRzYDJ4fL9MH1c_SN3t2d3A&oe=650241D8"
                alt="slide">
            <img src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t39.30808-6/277788553_5332176920150111_1645517086260765783_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5614bc&_nc_eui2=AeEA3cnWYLK-m0THYJ5OAd0_P-2KrYm9-Ss_7Yqtib35K2YBR9QOcDebnQozLJvQ6o5JA1LdFppWOlor-G1FsX8r&_nc_ohc=HwD1HVu748gAX-VYYCD&_nc_ht=scontent.fmoc4-1.fna&oh=00_AfBEG8wEitm6dzaFyCiJ9E6fuwCnlcBNRoMq6AU8129zGQ&oe=6500B5BC"
                alt="slide">
            <img src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t39.30808-6/277589318_5332176060150197_8927330159218290974_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5614bc&_nc_eui2=AeHUUXGcZlGEH3jC-GfA-40GLNmbmfYQ8V4s2ZuZ9hDxXhMAsmoaHJVa1-FACwUzCLXAk0IQR1iLFmyfy61OoL37&_nc_ohc=4OCw9QKZpRAAX_tT8XG&_nc_ht=scontent.fmoc4-1.fna&oh=00_AfA1fZkJX8qXY9dPvbwk_5Byj7LwrSCFISGNWjc5YuAdZg&oe=6501E262"
                alt="slide">
            <img src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t39.30808-6/293183963_5588879427813191_90071583153164295_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeELeYIEwZe0Rw7c2FeyvXNNBom1xQpJb2wGibXFCklvbLgeTswCmdOetKDi64WvbknYYvkJYnwvKQKDPQJ4spJn&_nc_ohc=Q-SN7rVsPFYAX8kXFHU&_nc_ht=scontent.fmoc4-1.fna&oh=00_AfAJtfnTJd9Abqq8WxybRqoQB8HpeaXkV0KT6nDRWS910g&oe=6500CFE9"
                alt="slide">
        </div>
    </section>
    <!-- Destaques -->
    <div class="destaques">
        <h1>LOJAS EM DESTAQUE</h1>
        <h3 id="h3">Lojas em destaque de Bocaiúva</h3>
        <div class="cards">
            <div class="card1">teste1</div>
            <div class="card2">teste1</div>
            <div class="card3">teste1</div>
            <div class="card4">teste1</div>
            <div class="card5">teste1</div>
            <div class="card6">teste1</div>
        </div>
        <!-- Premiun -->
        <h1>GALEIRA PREMIUN</h1>
        <h3>Produtos e Serviços em Bocaiúva</h3>
        <div class="cards">
            <div class="card1">teste</div>
            <div class="card2">teste</div>
            <div class="card3">teste</div>
            <div class="card4">teste</div>
            <div class="card5">teste</div>
            <div class="card6">teste</div>
            <div class="card7">teste</div>
            <div class="card8">teste</div>
            <div class="card9">teste</div>
        </div>
    </div>
    <div class="footer">
        <div class="social">
            <h5>Siga o Portal Bocaiúva:</h5>
            <div class="social-icon">
                <a href="http://facebook.com"><img
                        src="https://upload.wikimedia.org/wikipedia/commons/b/be/Facebook_William_Aditya_Sarana.png"
                        alt="iconfacebook" class="facebook"></a>
                <a href="http://instagran.com">
                    <img src="https://cdn-icons-png.flaticon.com/512/1363/1363042.png" alt="iconinstagran"
                        class="instagran">
                </a>
            </div>
        </div>
        <!-- <div class="space"></div> -->
        <div class="final">
            <div class="nome-footer">
                <img src="imagens/nome.png" alt="logofooter">
            </div>
            <p class="frase-footer"><strong>O Portal do comércio de Bocaiúva</strong></p>
            <div class="div-portal">
                <p class="principal"><strong>Portal Bocaiúva</strong></p>
                <p>Sobre</p>
                <p>Equipe</p>
                <p>Patrocinadores</p>
            </div>
            <div class="div-servicos">
                <p class="principal"><strong>Serviços</strong></p>
                <p>Plano de Anúncios</p>
                <p>PbZap</p>
                <p>Cadastro Gratuito</p>
            </div>
            <div class="div-contatos">
                <p class="principal"><strong>Contato</strong></p>
                <p>Nosso Endereço</p>
                <p>thiagogua2009@gmail.com</p>
                <p>(38) 3241-7768</p>
            </div>
        </div>
        <div class="cop">
            <p>₢PoweredBy <strong>PortalBocaiuva.com</strong></p>
            <a class="btn-fixed" href="#start">
                <span class="material-icons">
                    Top
                </span>
            </a>
        </div>
    </div>
</body>
<script>
    const botao = document.querySelector(".btn-fixed");

    window.addEventListener("scroll", function (event) {
        if (window.scrollY < 50) {
            botao.classList.remove("visible");
        }
        else {
            botao.classList.add("visible");
        }
    });
</script>


</div>
