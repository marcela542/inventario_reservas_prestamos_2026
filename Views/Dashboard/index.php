<!-- =====================================
     Archivo: Dashboard - Vista principal
     Ruta: Views/Dashboard/index.php
     Datos de demostración para presentación
====================================== -->

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Syne:wght@600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Canvas de partículas (fondo) -->
<canvas id="particles-canvas"></canvas>

<div class="container my-4">

    <!-- ========== BANNER DE BIENVENIDA ========== -->
    <div class="inv-banner mb-4">
        <div class="inv-banner-left">
            <div class="inv-banner-logo">
                <i class='bx bx-package'></i>
            </div>
            <div>
                <p class="inv-banner-greeting">Bienvenido de nuevo,</p>
                <h2 class="inv-banner-title"><?= htmlspecialchars($_SESSION['usuario']['usu_nombre'] . ' ' . $_SESSION['usuario']['usu_apellido']) ?></h2>
                <p class="inv-banner-sub">Sistema de inventario <strong>Inventix</strong> — <span id="inv-fecha-hoy"></span></p>
            </div>
        </div>
        <div class="inv-banner-right">
            <div class="inv-banner-badge">
                <i class='bx bx-shield-check'></i>
                <span><?= htmlspecialchars($_SESSION['usuario']['rol_nombre'] ?? 'Administrador') ?></span>
            </div>
        </div>
    </div>

    <!-- ========== TARJETAS DE ESTADÍSTICAS ========== -->
    <div class="row justify-content-center g-3 mb-4">

        <div class="col-6 col-md-3">
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(37,99,235,.12);">
                    <i class='bx bx-cube' style="color:#2563eb"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total Elementos</span>
                    <span class="stat-num" id="stat-elementos">0</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(16,185,129,.12);">
                    <i class='bx bx-transfer' style="color:#10b981"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Préstamos Activos</span>
                    <span class="stat-num" id="stat-prestamos">0</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(245,158,11,.12);">
                    <i class='bx bx-calendar' style="color:#f59e0b"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Reservas Hoy</span>
                    <span class="stat-num" id="stat-reservas">0</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="stat-card">
                <div class="stat-icon" style="background:rgba(139,92,246,.12);">
                    <i class='bx bx-user' style="color:#8b5cf6"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Usuarios Activos</span>
                    <span class="stat-num" id="stat-usuarios">0</span>
                </div>
            </div>
        </div>

    </div>

    <!-- ========== FILA PRINCIPAL ========== -->
    <div class="row justify-content-center g-4">

        <!-- Gráfico de Actividad -->
        <div class="col-md-6 col-lg-7">
            <div class="card shadow rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-0">Actividad General</h5>
                            <small class="text-muted">Préstamos y reservas — últimos 6 meses</small>
                        </div>
                        <div class="chart-badge">2026</div>
                    </div>
                    <canvas id="grafico-actividad" height="180"></canvas>
                </div>
            </div>
        </div>

        <!-- Notificaciones -->
        <div class="col-md-6 col-lg-5">
            <div class="card shadow rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stat-icon me-3" style="background:rgba(245,158,11,.12); width:42px; height:42px;">
                            <i class='bx bx-bell' style="color:#f59e0b; font-size:20px;"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Notificaciones</h5>
                            <small class="text-muted">Alertas recientes del sistema</small>
                        </div>
                    </div>
                    <div class="notif-list">
                        <div class="notif-item notif-warning">
                            <i class='bx bx-error-circle'></i>
                            <div>
                                <p class="notif-text">Elemento <strong>Laptop Dell XPS</strong> con stock bajo</p>
                                <span class="notif-time">Hace 10 min</span>
                            </div>
                        </div>
                        <div class="notif-item notif-info">
                            <i class='bx bx-transfer'></i>
                            <div>
                                <p class="notif-text">Nuevo préstamo registrado por <strong>María González</strong></p>
                                <span class="notif-time">Hace 32 min</span>
                            </div>
                        </div>
                        <div class="notif-item notif-success">
                            <i class='bx bx-check-circle'></i>
                            <div>
                                <p class="notif-text">Reserva #045 confirmada exitosamente</p>
                                <span class="notif-time">Hace 1 hora</span>
                            </div>
                        </div>
                        <div class="notif-item notif-warning">
                            <i class='bx bx-time'></i>
                            <div>
                                <p class="notif-text">Préstamo de <strong>Carlos Ramírez</strong> vence mañana</p>
                                <span class="notif-time">Hace 2 horas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Últimos Préstamos -->
        <div class="col-md-6 col-lg-5">
            <div class="card shadow rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stat-icon me-3" style="background:#eef2ff; width:42px; height:42px;">
                            <i class='bx bx-transfer-alt' style="color:#2563eb; font-size:20px;"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Últimos Préstamos</h5>
                            <small class="text-muted">Historial reciente</small>
                        </div>
                    </div>
                    <div class="prestamos-scroll flex-grow-1">
                        <ul class="prestamos-lista list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm">MG</div>
                                    <span>María González</span>
                                </div>
                                <span class="badge-fecha">2026-04-26</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm">CR</div>
                                    <span>Carlos Ramírez</span>
                                </div>
                                <span class="badge-fecha">2026-04-24</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm">MP</div>
                                    <span>Marcela Perdomo</span>
                                </div>
                                <span class="badge-fecha">2026-04-22</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm">NE</div>
                                    <span>Nick Escobar</span>
                                </div>
                                <span class="badge-fecha">2026-04-20</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm">LG</div>
                                    <span>Laura González</span>
                                </div>
                                <span class="badge-fecha">2026-04-18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Últimas Reservas -->
        <div class="col-md-6 col-lg-7">
            <div class="card shadow rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stat-icon me-3" style="background:rgba(139,92,246,.12); width:42px; height:42px;">
                            <i class='bx bx-calendar-check' style="color:#8b5cf6; font-size:20px;"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Últimas Reservas</h5>
                            <small class="text-muted">Historial reciente</small>
                        </div>
                    </div>
                    <div class="prestamos-scroll flex-grow-1">
                        <ul class="prestamos-lista list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm" style="background:#8b5cf6;">JM</div>
                                    <span>Juan Martínez</span>
                                </div>
                                <span class="badge-fecha">2026-04-28</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm" style="background:#8b5cf6;">AS</div>
                                    <span>Ana Suárez</span>
                                </div>
                                <span class="badge-fecha">2026-04-27</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm" style="background:#8b5cf6;">PC</div>
                                    <span>Pedro Castro</span>
                                </div>
                                <span class="badge-fecha">2026-04-25</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="user-avatar-sm" style="background:#8b5cf6;">VR</div>
                                    <span>Valentina Ríos</span>
                                </div>
                                <span class="badge-fecha">2026-04-23</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ========== BOTON FLOTANTE DE AYUDA ========== -->
    <button id="boton-ayuda" class="btn rounded-circle shadow-lg text-white" style="border: none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" width="28" height="28" fill="none">
            <line x1="28" y1="4" x2="28" y2="11" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
            <circle cx="28" cy="3.5" r="2.5" fill="#93c5fd"/>
            <rect x="11" y="11" width="34" height="22" rx="8" fill="rgba(255,255,255,0.12)" stroke="#fff" stroke-width="2"/>
            <circle cx="22" cy="22" r="4" fill="#93c5fd"/>
            <circle cx="34" cy="22" r="4" fill="#93c5fd"/>
            <circle cx="23" cy="21" r="1.5" fill="#0f1f3d"/>
            <circle cx="35" cy="21" r="1.5" fill="#0f1f3d"/>
            <rect x="21" y="27" width="14" height="2.5" rx="1.25" fill="rgba(255,255,255,0.7)"/>
            <rect x="17" y="35" width="22" height="14" rx="5" fill="rgba(255,255,255,0.12)" stroke="#fff" stroke-width="2"/>
            <circle cx="25" cy="42" r="2" fill="#93c5fd"/>
            <circle cx="31" cy="42" r="2" fill="#93c5fd"/>
            <rect x="4" y="37" width="9" height="4" rx="2" fill="rgba(255,255,255,0.45)"/>
            <rect x="43" y="37" width="9" height="4" rx="2" fill="rgba(255,255,255,0.45)"/>
        </svg>
    </button>

    <!-- ========== CHAT FLOTANTE ========== -->
    <div id="chat-ayuda" class="card shadow-lg">
        <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color: #0f1f3d;">
            <span><i class='bx bx-help-circle me-2'></i>Centro de Ayuda</span>
            <button class="btn-close btn-close-white" aria-label="Cerrar" onclick="toggleChat()"></button>
        </div>
        <div class="card-body p-3 overflow-auto">
            <p class="text-muted small">¿En que te puedo ayudar hoy? Aqui tienes recursos utiles:</p>
            <h6 class="fw-bold mt-3">Manual:</h6>
            <ul class="list-unstyled">
                <li>
                    <a href="manuales/manual_usuario.pdf" download class="btn btn-outline-secondary btn-sm w-100 mb-2 d-flex align-items-center justify-content-start">
                        <i class='bx bx-download me-2'></i> Manual de Usuario
                    </a>
                </li>
            </ul>
            <h6 class="fw-bold mt-3">Tutorial:</h6>
            <ul class="list-unstyled">
                <li>
                    <a href="https://www.youtube.com/watch?v=VIDEO1" target="_blank" class="btn btn-outline-danger btn-sm w-100 mb-2 d-flex align-items-center justify-content-start">
                        <i class='bx bx-play-circle me-2'></i> Como registrar un prestamo
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

<!-- ========== ESTILOS ========== -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Syne:wght@600;700&display=swap');

    body { background: #e8ecf4 !important; font-family: 'DM Sans', sans-serif; }

    #particles-canvas { position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0; }

    .container { position: relative; z-index: 1; font-family: 'DM Sans', sans-serif; }

    /* ── BANNER ── */
    .inv-banner {
        background: linear-gradient(135deg, #0f1f3d 0%, #1e3a6e 60%, #2563eb 100%);
        border-radius: 18px; padding: 24px 28px;
        display: flex; align-items: center; justify-content: space-between;
        flex-wrap: wrap; gap: 16px;
        box-shadow: 0 8px 32px rgba(15,31,61,.25);
        position: relative; overflow: hidden;
    }
    .inv-banner::after { content: ''; position: absolute; right: -60px; top: -60px; width: 200px; height: 200px; border-radius: 50%; background: rgba(255,255,255,.04); pointer-events: none; }
    .inv-banner::before { content: ''; position: absolute; right: 60px; bottom: -80px; width: 160px; height: 160px; border-radius: 50%; background: rgba(255,255,255,.03); pointer-events: none; }
    .inv-banner-left { display: flex; align-items: center; gap: 16px; z-index: 1; }
    .inv-banner-logo { width: 52px; height: 52px; background: rgba(255,255,255,.12); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #fff; flex-shrink: 0; border: 1px solid rgba(255,255,255,.15); }
    .inv-banner-greeting { font-size: 12px; color: rgba(255,255,255,.6); margin: 0; text-transform: uppercase; letter-spacing: .6px; font-weight: 500; }
    .inv-banner-title { font-family: 'Syne', sans-serif; font-size: 22px; font-weight: 700; color: #fff; margin: 2px 0 4px; line-height: 1.1; }
    .inv-banner-sub { font-size: 12.5px; color: rgba(255,255,255,.55); margin: 0; }
    .inv-banner-sub strong { color: rgba(255,255,255,.85); }
    .inv-banner-right { z-index: 1; }
    .inv-banner-badge { background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.18); border-radius: 30px; padding: 8px 18px; display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 500; color: rgba(255,255,255,.9); }
    .inv-banner-badge i { font-size: 16px; color: #93c5fd; }

    /* ── STAT CARDS ── */
    .stat-card { background: #fff; border: 1px solid #e4eaf3; border-radius: 14px; padding: 16px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 2px 12px rgba(15,31,61,.06); transition: transform .2s, box-shadow .2s; position: relative; overflow: hidden; }
    .stat-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, #0f1f3d, #2563eb); border-radius: 14px 14px 0 0; }
    .stat-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(15,31,61,.1); }
    .stat-icon { width: 46px; height: 46px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 22px; }
    .stat-info { display: flex; flex-direction: column; gap: 2px; }
    .stat-label { font-size: 11px; color: #8a97ad; font-weight: 500; text-transform: uppercase; letter-spacing: .5px; }
    .stat-num { font-family: 'Syne', sans-serif; font-size: 26px; font-weight: 700; color: #0f1f3d; line-height: 1; }

    /* ── CHART BADGE ── */
    .chart-badge { background: #eef2ff; color: #2563eb; font-size: 11px; font-weight: 600; padding: 4px 10px; border-radius: 20px; font-family: 'Syne', sans-serif; }

    /* ── NOTIFICACIONES ── */
    .notif-list { display: flex; flex-direction: column; gap: 10px; }
    .notif-item { display: flex; align-items: flex-start; gap: 10px; padding: 10px 12px; border-radius: 10px; }
    .notif-item i { font-size: 18px; flex-shrink: 0; margin-top: 1px; }
    .notif-text { font-size: 13px; color: #0f1f3d; margin: 0 0 2px; line-height: 1.4; }
    .notif-time { font-size: 11px; color: #94a3b8; }
    .notif-warning { background: #fffbeb; }
    .notif-warning i { color: #f59e0b; }
    .notif-info { background: #eff6ff; }
    .notif-info i { color: #2563eb; }
    .notif-success { background: #f0fdf4; }
    .notif-success i { color: #10b981; }

    /* ── TARJETAS ── */
    .card { border: 1px solid #e4eaf3 !important; border-radius: 16px !important; overflow: hidden; box-shadow: 0 2px 12px rgba(15,31,61,.07) !important; transition: transform .2s, box-shadow .2s; background: #fff !important; }
    .card:hover { transform: translateY(-3px); box-shadow: 0 8px 28px rgba(15,31,61,.12) !important; }
    .card::before { content: ''; display: block; height: 3px; background: linear-gradient(90deg, #0f1f3d, #2563eb); }
    .card-body { background: #fff !important; border-radius: 0 !important; padding: 1.4rem 1.5rem !important; box-shadow: none !important; }
    .card-title { font-family: 'Syne', sans-serif; font-size: 15px; font-weight: 700; color: #0f1f3d; letter-spacing: -.2px; }

    /* ── LISTAS ── */
    .prestamos-scroll { overflow-y: auto; max-height: 200px; scrollbar-width: thin; scrollbar-color: #c5d0e8 #f0f3f8; }
    .prestamos-scroll::-webkit-scrollbar { width: 5px; }
    .prestamos-scroll::-webkit-scrollbar-thumb { background: #c5d0e8; border-radius: 10px; }
    .prestamos-lista { margin: 0; padding: 0; }
    .prestamos-lista .list-group-item { border: none !important; border-bottom: 1px solid #edf1f8 !important; padding: .6rem .3rem; font-size: 13px; color: #0f1f3d; background: transparent; transition: background .15s; }
    .prestamos-lista .list-group-item:hover { background: #eef2ff !important; border-radius: 8px; }
    .prestamos-lista .list-group-item:last-child { border-bottom: none !important; }

    /* Avatar mini */
    .user-avatar-sm { width: 28px; height: 28px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 700; color: #fff; flex-shrink: 0; letter-spacing: .3px; }

    /* Badge fecha */
    .badge-fecha { font-size: 11px; color: #94a3b8; font-family: 'DM Sans', sans-serif; white-space: nowrap; }

    /* ── BOTÓN ROBOT ── */
    #boton-ayuda { position: fixed; bottom: 18px; left: 20px; width: 52px; height: 52px; z-index: 1045; display: flex; justify-content: center; align-items: center; transition: transform .2s, box-shadow .2s; background: linear-gradient(135deg, #1e3a6e, #2563eb) !important; box-shadow: 0 4px 18px rgba(37,99,235,.45) !important; }
    #boton-ayuda:hover { transform: scale(1.1); box-shadow: 0 6px 26px rgba(37,99,235,.6) !important; }

    /* ── CHAT ── */
    #chat-ayuda { position: fixed; bottom: 85px; left: 20px; width: 316px; max-height: 420px; z-index: 1044; display: none; border-radius: 18px !important; overflow: hidden; background-color: #fff !important; border: 1px solid #e4eaf3 !important; box-shadow: 0 8px 40px rgba(15,31,61,.14) !important; }
    #chat-ayuda::before { display: none !important; }
    #chat-ayuda .card-header { background: linear-gradient(135deg, #0f1f3d, #1e3a6e) !important; padding: 13px 16px; font-family: 'Syne', sans-serif; font-size: 14px; font-weight: 600; border-bottom: none; }
    #chat-ayuda .card-body { background: #fff !important; max-height: 330px; overflow-y: auto; padding: 14px 16px !important; border-radius: 0 !important; box-shadow: none !important; }
    #chat-ayuda h6 { font-family: 'Syne', sans-serif; font-size: 11px; font-weight: 700; color: #2563eb; text-transform: uppercase; letter-spacing: .6px; }
    #chat-ayuda .btn-outline-secondary { border-color: #c5d0e8; color: #2563eb; font-size: 12px; border-radius: 8px; }
    #chat-ayuda .btn-outline-secondary:hover { background: #eef2ff; border-color: #2563eb; color: #1a4dbf; }
    #chat-ayuda .btn-outline-danger { font-size: 12px; border-radius: 8px; }
</style>

<!-- ========== SCRIPTS ========== -->
<script>
    /* ── FECHA HOY ── */
    (function() {
        const el = document.getElementById('inv-fecha-hoy');
        if (!el) return;
        const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        el.textContent = new Date().toLocaleDateString('es-CO', opciones);
    })();

    /* ── CHAT ── */
    const chat = document.getElementById("chat-ayuda");
    const btn  = document.getElementById("boton-ayuda");
    btn.addEventListener("click", () => {
        chat.style.display = chat.style.display === "none" || chat.style.display === "" ? "block" : "none";
    });
    function toggleChat() { chat.style.display = "none"; }
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    /* ── KPIs con animación (datos quemados) ── */
    const kpis = { 'stat-elementos': 148, 'stat-prestamos': 23, 'stat-reservas': 7, 'stat-usuarios': 34 };
    Object.entries(kpis).forEach(([id, val]) => animarNumero(id, val));

    /* ── GRÁFICO DE ACTIVIDAD ── */
    const ctx = document.getElementById('grafico-actividad').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Nov', 'Dic', 'Ene', 'Feb', 'Mar', 'Abr'],
            datasets: [
                {
                    label: 'Préstamos',
                    data: [18, 25, 30, 22, 28, 23],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37,99,235,.08)',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#2563eb',
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Reservas',
                    data: [8, 12, 9, 15, 11, 7],
                    borderColor: '#8b5cf6',
                    backgroundColor: 'rgba(139,92,246,.06)',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#8b5cf6',
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: { font: { family: 'DM Sans', size: 12 }, boxWidth: 12, padding: 16 }
                },
                tooltip: { mode: 'index', intersect: false }
            },
            scales: {
                x: { grid: { display: false }, ticks: { font: { family: 'DM Sans', size: 12 }, color: '#8a97ad' } },
                y: { grid: { color: 'rgba(0,0,0,.04)' }, ticks: { font: { family: 'DM Sans', size: 12 }, color: '#8a97ad' }, beginAtZero: true }
            }
        }
    });
});

/* ── Animación de conteo numérico ── */
function animarNumero(id, destino) {
    const el = document.getElementById(id);
    if (!el) return;
    const duracion = 1200;
    const inicio   = Date.now();
    const tick = () => {
        const progreso = Math.min((Date.now() - inicio) / duracion, 1);
        const ease = 1 - Math.pow(1 - progreso, 3);
        el.textContent = Math.round(ease * destino);
        if (progreso < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
}
</script>

<script>
/* ── PARTÍCULAS ANIMADAS ── */
(function() {
    const canvas = document.getElementById('particles-canvas');
    const ctx    = canvas.getContext('2d');
    let W, H, particles = [];
    const COLORS = ['rgba(37,99,235,','rgba(96,165,250,','rgba(139,92,246,','rgba(15,31,61,'];

    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }

    function createParticle() {
        return {
            x: Math.random() * W, y: Math.random() * H,
            r: Math.random() * 2.5 + 0.5,
            alpha: Math.random() * 0.4 + 0.05,
            dx: (Math.random() - 0.5) * 0.4,
            dy: (Math.random() - 0.5) * 0.4,
            color: COLORS[Math.floor(Math.random() * COLORS.length)]
        };
    }

    function init() {
        resize(); particles = [];
        const count = Math.floor((W * H) / 12000);
        for (let i = 0; i < count; i++) particles.push(createParticle());
    }

    function draw() {
        ctx.clearRect(0, 0, W, H);
        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = p.color + p.alpha + ')';
            ctx.fill();
            p.x += p.dx; p.y += p.dy;
            if (p.x < 0 || p.x > W) p.dx *= -1;
            if (p.y < 0 || p.y > H) p.dy *= -1;
        });
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const a = particles[i], b = particles[j];
                const dist = Math.hypot(a.x - b.x, a.y - b.y);
                if (dist < 100) {
                    ctx.beginPath();
                    ctx.moveTo(a.x, a.y);
                    ctx.lineTo(b.x, b.y);
                    ctx.strokeStyle = 'rgba(37,99,235,' + (0.06 * (1 - dist / 100)) + ')';
                    ctx.lineWidth = 0.6;
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(draw);
    }

    window.addEventListener('resize', init);
    init(); draw();
})();
</script>