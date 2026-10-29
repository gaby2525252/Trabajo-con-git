<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fff8e7">
  <title>Domingo Botánico · Bienvenida</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="public/css/jardin.css">
</head>
<body>
  <main class="page">
    <header class="site-header">
      <a class="wordmark" href="index.php" aria-label="Domingo Botánico, inicio"><span class="wordmark-icon">d</span> domingo botánico</a>
      <p class="header-note">un lugar para florecer a tu ritmo</p>
    </header>
    <section class="hero">
      <div class="welcome-copy">
        <p class="eyebrow"><span></span> HOLA, QUÉ ALEGRÍA</p>
        <h1>Tu jardín<br>empieza <em>aquí.</em></h1>
        <p class="intro">Haz una pausa y entra a este pequeño rincón hecho para ti.</p>
        <?php if ($mensaje !== ''): ?>
          <p class="message" role="alert"><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <form method="post" action="index.php">
          <input type="hidden" name="token" value="<?= htmlspecialchars($_SESSION['token'], ENT_QUOTES, 'UTF-8') ?>">
          <label for="usuario">TU USUARIO</label>
          <input id="usuario" name="usuario" type="text" placeholder="Escribe tu usuario" autocomplete="username" required>
          <label for="clave">TU CONTRASEÑA</label>
          <input id="clave" name="clave" type="password" placeholder="Escribe tu contraseña" autocomplete="current-password" required>
          <button type="submit">Entrar a mi jardín <span aria-hidden="true">↗</span></button>
        </form>
        <p class="small-note">Un día bonito puede empezar aquí <span>✳</span></p>
      </div>
      <div class="artboard" aria-hidden="true">
        <div class="sun-disc"></div>
        <img class="bouquet" src="public/assets/flores-nocturnas.svg" alt="">
        <span class="art-label">FLORES DE DOMINGO</span>
        <span class="orbit-dot"></span>
      </div>
    </section>
    <footer class="site-footer"><span>DOMINGO BOTÁNICO</span><span>CRECER TAMBIÉN ES DESCANSAR</span></footer>
  </main>
</body>
</html>
