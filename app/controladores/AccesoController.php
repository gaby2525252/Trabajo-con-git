<?php
declare(strict_types=1);

final class AccesoController
{
    public function __construct(private Invitada $invitada) {}

    public function mostrar(): void
    {
        if (isset($_GET['salir'])) {
            $_SESSION = [];
            session_destroy();
            header('Location: index.php');
            exit;
        }

        if (isset($_SESSION['invitada'])) {
            require __DIR__ . '/../vistas/bienvenida.php';
            return;
        }

        $_SESSION['token'] ??= bin2hex(random_bytes(32));
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $token = (string) ($_POST['token'] ?? '');
            if (!hash_equals($_SESSION['token'], $token)) {
                $mensaje = 'La sesión venció. Actualiza la página e inténtalo de nuevo.';
            } else {
                $invitada = $this->invitada->ingresar(
                    trim((string) ($_POST['usuario'] ?? '')),
                    (string) ($_POST['clave'] ?? '')
                );
                if ($invitada !== null) {
                    session_regenerate_id(true);
                    $_SESSION['invitada'] = $invitada;
                    header('Location: index.php');
                    exit;
                }
                $mensaje = 'Esos datos no coinciden. Vuelve a intentarlo.';
            }
        }

        require __DIR__ . '/../vistas/portal.php';
    }
}
