<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />

    <title>OLX - O Maior Site de Compra e Venda do Brasil</title>

    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,500,600,700&amp;display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-menu">
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>/assets/img/logo.svg" alt="logo" /></a>
            </div>

            <div class="buscar">
                <a href="<?php echo BASE_URL; ?>/brasil">Buscar</a>
            </div>

            <nav class="menu">
                <ul>
                    <?php if(empty($_SERVER['REDIRECT_URL']) || $_SERVER['REDIRECT_URL'] == '/home'): ?>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/plano_profissional"><svg width="24px" height="24px" viewBox="0 0 24 24"><path fill="#4a4a4a" d="M7.25,6.25 L7.25,5 C7.25,3.48121694 8.48121694,2.25 10,2.25 L14,2.25 C15.5187831,2.25 16.75,3.48121694 16.75,5 L16.75,6.25 L20,6.25 C21.5187831,6.25 22.75,7.48121694 22.75,9 L22.75,19 C22.75,20.5187831 21.5187831,21.75 20,21.75 L4,21.75 C2.48121694,21.75 1.25,20.5187831 1.25,19 L1.25,9 C1.25,7.48121694 2.48121694,6.25 4,6.25 L7.25,6.25 Z M8.75,6.25 L15.25,6.25 L15.25,5 C15.25,4.30964406 14.6903559,3.75 14,3.75 L10,3.75 C9.30964406,3.75 8.75,4.30964406 8.75,5 L8.75,6.25 Z M4,7.75 C3.30964406,7.75 2.75,8.30964406 2.75,9 L2.75,19 C2.75,19.6903559 3.30964406,20.25 4,20.25 L20,20.25 C20.6903559,20.25 21.25,19.6903559 21.25,19 L21.25,9 C21.25,8.30964406 20.6903559,7.75 20,7.75 L4,7.75 Z"></path></svg>&nbsp; Plano Profissional</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo BASE_URL; ?>/anuncios"><svg width="24px" height="24px" viewBox="0 0 24 24"><path fill="#4a4a4a" d="M3 2.25h7a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75H3a.75.75 0 0 1-.75-.75V3A.75.75 0 0 1 3 2.25zm.75 7h5.5v-5.5h-5.5v5.5zm10.25-7h7a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75h-7a.75.75 0 0 1-.75-.75V3a.75.75 0 0 1 .75-.75zm.75 7h5.5v-5.5h-5.5v5.5zm-.75 4h7a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75h-7a.75.75 0 0 1-.75-.75v-7a.75.75 0 0 1 .75-.75zm.75 7h5.5v-5.5h-5.5v5.5zM3 13.25h7a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75H3a.75.75 0 0 1-.75-.75v-7a.75.75 0 0 1 .75-.75zm.75 7h5.5v-5.5h-5.5v5.5z"></path></svg>&nbsp; Meus Anúncios</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>/chats"><svg width="24px" height="24px" viewBox="0 0 24 24"><path fill="#4a4a4a" d="M8.463 18.389a.75.75 0 0 1 .575.042 7.632 7.632 0 0 0 3.462.819 7.751 7.751 0 0 0 6.93-4.288 7.63 7.63 0 0 0 .82-3.46l.001-.46C20.034 7.106 16.893 3.965 13 3.75h-.502a7.633 7.633 0 0 0-3.463.82 7.75 7.75 0 0 0-4.285 6.932 7.63 7.63 0 0 0 .82 3.46.75.75 0 0 1 .042.575l-1.426 4.277 4.277-1.425zm12.308-2.754a9.25 9.25 0 0 1-8.269 5.115 9.13 9.13 0 0 1-3.854-.842l-5.41 1.804a.75.75 0 0 1-.95-.95l1.804-5.41A9.128 9.128 0 0 1 3.25 11.5a9.249 9.249 0 0 1 5.112-8.27 9.128 9.128 0 0 1 4.138-.98l.541.001c4.698.26 8.449 4.01 8.709 8.749v.5a9.127 9.127 0 0 1-.98 4.135z"></path></svg>&nbsp; Chat</a>
                    </li>
                    <?php if(isset($_SESSION['olx-clone'])): ?>

                    <?php else: ?>
                        <li>
                            <a href="/login"><svg width="24px" height="24px" viewBox="0 0 24 24"><path fill="#4a4a4a" d="M20.75 21v-2A4.75 4.75 0 0 0 16 14.25H8A4.75 4.75 0 0 0 3.25 19v2a.75.75 0 1 0 1.5 0v-2A3.25 3.25 0 0 1 8 15.75h8A3.25 3.25 0 0 1 19.25 19v2a.75.75 0 1 0 1.5 0zM12 11.75a4.75 4.75 0 1 1 0-9.5 4.75 4.75 0 0 1 0 9.5zm0-1.5a3.25 3.25 0 1 0 0-6.5 3.25 3.25 0 0 0 0 6.5z"></path></svg>&nbsp; Entrar</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <a class="btn" href="<?php echo BASE_URL; ?>/anunciar">Anunciar</a>
            </nav>
        </div>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <footer>
        
    </footer>
</body>

</html>