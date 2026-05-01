<!-- ==========================================================
     Archivo: Navbar - Dock Inferior estilo macOS
     Descripcion: Barra de navegación inferior del sistema
     Estilo: Bootstrap 5 + Boxicons + Azul marino
=========================================================== -->

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Syne:wght@700&display=swap" rel="stylesheet">

<!-- ===================== DOCK INFERIOR ===================== -->
<nav class="inv-dock">

  <!-- LOGO -->
  <a class="inv-dock-brand" href="index.php?modulo=dashboard&controlador=dashboard&funcion=index" title="Inventix">
    <div class="inv-dock-logo">
      <i class='bx bx-package'></i>
    </div>
    <span class="inv-dock-divider-v"></span>
  </a>

  <!-- ITEMS -->
  <div class="inv-dock-items">

    <!-- Elementos -->
    <div class="inv-dock-item" id="dock-elementos">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-elementos')">
        <i class='bx bx-cube'></i>
        <span>Elementos</span>
      </button>
      <div class="inv-dock-menu" id="menu-elementos">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Elementos</p>
          <a href="<?= getUrl('elementos', 'elementos', 'getInsert'); ?>"><i class='bx bx-plus-circle'></i> Registrar</a>
          <a href="<?= getUrl('elementos', 'elementos', 'consult'); ?>"><i class='bx bx-search'></i> Consultar</a>
        </div>
      </div>
    </div>

    <!-- Préstamos -->
    <div class="inv-dock-item">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-prestamos')">
        <i class='bx bx-transfer'></i>
        <span>Préstamos</span>
      </button>
      <div class="inv-dock-menu" id="menu-prestamos">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Préstamos</p>
          <a href="<?= getUrl('prestamos', 'prestamos', 'getInsert'); ?>"><i class='bx bx-plus-circle'></i> Registrar</a>
          <a href="<?= getUrl('prestamos', 'prestamos', 'consult'); ?>"><i class='bx bx-search'></i> Consultar</a>
        </div>
      </div>
    </div>

    <!-- Reservas -->
    <div class="inv-dock-item">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-reservas')">
        <i class='bx bx-calendar'></i>
        <span>Reservas</span>
      </button>
      <div class="inv-dock-menu" id="menu-reservas">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Reservas</p>
          <a href="<?= getUrl('reservas', 'reservas', 'getInsert'); ?>"><i class='bx bx-plus-circle'></i> Registrar</a>
          <a href="<?= getUrl('reservas', 'reservas', 'consult'); ?>"><i class='bx bx-search'></i> Consultar</a>
        </div>
      </div>
    </div>

    <!-- Usuarios -->
    <div class="inv-dock-item">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-usuarios')">
        <i class='bx bx-user'></i>
        <span>Usuarios</span>
      </button>
      <div class="inv-dock-menu" id="menu-usuarios">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Usuarios</p>
          <a href="<?= getUrl('usuarios', 'usuarios', 'getInsert'); ?>"><i class='bx bx-plus-circle'></i> Registrar</a>
          <a href="<?= getUrl('usuarios', 'usuarios', 'consult'); ?>"><i class='bx bx-search'></i> Consultar</a>
        </div>
      </div>
    </div>

    <!-- Reportes -->
    <div class="inv-dock-item">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-reportes')">
        <i class='bx bx-bar-chart-alt-2'></i>
        <span>Reportes</span>
      </button>
      <div class="inv-dock-menu" id="menu-reportes">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Reportes</p>
          <a href="<?= getUrl('reportes', 'reportes', 'verElementos'); ?>"><i class='bx bx-error-alt' style="color:#f87171"></i> Monitoreo de Elementos</a>
          <a href="<?= getUrl('reportes', 'reportes', 'verElementosMasPrestados'); ?>"><i class='bx bx-transfer-alt' style="color:#60a5fa"></i> Elementos más prestados</a>
        </div>
      </div>
    </div>

    <!-- Configuración -->
    <div class="inv-dock-item">
      <button class="inv-dock-btn" onclick="toggleDockMenu('menu-config')">
        <i class='bx bx-cog'></i>
        <span>Configuración</span>
      </button>
      <div class="inv-dock-menu inv-dock-menu--wide" id="menu-config">
        <div class="inv-dock-menu-inner">
          <p class="inv-dock-menu-title">Configuración</p>
          <div class="inv-dock-menu-grid">
            <a href="<?= getUrl('marca', 'marca', 'getInsert'); ?>"><i class='bx bx-award' style="color:#fbbf24"></i> Marca - Registrar</a>
            <a href="<?= getUrl('marca', 'marca', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Marca</a>
            <a href="<?= getUrl('areasDestino', 'areasDestino', 'getInsert'); ?>"><i class='bx bx-edit' style="color:#fbbf24"></i> Área Destino - Registrar</a>
            <a href="<?= getUrl('areasDestino', 'areasDestino', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Área Destino</a>
            <a href="<?= getUrl('categoria', 'categoria', 'getInsert'); ?>"><i class='bx bx-purchase-tag-alt' style="color:#60a5fa"></i> Categoría - Registrar</a>
            <a href="<?= getUrl('categoria', 'categoria', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Categoría</a>
            <a href="<?= getUrl('rol', 'rol', 'getInsert'); ?>"><i class='bx bx-id-card' style="color:#818cf8"></i> Rol - Registrar</a>
            <a href="<?= getUrl('rol', 'rol', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Rol</a>
            <a href="<?= getUrl('tipoDocumento', 'tipoDocumento', 'getInsert'); ?>"><i class='bx bx-file' style="color:#34d399"></i> Tipo Documento - Registrar</a>
            <a href="<?= getUrl('tipoDocumento', 'tipoDocumento', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Tipo Doc.</a>
            <a href="<?= getUrl('areas', 'areas', 'getInsert'); ?>"><i class='bx bx-buildings' style="color:#f87171"></i> Área - Registrar</a>
            <a href="<?= getUrl('areas', 'areas', 'consult'); ?>"><i class='bx bx-search'></i> Consultar Área</a>
            <a href="<?= getUrl('carga', 'carga', 'createUsuarios'); ?>"><i class='bx bx-upload' style="color:#f87171"></i> Cargar Usuarios</a>
            <a href="<?= getUrl('carga', 'carga', 'createElements'); ?>"><i class='bx bx-upload' style="color:#f87171"></i> Cargar Elementos</a>
            <a href="<?= getUrl('carga', 'carga', 'consult'); ?>"><i class='bx bx-error-circle' style="color:#fbbf24"></i> Control de Errores</a>
            <a href="<?= getUrl('prestamos', 'prestamos', 'consultarMovimientos'); ?>"><i class='bx bx-transfer-alt' style="color:#34d399"></i> Movimientos</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- DIVIDER + USUARIO -->
  <span class="inv-dock-divider-v"></span>
  <div class="inv-dock-item inv-dock-user">
    <button class="inv-dock-btn inv-dock-btn--user" onclick="toggleDockMenu('menu-user')">
      <div class="inv-dock-avatar">
        <?= strtoupper(substr($_SESSION['usuario']['usu_nombre'], 0, 1) . substr($_SESSION['usuario']['usu_apellido'], 0, 1)) ?>
      </div>
      <span class="inv-dock-username">
        <?= htmlspecialchars($_SESSION['usuario']['usu_nombre'] . ' ' . $_SESSION['usuario']['usu_apellido']) ?>
      </span>
      <i class='bx bx-chevron-up inv-dock-chevron'></i>
    </button>
    <div class="inv-dock-menu inv-dock-menu--right" id="menu-user">
      <div class="inv-dock-menu-inner">
        <p class="inv-dock-menu-title">Mi cuenta</p>
        <a href="index.php?modulo=login&controlador=login&funcion=logout" class="inv-dock-logout">
          <i class='bx bx-log-out-circle'></i> Cerrar sesión
        </a>
      </div>
    </div>
  </div>

</nav>

<!-- Overlay para cerrar menus -->
<div class="inv-dock-overlay" id="dockOverlay" onclick="closeAllDockMenus()"></div>

<style>
  /* ── BODY: espacio inferior para el dock ── */
  body {
    padding-bottom: 80px !important;
  }

  /* ── OVERLAY ── */
  .inv-dock-overlay {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 1040;
  }
  .inv-dock-overlay.active { display: block; }

  /* ── DOCK BASE ── */
  .inv-dock {
    position: fixed;
    bottom: 16px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1050;
    display: flex;
    align-items: center;
    gap: 4px;
    background: #0f1f3d;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 8px 12px;
    box-shadow:
      0 8px 32px rgba(0,0,0,0.4),
      0 2px 8px rgba(0,0,0,0.2),
      inset 0 1px 0 rgba(255,255,255,0.06);
    backdrop-filter: blur(20px);
    font-family: 'DM Sans', sans-serif;
    max-width: calc(100vw - 32px);
  }

  /* ── LOGO ── */
  .inv-dock-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    flex-shrink: 0;
  }

  .inv-dock-logo {
    width: 36px;
    height: 36px;
    background: #2563eb;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
    transition: transform 0.2s, box-shadow 0.2s;
    flex-shrink: 0;
  }

  .inv-dock-brand:hover .inv-dock-logo {
    transform: translateY(-4px) scale(1.08);
    box-shadow: 0 8px 20px rgba(37,99,235,0.5);
  }

  /* ── SEPARADOR VERTICAL ── */
  .inv-dock-divider-v {
    width: 1px;
    height: 32px;
    background: rgba(255,255,255,0.1);
    margin: 0 6px;
    flex-shrink: 0;
  }

  /* ── ITEMS WRAPPER ── */
  .inv-dock-items {
    display: flex;
    align-items: center;
    gap: 2px;
  }

  /* ── ITEM ── */
  .inv-dock-item {
    position: relative;
  }

  /* ── BOTÓN ── */
  .inv-dock-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 3px;
    padding: 7px 12px;
    background: transparent;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    color: rgba(255,255,255,0.65);
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 500;
    transition: background 0.15s, color 0.15s, transform 0.2s;
    white-space: nowrap;
    min-width: 64px;
  }

  .inv-dock-btn i {
    font-size: 20px;
    line-height: 1;
    transition: transform 0.2s;
  }

  .inv-dock-btn:hover {
    background: rgba(255,255,255,0.08);
    color: #fff;
  }

  .inv-dock-btn:hover i {
    transform: translateY(-3px);
  }

  .inv-dock-btn.active {
    background: rgba(37,99,235,0.25);
    color: #fff;
  }

  /* ── MENÚ FLOTANTE (sube hacia arriba) ── */
  .inv-dock-menu {
    display: none;
    position: absolute;
    bottom: calc(100% + 12px);
    left: 50%;
    transform: translateX(-50%);
    z-index: 1060;
    min-width: 200px;
    animation: dockMenuIn 0.18s ease;
  }

  .inv-dock-menu.active { display: block; }

  @keyframes dockMenuIn {
    from { opacity: 0; transform: translateX(-50%) translateY(8px); }
    to   { opacity: 1; transform: translateX(-50%) translateY(0); }
  }

  .inv-dock-menu-inner {
    background: #0f1f3d;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 14px;
    padding: 10px 8px;
    box-shadow: 0 16px 48px rgba(0,0,0,0.5), 0 4px 12px rgba(0,0,0,0.3);
  }

  /* Flecha indicadora hacia abajo */
  .inv-dock-menu-inner::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 12px;
    height: 6px;
    background: #0f1f3d;
    clip-path: polygon(0 0, 100% 0, 50% 100%);
  }

  .inv-dock-menu-title {
    font-size: 10px;
    font-weight: 600;
    color: rgba(255,255,255,0.35);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 2px 10px 8px;
    margin: 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    margin-bottom: 6px;
  }

  .inv-dock-menu-inner a {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 10px;
    color: rgba(255,255,255,0.72);
    text-decoration: none;
    font-size: 13px;
    font-weight: 400;
    border-radius: 8px;
    transition: background 0.15s, color 0.15s;
    white-space: nowrap;
  }

  .inv-dock-menu-inner a:hover {
    background: rgba(37,99,235,0.2);
    color: #fff;
  }

  .inv-dock-menu-inner a i { font-size: 16px; }

  /* ── MENÚ ANCHO (Configuración) ── */
  .inv-dock-menu--wide {
    min-width: 460px;
  }

  .inv-dock-menu-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px;
  }

  /* ── MENÚ ALINEADO A LA DERECHA (usuario) ── */
  .inv-dock-menu--right {
    left: auto;
    right: 0;
    transform: none;
  }

  .inv-dock-menu--right .inv-dock-menu-inner::after {
    left: auto;
    right: 20px;
    transform: none;
  }

  @keyframes dockMenuInRight {
    from { opacity: 0; transform: translateY(8px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .inv-dock-menu--right.active { animation: dockMenuInRight 0.18s ease; }

  /* ── USUARIO ── */
  .inv-dock-btn--user {
    flex-direction: row !important;
    gap: 8px !important;
    padding: 6px 12px !important;
    min-width: unset !important;
  }

  .inv-dock-avatar {
    width: 28px;
    height: 28px;
    background: #2563eb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
    letter-spacing: 0.5px;
  }

  .inv-dock-username {
    font-size: 13px;
    font-weight: 500;
    color: rgba(255,255,255,0.85);
    max-width: 140px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .inv-dock-chevron {
    font-size: 16px !important;
    color: rgba(255,255,255,0.4);
    transition: transform 0.2s !important;
  }

  .inv-dock-btn--user.active .inv-dock-chevron {
    transform: rotate(180deg) !important;
  }

  /* ── LOGOUT ── */
  .inv-dock-logout {
    color: #f87171 !important;
  }
  .inv-dock-logout:hover {
    background: rgba(248,113,113,0.15) !important;
    color: #fca5a5 !important;
  }

  /* ── MODAL NOTIFICACIONES (sin cambios) ── */
  #modalNotificaciones .modal-dialog {
    position: fixed;
    top: 0; right: 0;
    height: 100vh;
    max-width: 400px;
    margin: 0 !important;
    animation: slideInRight 0.4s ease forwards;
    border-left: 1px solid rgba(0,0,0,0.1);
  }

  #modalNotificaciones .modal-content {
    height: 100%;
    border-radius: 1rem 0 0 1rem;
    overflow: hidden;
    background-color: rgba(255,255,255,0.85);
    backdrop-filter: blur(8px);
    box-shadow: -4px 0 20px rgba(0,0,0,0.2);
    border: 1px solid rgba(13,110,253,0.15);
    transition: all 0.3s ease-in-out;
  }

  #modalNotificaciones .modal-header {
    padding: 1rem 1.25rem;
    background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,0.05);
  }

  #modalNotificaciones .modal-body {
    padding: 1rem;
    overflow-y: auto;
  }

  #modalNotificaciones .modal-body::-webkit-scrollbar { width: 6px; }
  #modalNotificaciones .modal-body::-webkit-scrollbar-thumb {
    background-color: #2563eb;
    border-radius: 4px;
  }

  @keyframes slideInRight {
    from { transform: translateX(100%); opacity: 0; }
    to   { transform: translateX(0%);   opacity: 1; }
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 640px) {
    .inv-dock { padding: 7px 8px; gap: 2px; }
    .inv-dock-btn { padding: 6px 8px; min-width: 50px; font-size: 10px; }
    .inv-dock-btn i { font-size: 18px; }
    .inv-dock-username { display: none; }
    .inv-dock-menu--wide { min-width: 300px; }
    .inv-dock-menu-grid { grid-template-columns: 1fr; }
  }
</style>

<script>
  function toggleDockMenu(id) {
    const menu = document.getElementById(id);
    const overlay = document.getElementById('dockOverlay');
    const btn = menu.previousElementSibling;
    const isActive = menu.classList.contains('active');

    // Cerrar todos
    closeAllDockMenus();

    if (!isActive) {
      menu.classList.add('active');
      btn.classList.add('active');
      overlay.classList.add('active');
    }
  }

  function closeAllDockMenus() {
    document.querySelectorAll('.inv-dock-menu').forEach(m => m.classList.remove('active'));
    document.querySelectorAll('.inv-dock-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('dockOverlay').classList.remove('active');
  }

  // Cerrar con Escape
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeAllDockMenus();
  });
</script>