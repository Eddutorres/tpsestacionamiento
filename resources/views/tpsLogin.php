<?php
    include_once("encabezado.php");
?>
<body>
    <header class="header">
        <div class="contenedor">
            <img class="logo" src="../img/tps_web2021.png" alt="logo">
        </div>
    </header>
    <img class="fondo" src="../img/fondo.jpg" alt="fondo">
    <main class="contenido">
        <section class="caja-form-login">
            <div class="login-page">
                <div class="form">
                    <form class="login-form">
                        <input type="text" placeholder="Usuario" required>
                        <input type="password" placeholder="Contraseña" required>
                        <button>Ingresar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!--FOOTER-->
    <?php
        include_once("footer.php");
    ?>
</body>

</html>