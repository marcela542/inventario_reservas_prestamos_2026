<!-- ===== FONDO DECORATIVO SVG (posición fija, detrás de todo) ===== -->
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
    <!-- Círculos top-right -->
    <circle cx="1340" cy="100" r="220" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".1"/>
    <circle cx="1340" cy="100" r="150" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".08"/>
    <circle cx="1340" cy="100" r="80"  fill="#3c56c7" fill-opacity=".05"/>
    <!-- Círculos bottom-left -->
    <circle cx="80" cy="820" r="180" fill="none" stroke="#0d3087" stroke-width="1" stroke-opacity=".09"/>
    <circle cx="80" cy="820" r="110" fill="#0d3087" fill-opacity=".05"/>
    <!-- Círculo mid-left -->
    <circle cx="100" cy="400" r="90" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".07"/>
    <!-- Líneas diagonales top-left -->
    <line x1="0" y1="100" x2="150" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".09"/>
    <line x1="0" y1="160" x2="210" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".06"/>
    <line x1="0" y1="220" x2="270" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".04"/>
    <!-- Líneas diagonales bottom-right -->
    <line x1="1440" y1="700" x2="1240" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".08"/>
    <line x1="1440" y1="760" x2="1300" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".06"/>
    <line x1="1440" y1="820" x2="1360" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".04"/>
    <!-- Cuadrado decorativo top-left -->
    <rect x="40" y="40" width="44" height="44" rx="10" fill="none" stroke="#3c56c7" stroke-width="1.5" stroke-opacity=".12"/>
    <rect x="54" y="54" width="16" height="16" rx="4" fill="#3c56c7" fill-opacity=".09"/>
    <!-- Cuadrado decorativo bottom-right -->
    <rect x="1356" y="816" width="44" height="44" rx="10" fill="none" stroke="#0d3087" stroke-width="1.5" stroke-opacity=".1"/>
    <rect x="1370" y="830" width="16" height="16" rx="4" fill="#0d3087" fill-opacity=".07"/>
    <!-- Puntos decorativos top -->
    <circle cx="220" cy="70"  r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="255" cy="105" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="190" cy="110" r="2.5" fill="#0d3087" fill-opacity=".13"/>
    <!-- Puntos decorativos bottom -->
    <circle cx="1200" cy="820" r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="1235" cy="855" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="1170" cy="845" r="2.5" fill="#0d3087" fill-opacity=".13"/>
</svg>

<style>
    /* ===== FONDO GENERAL ===== */
    body {
        background: #e8eef8;
        position: relative;
    }

    /* ===== CARD PRINCIPAL ===== */
    .elem-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13, 48, 135, 0.13);
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .elem-card::before {
        content: '';
        display: block;
        height: 4px;
        background: linear-gradient(90deg, #0d3087, #3c56c7, #6c83e0);
    }

    /* ===== HEADER ===== */
    .elem-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 1.6rem 1.8rem 0.5rem;
    }

    .elem-header-icon {
        width: 46px;
        height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .elem-header-icon i {
        font-size: 22px;
        color: #3c56c7;
    }

    .elem-header-text h4 {
        font-size: 17px;
        font-weight: 700;
        color: #0d3087;
        margin: 0;
    }

    .elem-header-text p {
        font-size: 12.5px;
        color: #94a3b8;
        margin: 2px 0 0;
    }

    /* ===== DIVIDER ===== */
    .elem-divider {
        height: 1px;
        background: #e8edf6;
        margin: 1rem 1.8rem;
    }

    /* ===== CUERPO ===== */
    .elem-body {
        padding: 0.5rem 1.8rem 1.8rem;
    }

    /* ===== LABELS ===== */
    .form-label {
        font-size: 12.5px;
        font-weight: 600;
        color: #3d5a99;
        margin-bottom: 6px;
        letter-spacing: 0.01em;
    }

    .form-label i {
        color: #3c56c7;
        margin-right: 4px;
    }

    /* ===== INPUTS Y SELECTS ===== */
    .form-control,
    .form-select {
        border: 1.5px solid #d6e0fa;
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 13.5px;
        color: #2d4080;
        background: #f5f8ff;
        background-color: #f5f8ff;
        color-scheme: light;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #3c56c7;
        background: #ffffff;
        background-color: #ffffff;
        box-shadow: 0 0 0 3px rgba(60, 86, 199, 0.1);
        outline: none;
        color: #1e2a45;
    }

    .form-control::placeholder {
        color: #a8b8d8;
        font-weight: 400;
    }

    textarea.form-control {
        resize: none;
    }

    /* ===== SELECT TIPO ===== */
    .select-tipo-wrap {
        background: #f0f4ff;
        border-radius: 12px;
        padding: 1rem 1.2rem;
        margin-bottom: 1.2rem;
        border: 1.5px solid #d6e0fa;
    }

    .select-tipo-wrap .form-label {
        font-size: 13px;
        font-weight: 700;
        color: #0d3087;
    }

    .select-tipo-wrap .form-select {
        background: #ffffff;
        background-color: #ffffff;
        border-color: #b8ccf0;
        font-weight: 500;
        color: #1e2a45;
    }

    .select-tipo-wrap .form-select:focus {
        border-color: #3c56c7;
    }

    /* ===== GRUPO DINÁMICO ===== */
    .grupo-section {
        background: #f7f9ff;
        border: 1.5px solid #e2e9f8;
        border-radius: 14px;
        padding: 1.2rem 1.4rem;
        margin-top: 0.5rem;
    }

    .grupo-section-title {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        color: #3c56c7;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .grupo-section-title::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #d6e0fa;
    }

    /* ===== ERRORES ===== */
    .text-danger {
        font-size: 11.5px;
        font-weight: 500;
    }

    /* ===== BOTONES ===== */
    .btn-guardar {
        background: #3c56c7;
        background-color: #3c56c7;
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 11px 28px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .btn-guardar:hover {
        background: #2d44b0;
        background-color: #2d44b0;
        color: #fff;
    }

    .btn-guardar:active {
        transform: scale(0.97);
    }

    .btn-cancelar {
        background: #f0f4ff;
        background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 10px;
        padding: 11px 24px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.2s, border-color 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        text-decoration: none;
    }

    .btn-cancelar:hover {
        background: #e2ebff;
        background-color: #e2ebff;
        border-color: #b8c8ec;
        color: #1e2a45;
    }

    .elem-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-top: 1.8rem;
        padding-top: 1.2rem;
        border-top: 1px solid #e8edf6;
    }

    /* ===== BADGE OBLIGATORIO ===== */
    .badge-required {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        background: #fff0f0;
        border: 1px solid #fecaca;
        border-radius: 6px;
        padding: 3px 9px;
        font-size: 11.5px;
        color: #dc3545;
        font-weight: 500;
        margin-bottom: 1.2rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .elem-body      { padding: 0.5rem 1rem 1.2rem; }
        .elem-header    { padding: 1.2rem 1rem 0.4rem; }
        .elem-divider   { margin: 0.8rem 1rem; }
        .elem-actions   { flex-direction: column; }
        .btn-guardar,
        .btn-cancelar   { width: 100%; justify-content: center; }
    }
</style>

<div class="container mt-5 pt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="elem-card">

                <!-- Header -->
                <div class="elem-header">
                    <div class="elem-header-icon">
                        <i class='bx bx-package'></i>
                    </div>
                    <div class="elem-header-text">
                        <h4>Registrar Elemento</h4>
                        <p>Completa los campos según el tipo de elemento</p>
                    </div>
                </div>

                <div class="elem-divider"></div>

                <!-- Cuerpo -->
                <div class="elem-body">

                    <div class="badge-required">
                        <span>*</span> Los campos con asterisco son obligatorios
                    </div>

                    <form action="<?= getUrl("elementos", "elementos", "postInsert") ?>" method="POST" onsubmit="return validarElementos(event)">

                        <!-- Tipo de Elemento -->
                        <div class="select-tipo-wrap">
                            <label for="tipoElementos" class="form-label">
                                <i class='bx bx-list-check'></i> Tipo de Elemento <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="elem_telem_id" id="tipoElementos" required>
                                <option value="" disabled <?= !isset($form_data['elem_telem_id']) ? 'selected' : '' ?>>Selecciona el tipo de elemento</option>
                                <?php foreach ($tipoElementos as $tipo) { ?>
                                    <option value="<?= $tipo['telem_id'] ?>" <?= (isset($form_data['elem_telem_id']) && $form_data['elem_telem_id'] == $tipo['telem_id']) ? 'selected' : '' ?>>
                                        <?= $tipo['telem_nombre'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- ===== DEVOLUTIVO ===== -->
                        <div id="grupoDevolutivo" class="d-none">
                            <div class="grupo-section">
                                <div class="grupo-section-title">
                                    <i class='bx bx-rotate-right'></i> Campos — Elemento Devolutivo
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Placa del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_placa" class="form-control" value="<?= $form_data['elem_placa'] ?? '' ?>" placeholder="Ej: 922818451" onchange="validarPlaca(this)">
                                        <div class="text-danger mt-1" id="errorelem_placa"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Serie del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_serie" class="form-control" value="<?= $form_data['elem_serie'] ?? '' ?>" placeholder="Ej: S12345-XYZ" onchange="validarSerieElemento(this)">
                                        <div class="text-danger mt-1" id="errorelem_serie"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Código del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_codigo" class="form-control" value="<?= $form_data['elem_codigo'] ?? '' ?>" placeholder="Ej: COD78910" onchange="validarCodElem(this)">
                                        <div class="text-danger mt-1" id="errorelem_codigo"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_nombre" class="form-control" value="<?= $form_data['elem_nombre'] ?? '' ?>" placeholder="Ej: Computador portátil" onchange="validarNombreElem(this)">
                                        <div class="text-danger mt-1" id="errorelem_nombre"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Área <span class="text-danger">*</span></label>
                                        <select class="form-select" name="elem_area_id" required>
                                            <option value="" disabled <?= !isset($form_data['elem_area_id']) ? 'selected' : '' ?>>Selecciona un área</option>
                                            <?php foreach ($area as $are) { ?>
                                                <option value="<?= $are['area_id'] ?>" <?= (isset($form_data['elem_area_id']) && $form_data['elem_area_id'] == $are['area_id']) ? 'selected' : '' ?>>
                                                    <?= $are['area_nombre'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Categoría <span class="text-danger">*</span></label>
                                        <select class="form-select" name="elem_cate_id" required>
                                            <option value="" disabled <?= !isset($form_data['elem_cate_id']) ? 'selected' : '' ?>>Selecciona una categoría</option>
                                            <?php foreach ($categoria as $catg) { ?>
                                                <option value="<?= $catg['cate_id'] ?>" <?= (isset($form_data['elem_cate_id']) && $form_data['elem_cate_id'] == $catg['cate_id']) ? 'selected' : '' ?>>
                                                    <?= $catg['cate_nombre'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Modelo <small class="text-muted fw-normal">(opcional)</small></label>
                                        <input type="text" name="elem_modelo" class="form-control" value="<?= $form_data['elem_modelo'] ?? '' ?>" placeholder="Ej: ThinkPad L14 Gen3" onchange="validarModeloElem(this)">
                                        <div class="text-danger mt-1" id="errorelem_modelo"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Marca <span class="text-danger">*</span></label>
                                        <select class="form-select" name="elem_marca_id" required>
                                            <option value="" disabled <?= !isset($form_data['elem_marca_id']) ? 'selected' : '' ?>>Selecciona una marca</option>
                                            <?php foreach ($marca as $mrc) { ?>
                                                <option value="<?= $mrc['marca_id'] ?>" <?= (isset($form_data['elem_marca_id']) && $form_data['elem_marca_id'] == $mrc['marca_id']) ? 'selected' : '' ?>>
                                                    <?= $mrc['marca_nombre'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Recomendaciones <small class="text-muted fw-normal">(opcional)</small></label>
                                        <textarea name="recomendaciones" class="form-control" rows="2"
                                            placeholder="Ej.: Recordar llevar memoria SD para usar la cámara"
                                            oninput="validarRecomendaciones(this)"
                                            maxlength="250"><?= $form_data['recomendaciones'] ?? '' ?></textarea>
                                        <div class="text-danger mt-1" id="errorRecomDev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ===== NO DEVOLUTIVO ===== -->
                        <div id="grupoNoDevolutivo" class="d-none">
                            <div class="grupo-section">
                                <div class="grupo-section-title">
                                    <i class='bx bx-box'></i> Campos — Elemento No Devolutivo
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Código del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_codigo" class="form-control" value="<?= $form_data['elem_codigo'] ?? '' ?>" placeholder="Ej: COD456" onchange="validarCodElemNoDevo(this)">
                                        <div class="text-danger mt-1" id="errorelem_codigoNoDevo"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Categoría <span class="text-danger">*</span></label>
                                        <select class="form-select" name="elem_cate_id" required>
                                            <option value="" disabled <?= !isset($form_data['elem_cate_id']) ? 'selected' : '' ?>>Selecciona una categoría</option>
                                            <?php foreach ($categoria as $catg) { ?>
                                                <option value="<?= $catg['cate_id'] ?>" <?= (isset($form_data['elem_cate_id']) && $form_data['elem_cate_id'] == $catg['cate_id']) ? 'selected' : '' ?>>
                                                    <?= $catg['cate_nombre'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre del Elemento <span class="text-danger">*</span></label>
                                        <input type="text" name="elem_nombre" class="form-control" value="<?= $form_data['elem_nombre'] ?? '' ?>" placeholder="Ej: Cinta adhesiva" onchange="validarNombreElemNoDevo(this)">
                                        <div class="text-danger mt-1" id="errorelem_nombre_NoDevo"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Cantidad <span class="text-danger">*</span></label>
                                        <input type="number" name="elem_cantidad" class="form-control" value="<?= $form_data['elem_cantidad'] ?? '' ?>" placeholder="Ej: 50" min="1" required onchange="validarCant(this)">
                                        <div class="text-danger mt-1" id="errorelem_cantidad"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Unidad de Medida <span class="text-danger">*</span></label>
                                        <select class="form-select" name="elem_unidad_id" required>
                                            <option value="" disabled <?= !isset($form_data['elem_unidad_id']) ? 'selected' : '' ?>>Selecciona unidad</option>
                                            <?php foreach ($unidadMedida as $md) { ?>
                                                <option value="<?= $md['id_unidad_medidas'] ?>" <?= (isset($form_data['elem_unidad_id']) && $form_data['elem_unidad_id'] == $md['id_unidad_medidas']) ? 'selected' : '' ?>>
                                                    <?= $md['nombre'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Recomendaciones <small class="text-muted fw-normal">(opcional)</small></label>
                                        <textarea name="recomendaciones" class="form-control" rows="2"
                                            placeholder="Ej.: Recordar llevar memoria SD para usar la cámara"
                                            oninput="validarRecomendaciones(this)"
                                            maxlength="250"><?= $form_data['recomendaciones'] ?? '' ?></textarea>
                                        <div class="text-danger mt-1" id="errorRecomNo"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="elem-actions">
                            <a href="<?= getUrl('elementos', 'elementos', 'consult'); ?>" class="btn-cancelar">
                                <i class='bx bx-arrow-back'></i> Cancelar
                            </a>
                            <button type="submit" class="btn-guardar">
                                <i class='bx bx-save'></i> Guardar Elemento
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/Inventario/Web/Js/validaciones/validaciones_elementos.js"></script>

<script>
    const tipoElementos = document.getElementById('tipoElementos');
    const grupoDev      = document.getElementById('grupoDevolutivo');
    const grupoNoDev    = document.getElementById('grupoNoDevolutivo');

    function toggleFields(tipo) {
        const inputsDev = grupoDev.querySelectorAll("input, select, textarea");
        const inputsNo  = grupoNoDev.querySelectorAll("input, select, textarea");

        if (tipo === '1') {
            grupoDev.classList.remove('d-none');
            grupoNoDev.classList.add('d-none');
            inputsDev.forEach(el => el.disabled = false);
            inputsNo .forEach(el => el.disabled = true);
        } else if (tipo === '2') {
            grupoNoDev.classList.remove('d-none');
            grupoDev.classList.add('d-none');
            inputsNo .forEach(el => el.disabled = false);
            inputsDev.forEach(el => el.disabled = true);
        } else {
            inputsDev.forEach(el => el.disabled = true);
            inputsNo .forEach(el => el.disabled = true);
            grupoDev.classList.add('d-none');
            grupoNoDev.classList.add('d-none');
        }
    }

    tipoElementos.addEventListener('change', () => toggleFields(tipoElementos.value));
    document.addEventListener('DOMContentLoaded', () => toggleFields(tipoElementos.value));
</script>