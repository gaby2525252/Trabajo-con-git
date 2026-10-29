<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Domingo Botánico · Tu jardín</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
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
      <div class="welcome-copy logged-in">
        <p class="eyebrow"><span></span> QUÉ GUSTO TENERTE AQUÍ</p>
        <h1>Hola,<br><?= htmlspecialchars($_SESSION['invitada']['nombre'], ENT_QUOTES, 'UTF-8') ?>.</h1>
        <p class="intro">Este rincón es tuyo. Respira profundo y quédate un ratito.</p>
        <a class="logout-button" href="index.php?salir=1">Cerrar sesión <span aria-hidden="true">↗</span></a>
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
