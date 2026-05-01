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
    <circle cx="80" cy="820" r="180" fill="none" stroke="#0d3087" stroke-width="1" stroke-opacity=".09"/>
    <circle cx="80" cy="820" r="110" fill="#0d3087" fill-opacity=".05"/>
    <circle cx="100" cy="400" r="90" fill="none" stroke="#3c56c7" stroke-width="1" stroke-opacity=".07"/>
    <line x1="0" y1="100" x2="150" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".09"/>
    <line x1="0" y1="160" x2="210" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".06"/>
    <line x1="0" y1="220" x2="270" y2="0"  stroke="#3c56c7" stroke-width="1" stroke-opacity=".04"/>
    <line x1="1440" y1="700" x2="1240" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".08"/>
    <line x1="1440" y1="760" x2="1300" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".06"/>
    <line x1="1440" y1="820" x2="1360" y2="900" stroke="#0d3087" stroke-width="1" stroke-opacity=".04"/>
    <rect x="40" y="40" width="44" height="44" rx="10" fill="none" stroke="#3c56c7" stroke-width="1.5" stroke-opacity=".12"/>
    <rect x="54" y="54" width="16" height="16" rx="4" fill="#3c56c7" fill-opacity=".09"/>
    <rect x="1356" y="816" width="44" height="44" rx="10" fill="none" stroke="#0d3087" stroke-width="1.5" stroke-opacity=".1"/>
    <rect x="1370" y="830" width="16" height="16" rx="4" fill="#0d3087" fill-opacity=".07"/>
    <circle cx="220" cy="70"  r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="255" cy="105" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="190" cy="110" r="2.5" fill="#0d3087" fill-opacity=".13"/>
    <circle cx="1200" cy="820" r="3"   fill="#3c56c7" fill-opacity=".18"/>
    <circle cx="1235" cy="855" r="2"   fill="#3c56c7" fill-opacity=".13"/>
    <circle cx="1170" cy="845" r="2.5" fill="#0d3087" fill-opacity=".13"/>
</svg>

<style>
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
        padding: 1.4rem 1.8rem 0.6rem;
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

    .elem-divider {
        height: 1px;
        background: #e8edf6;
        margin: 0.6rem 1.8rem 1rem;
    }

    .elem-body {
        padding: 0 1.8rem 1.8rem;
    }

    /* ===== BARRA DE HERRAMIENTAS ===== */
    .toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 1.2rem;
        background: #f5f8ff;
        border: 1.5px solid #e2e9f8;
        border-radius: 12px;
        padding: 0.85rem 1.1rem;
    }

    .toolbar-left {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .toolbar-right {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    /* ===== INPUTS Y SELECTS DE LA BARRA ===== */
    .tb-select,
    .tb-input {
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 8px 13px;
        font-size: 13px;
        color: #2d4080;
        background: #ffffff;
        background-color: #ffffff;
        color-scheme: light;
        outline: none;
        font-family: inherit;
        transition: border-color 0.2s;
    }

    .tb-select:focus,
    .tb-input:focus {
        border-color: #3c56c7;
        box-shadow: 0 0 0 3px rgba(60,86,199,0.08);
    }

    .tb-input::placeholder {
        color: #a8b8d8;
    }

    .tb-select { min-width: 160px; }
    .tb-input  { min-width: 220px; }

    /* ===== BOTONES DE LA BARRA ===== */
    .btn-nuevo {
        background: #3c56c7;
        background-color: #3c56c7;
        color: #ffffff;
        border: none;
        border-radius: 9px;
        padding: 8px 18px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
        transition: background 0.2s;
    }

    .btn-nuevo:hover {
        background: #2d44b0;
        background-color: #2d44b0;
        color: #fff;
    }

    .btn-excel {
        background: #f0f4ff;
        background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 8px 16px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: background 0.2s, border-color 0.2s;
        font-family: inherit;
    }

    .btn-excel:hover {
        background: #e2ebff;
        background-color: #e2ebff;
        border-color: #b8c8ec;
        color: #1e2a45;
    }

    /* ===== TABLA ===== */
    .elem-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13.5px;
    }

    .elem-table thead tr {
        background: #0d3087;
    }

    .elem-table thead th {
        color: #ffffff;
        font-weight: 600;
        font-size: 12.5px;
        letter-spacing: 0.03em;
        padding: 11px 14px;
        text-align: center;
        border: none;
    }

    .elem-table tbody tr {
        border-bottom: 1px solid #edf1fa;
        transition: background 0.15s;
    }

    .elem-table tbody tr:hover {
        background: #f5f8ff;
    }

    .elem-table tbody td {
        padding: 10px 14px;
        text-align: center;
        color: #2d4080;
        vertical-align: middle;
        border: none;
    }

    /* ===== BADGES DE ESTADO ===== */
    .badge-disponible   { background: #e6f4ec; color: #1a7a42; border: 1px solid #a8dbb9; border-radius: 6px; padding: 3px 10px; font-size: 11.5px; font-weight: 600; }
    .badge-mantenimiento{ background: #fff8e6; color: #946800; border: 1px solid #f5d87a; border-radius: 6px; padding: 3px 10px; font-size: 11.5px; font-weight: 600; }
    .badge-inhabilitado { background: #f0f0f0; color: #555;    border: 1px solid #ccc;    border-radius: 6px; padding: 3px 10px; font-size: 11.5px; font-weight: 600; }
    .badge-default      { background: #eef1f8; color: #64748b; border: 1px solid #d0d8ec; border-radius: 6px; padding: 3px 10px; font-size: 11.5px; font-weight: 600; }

    /* ===== BOTONES DE ACCIÓN ===== */
    .btn-accion {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        text-decoration: none;
        transition: opacity 0.15s, transform 0.1s;
    }

    .btn-accion:hover  { opacity: 0.82; transform: scale(1.07); }
    .btn-accion:active { transform: scale(0.96); }

    .btn-ver      { background: #e0f0ff; color: #1565c0; }
    .btn-editar   { background: #fff8e0; color: #a06000; }
    .btn-inhab    { background: #ffe0e0; color: #c0001a; }
    .btn-mant     { background: #ececec; color: #444;    }
    .btn-habilitar{ background: #e0f4ea; color: #1a7a42; }
    .btn-finalizar{ background: #e0eaff; color: #1a3a9a; }
    .btn-agregar  { background: #e0f4ea; color: #1a7a42; }

    /* ===== PAGINACIÓN ===== */
    .pag-wrap { display: flex; justify-content: center; margin-top: 1.2rem; }

    #paginacionTabla { display: flex; gap: 4px; list-style: none; padding: 0; margin: 0; }

    #paginacionTabla .page-item .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1.5px solid #d6e0fa;
        background: #f5f8ff;
        color: #3c56c7;
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.15s, border-color 0.15s;
    }

    #paginacionTabla .page-item.active .page-link {
        background: #3c56c7;
        background-color: #3c56c7;
        border-color: #3c56c7;
        color: #ffffff;
    }

    #paginacionTabla .page-item.disabled .page-link {
        opacity: 0.4;
        pointer-events: none;
    }

    #paginacionTabla .page-item .page-link:hover:not(.active) {
        background: #e2ebff;
        border-color: #b8c8ec;
    }

    /* ===== MODAL ===== */
    .modal-header-inv {
        background: #0d3087;
        color: #ffffff;
        border-radius: 0;
        padding: 1rem 1.4rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal-header-inv h5 {
        font-size: 15px;
        font-weight: 700;
        margin: 0;
        color: #fff;
    }

    .modal-content {
        border-radius: 14px;
        overflow: hidden;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,0.18);
    }

    .modal-body .form-label {
        font-size: 12.5px;
        font-weight: 600;
        color: #3d5a99;
    }

    .modal-body .form-control {
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        font-size: 13.5px;
        color: #2d4080;
        background: #f5f8ff;
        background-color: #f5f8ff;
        color-scheme: light;
    }

    .modal-body .form-control:focus {
        border-color: #3c56c7;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(60,86,199,0.1);
        outline: none;
    }

    .modal-footer {
        border-top: 1px solid #e8edf6;
        padding: 0.85rem 1.2rem;
        gap: 8px;
    }

    .btn-modal-ok {
        background: #3c56c7;
        background-color: #3c56c7;
        color: #fff;
        border: none;
        border-radius: 9px;
        padding: 9px 22px;
        font-size: 13.5px;
        font-weight: 600;
        cursor: pointer;
        font-family: inherit;
    }

    .btn-modal-ok:hover { background: #2d44b0; background-color: #2d44b0; }

    .btn-modal-cancel {
        background: #f0f4ff;
        background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 9px 18px;
        font-size: 13.5px;
        font-weight: 500;
        cursor: pointer;
        font-family: inherit;
    }

    .btn-modal-cancel:hover { background: #e2ebff; background-color: #e2ebff; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .elem-body { padding: 0 1rem 1.2rem; }
        .elem-header { padding: 1.2rem 1rem 0.4rem; }
        .elem-divider { margin: 0.5rem 1rem 0.8rem; }
        .toolbar { flex-direction: column; align-items: flex-start; }
        .tb-select, .tb-input { width: 100%; }
        .toolbar-right { width: 100%; }
        .btn-nuevo, .btn-excel { width: 100%; justify-content: center; }
    }
</style>

<div class="container mt-5 mb-5" style="position:relative;z-index:1;">
    <div class="elem-card">

        <!-- Header -->
        <div class="elem-header">
            <div class="elem-header-icon">
                <i class='bx bx-package'></i>
            </div>
            <div class="elem-header-text">
                <h4>Listado de Elementos</h4>
                <p>Consulta, filtra y gestiona todos los elementos registrados</p>
            </div>
        </div>

        <div class="elem-divider"></div>

        <div class="elem-body">

            <!-- Barra de herramientas -->
            <div class="toolbar">
                <div class="toolbar-left">
                    <select id="filtroTipo" class="tb-select">
                        <option value="codigo">Por Código</option>
                        <option value="nombre">Por Nombre</option>
                        <option value="placa">Por Placa</option>
                        <option value="categoria">Por Categoría</option>
                        <option value="estado">Por Estado</option>
                        <option value="tipo">Por Tipo</option>
                    </select>
                    <input type="search" id="buscadorElementos" class="tb-input" placeholder="Buscar..." aria-label="Buscar">
                </div>
                <div class="toolbar-right">
                    <a href="<?= getUrl('elementos', 'elementos', 'getInsert') ?>" class="btn-nuevo">
                        <i class='bx bx-plus-circle'></i> Nuevo Elemento
                    </a>
                    <button id="btnExportarExcel" class="btn-excel" type="button">
                        <i class='bx bx-download'></i> Exportar Excel
                    </button>
                </div>
            </div>

            <!-- Tabla -->
            <div class="table-responsive">
                <table class="elem-table" id="tablaElementos">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Categoría</th>
                            <th>Placa</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($elementos)) : ?>
                            <?php foreach ($elementos as $el) :
                                $estado = strtolower($el['estado']);
                                $tipo   = strtolower($el['tipo_elemento']);
                                $badgeClass = match ($estado) {
                                    'disponible'    => 'badge-disponible',
                                    'mantenimiento' => 'badge-mantenimiento',
                                    'inhabilitado'  => 'badge-inhabilitado',
                                    default         => 'badge-default',
                                };
                            ?>
                                <tr>
                                    <td><?= htmlspecialchars($el['elem_codigo']) ?></td>
                                    <td><?= htmlspecialchars($el['elem_nombre']) ?></td>
                                    <td><?= htmlspecialchars($el['tipo_elemento']) ?></td>
                                    <td><?= htmlspecialchars($el['categoria']) ?></td>
                                    <td><?= htmlspecialchars($el['elem_placa']) ?></td>
                                    <td>
                                        <span class="<?= $badgeClass ?>">
                                            <?= htmlspecialchars($el['estado']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div style="display:flex;justify-content:center;gap:6px;flex-wrap:wrap;">
                                            <a href="<?= getUrl('elementos', 'elementos', 'ver', ['id' => $el['elem_id']]) ?>" class="btn-accion btn-ver" title="Ver Detalle">
                                                <i class='bx bx-show'></i>
                                            </a>
                                            <a href="<?= getUrl('elementos', 'elementos', 'getEdit', ['id' => $el['elem_id']]) ?>" class="btn-accion btn-editar" title="Editar">
                                                <i class='bx bx-edit-alt'></i>
                                            </a>

                                            <?php if ($tipo === 'devolutivo') : ?>
                                                <?php if ($estado === 'disponible') : ?>
                                                    <a href="<?= getUrl('elementos', 'elementos', 'cambiarEstado', ['id' => $el['elem_id'], 'estado' => 'Inhabilitado']) ?>" class="btn-accion btn-inhab" title="Inhabilitar">
                                                        <i class='bx bx-block'></i>
                                                    </a>
                                                    <a href="<?= getUrl('elementos', 'elementos', 'cambiarEstado', ['id' => $el['elem_id'], 'estado' => 'Mantenimiento']) ?>" class="btn-accion btn-mant" title="Enviar a Mantenimiento">
                                                        <i class='bx bx-wrench'></i>
                                                    </a>
                                                <?php elseif ($estado === 'inhabilitado') : ?>
                                                    <a href="<?= getUrl('elementos', 'elementos', 'cambiarEstado', ['id' => $el['elem_id'], 'estado' => 'Disponible']) ?>" class="btn-accion btn-habilitar" title="Habilitar">
                                                        <i class='bx bx-check-circle'></i>
                                                    </a>
                                                <?php elseif ($estado === 'mantenimiento') : ?>
                                                    <a href="<?= getUrl('elementos', 'elementos', 'cambiarEstado', ['id' => $el['elem_id'], 'estado' => 'Disponible']) ?>" class="btn-accion btn-finalizar" title="Finalizar Mantenimiento">
                                                        <i class='bx bx-check-circle'></i>
                                                    </a>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <button class="btn-accion btn-agregar btn-add"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalEntrada"
                                                        data-id="<?= $el['elem_id'] ?>"
                                                        data-nombre="<?= htmlspecialchars($el['elem_nombre']) ?>"
                                                        title="Agregar Cantidad">
                                                    <i class='bx bx-plus'></i>
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="7" style="color:#94a3b8;padding:2rem;text-align:center;">No hay elementos registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pag-wrap">
                <nav><ul class="pagination" id="paginacionTabla"></ul></nav>
            </div>

        </div>
    </div>
</div>

<!-- Modal Registrar Entrada -->
<div class="modal fade" id="modalEntrada" tabindex="-1" aria-labelledby="modalEntradaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="<?= getUrl('elementos', 'elementos', 'registrarEntrada') ?>">
        <div class="modal-content">
            <div class="modal-header-inv">
                <h5 id="modalEntradaLabel"><i class='bx bx-plus-circle' style="margin-right:6px;"></i>Registrar Entrada</h5>
                <button type="button" style="background:none;border:none;color:#fff;font-size:20px;cursor:pointer;line-height:1;" data-bs-dismiss="modal" aria-label="Cerrar">×</button>
            </div>
            <div class="modal-body" style="padding:1.4rem;">
                <input type="hidden" name="elem_id" id="inputElemId">
                <div class="mb-3">
                    <label for="inputNombreElemento" class="form-label">Elemento</label>
                    <input type="text" class="form-control" id="inputNombreElemento" disabled>
                </div>
                <div class="mb-3">
                    <label for="inputCantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" id="inputCantidad" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="inputFecha" class="form-label">Fecha de entrada</label>
                    <input type="date" class="form-control" name="fecha" id="inputFecha" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn-modal-ok">Registrar</button>
            </div>
        </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<!-- Exportar Excel -->
<script>
document.getElementById('btnExportarExcel').addEventListener('click', function () {
    const tabla = document.getElementById('tablaElementos');
    const filas = Array.from(tabla.querySelectorAll('tbody tr'));
    const filasExportar = [];

    const headers = [];
    tabla.querySelectorAll('thead th').forEach((th, index) => {
        if (index < 6) headers.push(th.innerText);
    });
    filasExportar.push(headers);

    const inputBusqueda = document.getElementById('buscadorElementos');
    const filtroTipo    = document.getElementById('filtroTipo');
    const valor = inputBusqueda.value.toLowerCase().trim();
    const tipo  = filtroTipo.value;

    const filtradas = filas.filter(fila => {
        const celdas = fila.cells;
        const [codigo, nombre, tipoEl, categoria, placa, estado] = [
            celdas[0].textContent.toLowerCase(),
            celdas[1].textContent.toLowerCase(),
            celdas[2].textContent.toLowerCase(),
            celdas[3].textContent.toLowerCase(),
            celdas[4].textContent.toLowerCase(),
            celdas[5].textContent.toLowerCase()
        ];
        switch (tipo) {
            case 'codigo':    return codigo.includes(valor);
            case 'nombre':    return nombre.includes(valor);
            case 'tipo':      return tipoEl.includes(valor);
            case 'estado':    return estado.includes(valor);
            case 'categoria': return categoria.includes(valor);
            case 'placa':     return placa.includes(valor);
            default:          return true;
        }
    });

    filtradas.forEach(fila => {
        const row = [];
        fila.querySelectorAll('td').forEach((td, index) => {
            if (index < 6) {
                let texto = td.textContent.replace(/\s+/g, ' ').trim();
                row.push(texto);
            }
        });
        filasExportar.push(row);
    });

    const ws = XLSX.utils.aoa_to_sheet(filasExportar);
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Elementos");
    XLSX.writeFile(wb, "elementos_filtrados.xlsx");
});
</script>

<!-- Modal entrada cantidad -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('modalEntrada');
        modal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const id     = button.getAttribute('data-id');
            const nombre = button.getAttribute('data-nombre');
            document.getElementById('inputElemId').value          = id;
            document.getElementById('inputNombreElemento').value  = nombre;
            const hoy = new Date().toISOString().split('T')[0];
            document.getElementById('inputFecha').value = hoy;
        });
    });
</script>

<!-- Búsqueda + paginación -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputBusqueda = document.getElementById('buscadorElementos');
        const filtroTipo    = document.getElementById('filtroTipo');
        const tabla         = document.getElementById('tablaElementos').getElementsByTagName('tbody')[0];
        const paginacion    = document.getElementById('paginacionTabla');
        const filas         = Array.from(tabla.rows);
        const filasPorPagina = 6;
        let paginaActual = 1;

        const renderTabla = () => {
            const valor = inputBusqueda.value.toLowerCase().trim();
            const tipo  = filtroTipo.value;

            const filtradas = filas.filter(fila => {
                const celdas = fila.cells;
                const [codigo, nombre, tipoEl, categoria, placa, estado] = [
                    celdas[0].textContent.toLowerCase(),
                    celdas[1].textContent.toLowerCase(),
                    celdas[2].textContent.toLowerCase(),
                    celdas[3].textContent.toLowerCase(),
                    celdas[4].textContent.toLowerCase(),
                    celdas[5].textContent.toLowerCase()
                ];
                switch (tipo) {
                    case 'codigo':    return codigo.includes(valor);
                    case 'nombre':    return nombre.includes(valor);
                    case 'tipo':      return tipoEl.includes(valor);
                    case 'estado':    return estado.includes(valor);
                    case 'categoria': return categoria.includes(valor);
                    case 'placa':     return placa.includes(valor);
                    default:          return true;
                }
            });

            const totalPaginas = Math.ceil(filtradas.length / filasPorPagina);
            const inicio = (paginaActual - 1) * filasPorPagina;
            const fin    = inicio + filasPorPagina;

            filas.forEach(fila => fila.style.display = 'none');
            filtradas.slice(inicio, fin).forEach(fila => fila.style.display = '');
            renderPaginacion(totalPaginas);
        };

        const renderPaginacion = (totalPaginas) => {
            paginacion.innerHTML = '';
            if (totalPaginas <= 1) return;

            const crearItem = (label, pagina, disabled = false, active = false) => {
                const li = document.createElement('li');
                li.className = `page-item${disabled ? ' disabled' : ''}${active ? ' active' : ''}`;
                const a = document.createElement('a');
                a.className = 'page-link';
                a.href = '#';
                a.innerHTML = label;
                a.onclick = e => {
                    e.preventDefault();
                    if (!disabled && pagina !== paginaActual) {
                        paginaActual = pagina;
                        renderTabla();
                    }
                };
                li.appendChild(a);
                return li;
            };

            paginacion.appendChild(crearItem('&laquo;', paginaActual - 1, paginaActual === 1));
            for (let i = 1; i <= totalPaginas; i++) {
                paginacion.appendChild(crearItem(i, i, false, paginaActual === i));
            }
            paginacion.appendChild(crearItem('&raquo;', paginaActual + 1, paginaActual === totalPaginas));
        };

        inputBusqueda.addEventListener('input', () => { paginaActual = 1; renderTabla(); });
        filtroTipo.addEventListener('change',   () => { paginaActual = 1; renderTabla(); });
        renderTabla();
    });
</script>