<!-- =====================================
     Archivo: Registrar Usuario
     Estilo: Azul marino minimalista (mismo sistema)
====================================== -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- ===== FONDO DECORATIVO SVG ===== -->
<svg style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;" viewBox="0 0 1440 900" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <radialGradient id="rg1" cx="85%" cy="5%" r="50%">
            <stop offset="0%" stop-color="#c5d4f5" stop-opacity=".7"/>
            <stop offset="100%" stop-color="#e8eef8" stop-opacity="0"/>
        </radialGradient>
        <radialGradient id="rg2" cx="5%" cy="95%" r="50%">
            <stop offset="0%" stop-color="#b8cef5" stop-opacity=".6"/>
            <stop offset="100%" stop-color="#e8eef8" stop-opacity="0"/>
        </radialGradient>
        <radialGradient id="rg3" cx="50%" cy="50%" r="40%">
            <stop offset="0%" stop-color="#dce6fa" stop-opacity=".35"/>
            <stop offset="100%" stop-color="#e8eef8" stop-opacity="0"/>
        </radialGradient>
        <pattern id="dotpat" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
            <circle cx="1" cy="1" r="1" fill="#3c56c7" fill-opacity=".07"/>
        </pattern>
    </defs>
    <rect width="1440" height="900" fill="url(#rg1)"/>
    <rect width="1440" height="900" fill="url(#rg2)"/>
    <rect width="1440" height="900" fill="url(#rg3)"/>
    <rect width="1440" height="900" fill="url(#dotpat)"/>
    <circle cx="1340" cy="100" r="220" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".1"/>
    <circle cx="1340" cy="100" r="150" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".08"/>
    <circle cx="1340" cy="100" r="80"  fill="#3c56c7" fill-opacity=".05"/>
    <circle cx="80"   cy="820" r="180" fill="none" stroke="#0d3087" stroke-width="1" stroke-opacity=".09"/>
    <circle cx="80"   cy="820" r="110" fill="#0d3087" fill-opacity=".05"/>
    <circle cx="100"  cy="400" r="90"  fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".07"/>
    <line x1="0" y1="100" x2="150" y2="0"   stroke="#3c56c7" stroke-width="1" stroke-opacity=".09"/>
    <line x1="0" y1="160" x2="210" y2="0"   stroke="#3c56c7" stroke-width="1" stroke-opacity=".06"/>
    <line x1="1440" y1="700" x2="1240" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".08"/>
    <line x1="1440" y1="760" x2="1300" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".06"/>
    <rect x="40"   y="40"  width="44" height="44" rx="10" fill="none" stroke="#3c56c7" stroke-width="1.5" stroke-opacity=".12"/>
    <rect x="54"   y="54"  width="16" height="16" rx="4"  fill="#3c56c7" fill-opacity=".09"/>
    <rect x="1356" y="816" width="44" height="44" rx="10" fill="none" stroke="#0d3087" stroke-width="1.5" stroke-opacity=".1"/>
    <circle cx="220"  cy="70"  r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="255"  cy="105" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="1200" cy="820" r="3"   fill="#3c56c7" fill-opacity=".18"/>
</svg>

<style>
    body { background: #e8eef8; }

    /* ===== CARD ===== */
    .usu-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,.13);
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .usu-card::before {
        content: '';
        display: block;
        height: 4px;
        background: linear-gradient(90deg, #0d3087, #3c56c7, #6c83e0);
    }

    /* ===== HEADER ===== */
    .usu-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 1.4rem 1.8rem 0.6rem;
    }

    .usu-header-icon {
        width: 46px;
        height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .usu-header-icon i { font-size: 22px; color: #3c56c7; }

    .usu-header-text h4 { font-size: 17px; font-weight: 700; color: #0d3087; margin: 0; font-family: 'Syne', sans-serif; }
    .usu-header-text p  { font-size: 12.5px; color: #94a3b8; margin: 2px 0 0; }

    .usu-divider { height: 1px; background: #e8edf6; margin: 0.4rem 1.8rem 1.4rem; }
    .usu-body    { padding: 0 1.8rem 1.8rem; }

    /* ===== LABELS ===== */
    .usu-body .form-label {
        font-size: 13px;
        font-weight: 600;
        color: #2d4080;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .usu-body .form-label i { color: #3c56c7; font-size: 15px; }

    /* ===== INPUTS Y SELECTS ===== */
    .usu-body .form-control,
    .usu-body .form-select {
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 9px 13px;
        font-size: 13px;
        color: #2d4080;
        background: #f8faff;
        transition: border-color .2s, box-shadow .2s;
        outline: none;
    }

    .usu-body .form-control:focus,
    .usu-body .form-select:focus {
        border-color: #3c56c7;
        box-shadow: 0 0 0 3px rgba(60,86,199,.1);
        background: #fff;
    }

    .usu-body .form-control::placeholder { color: #a8b8d8; }

    /* ===== SECCIÓN SEPARADORA ===== */
    .usu-section-label {
        font-size: 11px;
        font-weight: 700;
        color: #3c56c7;
        text-transform: uppercase;
        letter-spacing: 0.7px;
        margin: 1.2rem 0 0.8rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .usu-section-label::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e2e9f8;
    }

    /* ===== ERRORES ===== */
    .usu-body .text-danger {
        font-size: 11.5px;
        margin-top: 4px;
    }

    /* ===== BOTONES ===== */
    .btn-guardar {
        background: #3c56c7;
        color: #fff;
        border: none;
        border-radius: 9px;
        padding: 10px 26px;
        font-size: 13.5px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: background .2s, box-shadow .2s;
        font-family: inherit;
    }

    .btn-guardar:hover {
        background: #2d44b0;
        box-shadow: 0 4px 14px rgba(60,86,199,.3);
        color: #fff;
    }

    .btn-cancelar {
        background: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 10px 22px;
        font-size: 13.5px;
        font-weight: 500;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        text-decoration: none;
        transition: background .2s, border-color .2s;
        font-family: inherit;
    }

    .btn-cancelar:hover {
        background: #e2ebff;
        border-color: #b8c8ec;
        color: #1e2a45;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .usu-body    { padding: 0 1rem 1.2rem; }
        .usu-header  { padding: 1.2rem 1rem 0.4rem; }
        .usu-divider { margin: 0.4rem 1rem 1rem; }
    }
</style>

<div class="container mt-4 mb-5" style="position:relative;z-index:1;">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="usu-card">

                <!-- Header -->
                <div class="usu-header">
                    <div class="usu-header-icon">
                        <i class='bx bx-user-plus'></i>
                    </div>
                    <div class="usu-header-text">
                        <h4>Registrar Nuevo Usuario</h4>
                        <p>Completa los campos para crear un usuario en el sistema</p>
                    </div>
                </div>

                <div class="usu-divider"></div>

                <div class="usu-body">

                    <p style="font-size:12px;color:#94a3b8;margin-bottom:1rem;">
                        <span class="text-danger">*</span> Los campos con asterisco son obligatorios.
                    </p>

                    <form action="<?= getUrl('usuarios', 'usuarios', 'postInsert'); ?>" method="POST" onsubmit="return validarForm(event)">

                        <!-- Sección: Documento -->
                        <div class="usu-section-label">Identificación</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tipo_docu_id" class="form-label">
                                    <i class='bx bx-id-card'></i> Tipo de Documento <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="tipo_docu_id" id="tipo_docu_id" required>
                                    <option value="" disabled <?= empty($form_data['tipo_docu_id']) ? 'selected' : '' ?>>Selecciona el tipo</option>
                                    <?php foreach ($tipos_doc as $tipo): ?>
                                        <option value="<?= $tipo['tipo_docu_id']; ?>" <?= (isset($form_data['tipo_docu_id']) && $form_data['tipo_docu_id'] == $tipo['tipo_docu_id']) ? 'selected' : '' ?>>
                                            <?= $tipo['tipo_docu_nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="text-danger mt-1" id="errortipo_docu_id"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="usu_numero_docu" class="form-label">
                                    <i class='bx bx-barcode'></i> Número de Documento <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="usu_numero_docu" id="usu_numero_docu" class="form-control"
                                    value="<?= $form_data['usu_numero_docu'] ?? '' ?>" required
                                    placeholder="Ej: 1234567890" onchange="validarNumDocum(this)">
                                <div class="text-danger mt-1" id="errorusu_numero_docu"></div>
                            </div>
                        </div>

                        <!-- Sección: Datos personales -->
                        <div class="usu-section-label">Datos Personales</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="usu_nombre" class="form-label">
                                    <i class='bx bx-user'></i> Nombre <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="usu_nombre" id="usu_nombre" class="form-control" required
                                    placeholder="Escribe tu nombre"
                                    value="<?= $form_data['usu_nombre'] ?? '' ?>" onchange="validarNombre(this)">
                                <div class="text-danger mt-1" id="errorusu_nombre"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="usu_apellido" class="form-label">
                                    <i class='bx bx-user'></i> Apellido <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="usu_apellido" id="usu_apellido" class="form-control" required
                                    placeholder="Escribe tu apellido"
                                    value="<?= $form_data['usu_apellido'] ?? '' ?>" onchange="validarApellido(this)">
                                <div class="text-danger mt-1" id="errorusu_apellido"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="usu_email" class="form-label">
                                    <i class='bx bx-envelope'></i> Correo Electrónico <span class="text-danger">*</span>
                                </label>
                                <input type="email" name="usu_email" id="usu_email" class="form-control" required
                                    placeholder="correo@ejemplo.com"
                                    value="<?= $form_data['usu_email'] ?? '' ?>" onchange="validarCorreo(this)">
                                <div class="text-danger mt-1" id="errorusu_email"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="usu_telefono" class="form-label">
                                    <i class='bx bx-phone'></i> Teléfono <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="usu_telefono" id="usu_telefono" class="form-control" required
                                    placeholder="Ej: 3001234567"
                                    value="<?= $form_data['usu_telefono'] ?? '' ?>" onchange="validarTelefono(this)">
                                <div class="text-danger mt-1" id="errorusu_telefono"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="usu_direccion" class="form-label">
                                <i class='bx bx-map'></i> Dirección <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="usu_direccion" id="usu_direccion" class="form-control" required
                                placeholder="Escribe tu dirección actual"
                                value="<?= $form_data['usu_direccion'] ?? '' ?>" onchange="validarDireccion(this)">
                            <div class="text-danger mt-1" id="errorusu_direccion"></div>
                        </div>

                        <!-- Sección: Acceso -->
                        <div class="usu-section-label">Acceso al Sistema</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="rol_id" class="form-label">
                                    <i class='bx bx-shield'></i> Rol <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="rol_id" id="rol_id" required>
                                    <option value="" selected disabled>Selecciona el rol</option>
                                    <?php foreach ($roles as $rol): ?>
                                        <option value="<?= $rol['rol_id']; ?>" <?= (isset($form_data['rol_id']) && $form_data['rol_id'] == $rol['rol_id']) ? 'selected' : '' ?>>
                                            <?= $rol['rol_nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="usu_clave" class="form-label">
                                    <i class='bx bx-lock-alt'></i> Contraseña <span class="text-danger">*</span>
                                </label>
                                <input type="password" name="usu_clave" id="usu_clave" class="form-control" required
                                    placeholder="Crea una contraseña segura"
                                    value="<?= $form_data['usu_clave'] ?? '' ?>" onchange="validarClave(this)">
                                <div class="text-danger mt-1" id="errorusu_clave"></div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <button type="submit" class="btn-guardar">
                                <i class='bx bx-save'></i> Guardar Usuario
                            </button>
                            <a href="<?= getUrl('usuarios', 'usuarios', 'consult'); ?>" class="btn-cancelar">
                                <i class='bx bx-arrow-back'></i> Cancelar
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="/Inventario/Web/Js/validaciones/validaciones.js"></script>