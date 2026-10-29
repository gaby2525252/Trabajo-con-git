<?php
declare(strict_types=1);

final class Invitada
{
    public function ingresar(string $usuario, string $clave): ?array
    {
        $claveDemo = password_hash('flores123', PASSWORD_DEFAULT);
        if ($usuario === 'flor' && password_verify($clave, $claveDemo)) {
            return ['nombre' => 'Danna'];
        }
        return null;
    }
}
