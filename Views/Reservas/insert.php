<?php // Suponiendo que $usuarios y $destinos llegan desde el controlador ?>

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
    <line x1="0" y1="220" x2="270" y2="0"   stroke="#3c56c7" stroke-width="1" stroke-opacity=".04"/>
    <line x1="1440" y1="700" x2="1240" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".08"/>
    <line x1="1440" y1="760" x2="1300" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".06"/>
    <line x1="1440" y1="820" x2="1360" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".04"/>
    <rect x="40"   y="40"  width="44" height="44" rx="10" fill="none" stroke="#3c56c7" stroke-width="1.5" stroke-opacity=".12"/>
    <rect x="54"   y="54"  width="16" height="16" rx="4"  fill="#3c56c7" fill-opacity=".09"/>
    <rect x="1356" y="816" width="44" height="44" rx="10" fill="none" stroke="#0d3087" stroke-width="1.5" stroke-opacity=".1"/>
    <rect x="1370" y="830" width="16" height="16" rx="4"  fill="#0d3087" fill-opacity=".07"/>
    <circle cx="220"  cy="70"  r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="255"  cy="105" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="190"  cy="110" r="2.5" fill="#0d3087" fill-opacity=".13"/>
    <circle cx="1200" cy="820" r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="1235" cy="855" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="1170" cy="845" r="2.5" fill="#0d3087" fill-opacity=".13"/>
</svg>

<style>
    body { background: #e8eef8; }

    /* ===== CARD PRINCIPAL ===== */
    .reserva-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,.13);
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .reserva-card::before {
        content: '';
        display: block;
        height: 4px;
        background: linear-gradient(90deg, #0d3087, #3c56c7, #6c83e0);
    }

    /* ===== HEADER ===== */
    .reserva-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 1.4rem 1.8rem 0.6rem;
    }

    .reserva-header-icon {
        width: 46px;
        height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .reserva-header-icon i { font-size: 22px; color: #3c56c7; }

    .reserva-header-text h4 {
        font-size: 17px;
        font-weight: 700;
        color: #0d3087;
        margin: 0;
    }

    .reserva-header-text p {
        font-size: 12.5px;
        color: #94a3b8;
        margin: 2px 0 0;
    }

    .reserva-divider {
        height: 1px;
        background: #e8edf6;
        margin: 0.4rem 1.8rem 0.8rem;
    }

    .reserva-body { padding: 0 1.8rem 1.8rem; }

    /* ===== BADGE OBLIGATORIO ===== */
    .badge-required {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        background: #fff0f0;
        border: 1px solid #fecaca;
        border-radius: 6px;
        padding: 3px 9px;
        font-size: 11px;
        color: #dc3545;
        font-weight: 500;
        margin-bottom: 1rem;
    }

    /* ===== STEPPER ===== */
    .stepper {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0;
        margin-bottom: 1.6rem;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
    }

    .step-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 2px solid #d6e0fa;
        background: #f5f8ff;
        color: #a8b8d8;
        font-size: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .3s;
    }

    .step.active .step-circle {
        background: #3c56c7;
        border-color: #3c56c7;
        color: #fff;
        box-shadow: 0 0 0 4px rgba(60,86,199,.15);
    }

    .step.done .step-circle {
        background: #e0f4ea;
        border-color: #1a7a42;
        color: #1a7a42;
    }

    .step-label { font-size: 11px; font-weight: 600; color: #a8b8d8; letter-spacing: .03em; }
    .step.active .step-label { color: #3c56c7; }
    .step.done  .step-label  { color: #1a7a42; }

    .step-line {
        flex: 1;
        height: 2px;
        background: #d6e0fa;
        margin: 0 8px;
        margin-bottom: 18px;
        max-width: 80px;
    }

    /* ===== LABELS ===== */
    .form-label {
        font-size: 12.5px;
        font-weight: 600;
        color: #3d5a99;
        margin-bottom: 6px;
        letter-spacing: .01em;
    }

    .form-label i { color: #3c56c7; margin-right: 4px; }

    /* ===== INPUTS / SELECTS / TEXTAREA ===== */
    .form-control,
    .form-select {
        border: 1.5px solid #d6e0fa !important;
        border-radius: 10px !important;
        padding: 10px 14px !important;
        font-size: 13.5px !important;
        color: #2d4080 !important;
        background: #f5f8ff !important;
        background-color: #f5f8ff !important;
        color-scheme: light !important;
        transition: border-color .2s, box-shadow .2s, background .2s;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #3c56c7 !important;
        background: #ffffff !important;
        background-color: #ffffff !important;
        box-shadow: 0 0 0 3px rgba(60,86,199,.1) !important;
        outline: none !important;
        color: #1e2a45 !important;
    }

    .form-control::placeholder { color: #a8b8d8; font-weight: 400; }
    textarea.form-control { resize: none; }

    /* ===== CONTENEDOR ELEMENTOS DISPONIBLES ===== */
    .elementos-box {
        border: 1.5px solid #d6e0fa;
        border-radius: 12px;
        background: #f5f8ff;
        padding: 0.85rem 1rem;
        max-height: 100px;
        overflow-y: auto;
        color: #2d4080;
        font-size: 13px;
    }

    .elementos-box::-webkit-scrollbar { width: 5px; }
    .elementos-box::-webkit-scrollbar-thumb { background: #c5d4f5; border-radius: 4px; }

    /* ===== CARRITO ===== */
    .carrito-wrap {
        background: #f5f8ff;
        border: 1.5px solid #d6e0fa;
        border-radius: 12px;
        padding: 0.85rem 1rem;
        margin-top: 0.4rem;
    }

    .carrito-title {
        font-size: 12.5px;
        font-weight: 700;
        color: #0d3087;
        margin-bottom: 0.7rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .carrito-title i { color: #3c56c7; font-size: 16px; }

    #lista-seleccionados { display: flex; flex-wrap: wrap; gap: 8px; }

    #lista-seleccionados .badge {
        background: #3c56c7 !important;
        border-radius: 10px !important;
        font-size: 12.5px;
        padding: 6px 12px !important;
    }

    /* ===== SECCIÓN INFO PASO 2 ===== */
    .info-section {
        background: #f5f8ff;
        border: 1.5px solid #d6e0fa;
        border-radius: 14px;
        padding: 1.1rem 1.3rem;
        margin-bottom: 1rem;
    }

    .info-section-title {
        font-size: 13px;
        font-weight: 700;
        color: #0d3087;
        margin-bottom: 0.6rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .info-section-title i { color: #3c56c7; }

    #infoUsuario, #infoElementos {
        font-size: 13px;
        color: #2d4080;
    }

    /* ===== BOTONES ===== */
    .btn-prim {
        background: #3c56c7;
        background-color: #3c56c7;
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 11px 28px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: background .2s, transform .1s;
        font-family: inherit;
    }

    .btn-prim:hover  { background: #2d44b0; background-color: #2d44b0; color: #fff; }
    .btn-prim:active { transform: scale(.97); }

    .btn-sec {
        background: #f0f4ff;
        background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 10px;
        padding: 11px 22px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: background .2s, border-color .2s;
        font-family: inherit;
    }

    .btn-sec:hover { background: #e2ebff; background-color: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    .btn-ok {
        background: #1a7a42;
        background-color: #1a7a42;
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 11px 28px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: background .2s;
        font-family: inherit;
    }

    .btn-ok:hover { background: #155e33; background-color: #155e33; color: #fff; }

    .reserva-actions-center {
        display: flex;
        justify-content: center;
        margin-top: 1.6rem;
    }

    .reserva-actions-between {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1.6rem;
        padding-top: 1.2rem;
        border-top: 1px solid #e8edf6;
        gap: 12px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .reserva-body   { padding: 0 1rem 1.2rem; }
        .reserva-header { padding: 1.2rem 1rem 0.4rem; }
        .reserva-divider{ margin: 0.4rem 1rem 0.7rem; }
        .btn-prim, .btn-sec, .btn-ok { width: 100%; justify-content: center; }
        .reserva-actions-between { flex-direction: column; }
    }
</style>

<div class="container mt-5 mb-5" style="position:relative;z-index:1;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="reserva-card">

                <!-- Header -->
                <div class="reserva-header">
                    <div class="reserva-header-icon">
                        <i class="bx bx-calendar-check"></i>
                    </div>
                    <div class="reserva-header-text">
                        <h4>Registrar Reserva</h4>
                        <p>Completa los pasos para registrar una nueva reserva</p>
                    </div>
                </div>

                <div class="reserva-divider"></div>

                <div class="reserva-body">

                    <div class="badge-required">
                        <span>*</span> Campos obligatorios
                    </div>

                    <!-- Stepper -->
                    <div class="stepper">
                        <div class="step active" id="step1">
                            <div class="step-circle">1</div>
                            <span class="step-label">Selección</span>
                        </div>
                        <div class="step-line"></div>
                        <div class="step" id="step2">
                            <div class="step-circle">2</div>
                            <span class="step-label">Confirmación</span>
                        </div>
                    </div>

                    <!-- ===== CAROUSEL ===== -->
                    <div id="prestamoCarousel" class="carousel slide" data-bs-interval="false" data-bs-wrap="false">
                        <div class="carousel-inner">

                            <!-- Paso 1 -->
                            <div class="carousel-item active">
                                <form id="formPaso1" class="needs-validation" novalidate>
                                    <div class="row g-3">

                                        <!-- Usuario -->
                                        <div class="col-md-6">
                                            <label for="usu_id" class="form-label">
                                                <i class="bx bx-user"></i> Usuario <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="usu_id" name="usu_id" required size="6" style="max-height:200px;overflow-y:auto;">
                                                <option value="" selected disabled>Seleccione un usuario</option>
                                                <?php foreach ($usuarios as $usuario): ?>
                                                    <option value="<?= $usuario['usu_id'] ?>"
                                                        data-doc="<?= $usuario['usu_numero_docu'] ?? '' ?>"
                                                        data-email="<?= $usuario['usu_email'] ?? '' ?>">
                                                        <?= htmlspecialchars($usuario['usu_nombre'] . ' ' . $usuario['usu_apellido']) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">Seleccione un usuario.</div>
                                        </div>

                                        <!-- Tipo de Elemento -->
                                        <div class="col-md-6">
                                            <label for="tipo_elemento" class="form-label">
                                                <i class="bx bx-cube"></i> Tipo de Elemento <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="tipo_elemento" required>
                                                <option value="" selected disabled>Seleccione tipo</option>
                                                <option value="1">Devolutivo</option>
                                                <option value="2">No Devolutivo</option>
                                            </select>
                                            <div class="invalid-feedback">Seleccione un tipo de elemento.</div>
                                        </div>

                                        <!-- Categorías -->
                                        <div class="col-12">
                                            <label for="cate_id" class="form-label">
                                                <i class="bx bx-category-alt"></i> Categoría <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="cate_id" name="cate_id[]" multiple required disabled>
                                                <option value="" disabled>Seleccione primero el tipo de elemento</option>
                                            </select>
                                            <div class="invalid-feedback">Seleccione al menos una categoría.</div>
                                        </div>

                                        <!-- Elementos disponibles -->
                                        <div class="col-12">
                                            <label class="form-label">
                                                <i class="bx bx-box"></i> Elementos disponibles
                                            </label>
                                            <div id="elementos-container" class="elementos-box">
                                                <p class="text-muted small mb-0">Seleccione una categoría para mostrar elementos.</p>
                                            </div>
                                        </div>

                                        <!-- Carrito -->
                                        <div class="col-12">
                                            <div class="carrito-wrap">
                                                <div class="carrito-title">
                                                    <i class="bx bx-cart"></i> Elementos seleccionados
                                                </div>
                                                <div id="lista-seleccionados"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Botón continuar -->
                                    <div class="reserva-actions-center">
                                        <button type="submit" class="btn-prim">
                                            <i class="bx bx-right-arrow-alt"></i> Continuar
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Paso 2 -->
                            <div class="carousel-item">
                                <form id="formPaso2" action="<?= getUrl('reservas', 'reservas', 'postInsert'); ?>" method="POST" class="needs-validation" novalidate>

                                    <!-- Info usuario -->
                                    <div class="info-section">
                                        <div class="info-section-title">
                                            <i class="bx bx-user"></i> Datos del Usuario
                                        </div>
                                        <p id="infoUsuario" class="mb-0"></p>
                                    </div>

                                    <!-- Info elementos -->
                                    <div class="info-section">
                                        <div class="info-section-title">
                                            <i class="bx bx-box"></i> Elementos Seleccionados
                                        </div>
                                        <div id="infoElementos"></div>
                                    </div>

                                    <!-- Fechas y horas -->
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label for="fecha_prestamo" class="form-label">
                                                <i class="bx bx-calendar"></i> Fecha de solicitud <span class="text-danger">*</span>
                                            </label>
                                            <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo" required min="<?= date('Y-m-d') ?>">
                                            <div class="invalid-feedback">Seleccione la fecha.</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="reserva_fecha_inicio" class="form-label">
                                                <i class="bx bx-time"></i> Hora Inicio <span class="text-danger">*</span>
                                            </label>
                                            <input type="time" class="form-control" id="reserva_fecha_inicio" name="reserva_fecha_inicio" required>
                                            <div class="invalid-feedback">Seleccione la hora de inicio.</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="reserva_fecha_fin" class="form-label">
                                                <i class="bx bx-time-five"></i> Hora Fin <span class="text-danger">*</span>
                                            </label>
                                            <input type="time" class="form-control" id="reserva_fecha_fin" name="reserva_fecha_fin" required>
                                            <div class="invalid-feedback">Seleccione la hora de fin.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fecha_prestamo_entrega" class="form-label">
                                                <i class="bx bx-calendar"></i> Fecha de Entrega <span class="text-danger">*</span>
                                            </label>
                                            <input type="date" class="form-control" id="fecha_prestamo_entrega" name="fecha_prestamo_entrega" required min="<?= date('Y-m-d') ?>">
                                            <div class="invalid-feedback">Seleccione la fecha.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="area_destino" class="form-label">
                                                <i class="bx bx-map"></i> Destino <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="area_destino" name="area_destino" required>
                                                <option value="" selected disabled>Seleccione un destino</option>
                                                <?php foreach ($destinos as $destino): ?>
                                                    <option value="<?= $destino['id_area_destino'] ?>"><?= htmlspecialchars($destino['nombre']) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">Seleccione un destino.</div>
                                        </div>
                                    </div>

                                    <!-- Observaciones -->
                                    <div class="mb-3">
                                        <label for="observaciones" class="form-label">
                                            <i class="bx bx-comment"></i> Observaciones
                                        </label>
                                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="(Opcional) Comentarios adicionales..."></textarea>
                                    </div>

                                    <!-- Botones paso 2 -->
                                    <div class="reserva-actions-between">
                                        <button type="button" id="btnVolver" class="btn-sec">
                                            <i class="bx bx-arrow-back"></i> Volver
                                        </button>
                                        <button type="submit" class="btn-ok">
                                            <i class="bx bx-check"></i> Finalizar reserva
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- fin carousel -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Boxicons + jQuery -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let elementosSeleccionados = {};

    function actualizarListaSeleccionados() {
        const contenedor = $('#lista-seleccionados');
        contenedor.empty();
        for (const id in elementosSeleccionados) {
            const nombre = elementosSeleccionados[id];
            const badge = $(`
                <div class="badge bg-primary d-flex align-items-center p-2 px-3 rounded-pill">
                    <span class="me-2">${nombre}</span>
                    <button type="button" class="btn-close btn-close-white btn-sm quitar-elemento" aria-label="Quitar" data-id="${id}"></button>
                </div>
            `);
            contenedor.append(badge);
        }
    }

    function agregarElemento(id, nombre) {
        elementosSeleccionados[id] = nombre;
        actualizarListaSeleccionados();
    }

    function quitarElemento(id) {
        delete elementosSeleccionados[id];
        $(`input[name="elementos[]"][value="${id}"]`).prop('checked', false);
        actualizarListaSeleccionados();
    }

    $(document).on('change', 'input[name="elementos[]"]', function() {
        const id    = $(this).val();
        const label = $(`label[for="${$(this).attr('id')}"]`).text().trim();
        if ($(this).is(':checked')) {
            agregarElemento(id, label);
        } else {
            quitarElemento(id);
        }
    });

    $(document).on('click', '.quitar-elemento', function() {
        const id = $(this).data('id');
        quitarElemento(id);
    });

    function getSeleccionActual() { return { ...elementosSeleccionados }; }

    function restaurarSeleccion() {
        for (const id in elementosSeleccionados) {
            const checkbox = $(`input[name="elementos[]"][value="${id}"]`);
            if (checkbox.length) checkbox.prop('checked', true);
        }
        actualizarListaSeleccionados();
    }

    $('#tipo_elemento').change(function() {
        const tipo_id = $(this).val();
        $('#cate_id').prop('disabled', true).html('<option disabled>Cargando...</option>');
        $('#elementos-container').html('<p class="text-muted small mb-0">Seleccione una categoría para mostrar elementos.</p>');
        $.post('index.php?modulo=prestamos&controlador=prestamos&funcion=getCategoriasPorTipoElemento', { tipo_id }, function(data) {
            $('#cate_id').html(data).prop('disabled', false);
        });
    });

    $('#cate_id').change(function() {
        const cate_ids = $(this).val();
        $.ajax({
            url: 'index.php?modulo=prestamos&controlador=prestamos&funcion=getElementosPorCategoria',
            type: 'POST',
            data: { cate_id: cate_ids },
            traditional: true,
            success: function(data) {
                $('#elementos-container').html(data);
                setTimeout(() => { restaurarSeleccion(); }, 100);
            },
            error: function() {
                $('#elementos-container').html('<p class="text-danger small">Error al cargar los elementos.</p>');
            }
        });
    });

    // Stepper: avanzar
    function activarStep2() {
        $('#step1').removeClass('active').addClass('done');
        $('#step1 .step-circle').html('<i class="bx bx-check" style="font-size:16px;"></i>');
        $('#step2').addClass('active');
    }

    // Stepper: volver
    function activarStep1() {
        $('#step2').removeClass('active');
        $('#step1').removeClass('done').addClass('active');
        $('#step1 .step-circle').html('1');
    }

    $('#formPaso1').submit(function(e) {
        e.preventDefault();
        if (!$('#usu_id').val()) {
            Swal.fire({ icon: 'warning', title: 'Atención', text: 'Seleccione un usuario.', confirmButtonColor: '#3c56c7' });
            return;
        }
        if (Object.keys(elementosSeleccionados).length === 0) {
            Swal.fire({ icon: 'warning', title: 'Atención', text: 'Seleccione al menos un elemento.', confirmButtonColor: '#3c56c7' });
            return;
        }
        const usuario = $('#usu_id option:selected');
        $('#infoUsuario').html(`Nombre: <strong>${usuario.text()}</strong><br>Documento: <strong>${usuario.data('doc') || 'No registrado'}</strong><br>Correo: <strong>${usuario.data('email') || 'No registrado'}</strong>`);
        let html = '';
        for (const id in elementosSeleccionados) {
            html += `<li style="color:#2d4080;font-size:13px;">${elementosSeleccionados[id]}</li>`;
        }
        $('#infoElementos').html(html);
        activarStep2();
        bootstrap.Carousel.getOrCreateInstance(document.getElementById('prestamoCarousel')).next();
    });

    $('#btnVolver').click(function() {
        activarStep1();
        bootstrap.Carousel.getOrCreateInstance(document.getElementById('prestamoCarousel')).prev();
    });

    $('#formPaso2').submit(function(e) {
        $(this).find('input[name="elementos[]"]').remove();
        $(this).find('input[name="usu_id"]').remove();
        for (const id in elementosSeleccionados) {
            $('#formPaso2').append(`<input type="hidden" name="elementos[]" value="${id}">`);
        }
        $('#formPaso2').append(`<input type="hidden" name="usu_id" value="${$('#usu_id').val()}">`);
        if (!this.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('was-validated');
        }
    });
</script>