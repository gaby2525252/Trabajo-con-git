<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jardín secreto · Tu rincón</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Fraunces:opsz,wght@9..144,500;9..144,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="public/css/jardin.css">
</head>
<body>
  <main class="garden-page">
    <section class="night-garden" aria-label="Jardín secreto">
      <div class="brand"><span class="brand-seal">JS</span><span>JARDÍN SECRETO</span></div>
      <div class="garden-copy"><p class="overline">UN LUGAR PARA VOLVER A TI</p><h1>Florece<br>a tu manera<span>.</span></h1><p class="garden-note">De noche también crecen cosas bonitas.</p></div>
      <img class="garden-art" src="public/assets/flores-nocturnas.svg" alt="Ilustración de flores de colores brillantes">
      <div class="moon" aria-hidden="true"></div><div class="spark spark-one" aria-hidden="true">✦</div><div class="spark spark-two" aria-hidden="true">✧</div>
      <p class="garden-caption">EDICIÓN NOCTURNA <span>✳</span> 01</p>
    </section>
    <section class="login-side" aria-labelledby="login-title">
      <div class="login-panel welcome-panel">
        <div class="little-flower" aria-hidden="true">✿</div>
        <p class="form-kicker">TU RINCÓN TE ESPERABA</p>
        <h2 id="login-title">Hola, <?= htmlspecialchars($_SESSION['invitada']['nombre'], ENT_QUOTES, 'UTF-8') ?>.</h2>
        <p class="form-intro">Respira. Estás en tu espacio. Que hoy florezca algo bonito.</p>
        <a class="logout-button" href="index.php?salir=1">Cerrar sesión <span aria-hidden="true">↗</span></a>
        <p class="form-footnote">Un pequeño refugio entre mil días.</p>
      </div>
      <div class="petal petal-a" aria-hidden="true"></div><div class="petal petal-b" aria-hidden="true"></div>
    </section>
  </main>
</body>
</html>
