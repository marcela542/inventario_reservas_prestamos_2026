<link rel="stylesheet" href="/Inventario/Web/Css/login.css?v=999">

<div class="contenedor">

    <!-- Panel izquierdo (marca) -->
    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <div class="brand-logo">
                <img src="/Inventario/Web/Img/inevtix2.png" alt="Logo Inventix" />
            </div>
            <h2>Inventix</h2>
            <p>Gestión inteligente de inventario y préstamos</p>
            <div class="brand-dots">
                <span class="dot on"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>

    <!-- Formulario de Login -->
    <div class="form-box login">
        <form id="loginForm" action="<?php echo getUrl('login', 'login', 'postLogin'); ?>" method="POST">

            <h1>Bienvenido de nuevo</h1>
            <p class="form-subtitle">Ingresa tus credenciales para continuar</p>

            <!-- Documento -->
            <div class="input-box">
                <label for="usu_numero_docu">Número de documento</label>
                <div class="input-wrap">
                    <input type="text" name="usu_numero_docu" id="usu_numero_docu"
                           placeholder="Ej: 1234567890" autocomplete="username">
                    <span class="input-icon">
                        <i class='bx bxs-user'></i>
                    </span>
                </div>
                <small class="error" id="error-doc">Solo se permiten números</small>
            </div>

            <!-- Contraseña -->
            <div class="input-box">
                <label for="usu_clave">Contraseña</label>
                <div class="input-wrap">
                    <input type="password" id="usu_clave" name="usu_clave"
                           placeholder="••••••••" autocomplete="current-password">
                    <span class="input-icon">
                        <i class='bx bxs-lock-alt' id="iconLock"></i>
                        <i class='bx bx-show toggle-password' id="togglePassword" style="display:none; cursor:pointer;"></i>
                    </span>
                </div>
                <small class="error" id="error-pass">Este campo no puede estar vacío</small>
            </div>

            <button type="submit" class="btn">Iniciar sesión</button>

            <p class="footer-copy">© 2025 Inventix. Todos los derechos reservados.</p>

        </form>
    </div>

</div>

<script src="/inventario/Web/Js/Login/login.js"></script>

<style>
    /* ===== LABELS ===== */
    .input-box label {
        font-size: 12.5px;
        font-weight: 500;
        color: #4a5568;
        display: block;
        margin-bottom: 6px;
        text-align: left;
        letter-spacing: 0.02em;
    }

    /* ===== WRAP RELATIVO PARA ÍCONO ===== */
    .input-wrap {
        position: relative;
    }

    .input-icon {
        position: absolute;
        right: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #b0bac9;
        font-size: 18px;
        line-height: 0;
        pointer-events: none;
    }

    .input-icon .toggle-password {
        pointer-events: all;
    }

    /* ===== VALIDACIONES ===== */
    small.error {
        color: #dc3545;
        font-size: 12px;
        display: none;
        margin-top: 4px;
        text-align: left;
        display: none;
    }

    input.invalid,
    select.invalid {
        border: 1.5px solid #dc3545 !important;
        background-color: #fff8f8 !important;
    }

    /* ===== SUBTÍTULO Y FOOTER ===== */
    .form-subtitle {
        font-size: 13.5px !important;
        color: #8492a6 !important;
        margin: -10px 0 1.8rem !important;
        text-align: left;
    }

    .footer-copy {
        font-size: 11.5px !important;
        color: #c0cad8 !important;
        margin-top: 1.2rem !important;
        text-align: center;
    }
</style>