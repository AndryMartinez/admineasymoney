<?php
    if (isset($_SESSION['activo'])){
        session_destroy(); /** Se procede a cerrar la sesión o lo que es lo mismo destruirla */
    }
    header("Location:./");  /** Se redirige a la página de iniciar sesión */
?>