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
    .prest-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,.13);
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .prest-card::before {
        content: '';
        display: block;
        height: 4px;
        background: linear-gradient(90deg, #0d3087, #3c56c7, #6c83e0);
    }

    /* ===== HEADER ===== */
    .prest-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 1.4rem 1.8rem 0.6rem;
    }

    .prest-header-icon {
        width: 46px;
        height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .prest-header-icon i { font-size: 22px; color: #3c56c7; }

    .prest-header-text h4 {
        font-size: 17px;
        font-weight: 700;
        color: #0d3087;
        margin: 0;
    }

    .prest-header-text p {
        font-size: 12.5px;
        color: #94a3b8;
        margin: 2px 0 0;
    }

    .prest-divider {
        height: 1px;
        background: #e8edf6;
        margin: 0.4rem 1.8rem 1rem;
    }

    .prest-body { padding: 0 1.8rem 1.8rem; }

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

    .toolbar-left  { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
    .toolbar-right { display: flex; gap: 8px; flex-wrap: wrap; }

    .tb-select, .tb-input {
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
        transition: border-color .2s;
    }

    .tb-select:focus, .tb-input:focus {
        border-color: #3c56c7;
        box-shadow: 0 0 0 3px rgba(60,86,199,.08);
    }

    .tb-input::placeholder { color: #a8b8d8; }
    .tb-select { min-width: 180px; }
    .tb-input  { min-width: 220px; }

    /* ===== BOTONES BARRA ===== */
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
        transition: background .2s;
        font-family: inherit;
    }

    .btn-nuevo:hover { background: #2d44b0; background-color: #2d44b0; color: #fff; }

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
        transition: background .2s, border-color .2s;
        font-family: inherit;
    }

    .btn-excel:hover { background: #e2ebff; background-color: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    /* ===== TABLA ===== */
    .prest-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13.5px;
    }

    .prest-table thead tr { background: #0d3087; }

    .prest-table thead th {
        color: #ffffff;
        font-weight: 600;
        font-size: 12.5px;
        letter-spacing: .03em;
        padding: 11px 14px;
        text-align: center;
        border: none;
    }

    .prest-table tbody tr {
        border-bottom: 1px solid #edf1fa;
        transition: background .15s;
    }

    .prest-table tbody tr:hover { background: #f5f8ff; }

    .prest-table tbody td {
        padding: 10px 14px;
        text-align: center;
        color: #2d4080;
        vertical-align: middle;
        border: none;
    }

    /* ===== BADGES ESTADO ===== */
    .badge-activo {
        background: #e6f4ec;
        color: #1a7a42;
        border: 1px solid #a8dbb9;
        border-radius: 6px;
        padding: 3px 12px;
        font-size: 11.5px;
        font-weight: 600;
        display: inline-block;
    }

    .badge-cerrado {
        background: #f0f0f0;
        color: #555;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 3px 12px;
        font-size: 11.5px;
        font-weight: 600;
        display: inline-block;
    }

    /* ===== BOTONES ACCIÓN ===== */
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
        transition: opacity .15s, transform .1s;
    }

    .btn-accion:hover  { opacity: .82; transform: scale(1.07); }
    .btn-accion:active { transform: scale(.96); }

    .btn-ver       { background: #e0f0ff; color: #1565c0; }
    .btn-editar    { background: #fff8e0; color: #a06000; }
    .btn-finalizar { background: #ffe0e0; color: #c0001a; }

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
        transition: background .15s, border-color .15s;
    }

    #paginacionTabla .page-item.active .page-link {
        background: #3c56c7;
        background-color: #3c56c7;
        border-color: #3c56c7;
        color: #ffffff;
    }

    #paginacionTabla .page-item.disabled .page-link {
        opacity: .4;
        pointer-events: none;
    }

    #paginacionTabla .page-item .page-link:hover {
        background: #e2ebff;
        border-color: #b8c8ec;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .prest-body   { padding: 0 1rem 1.2rem; }
        .prest-header { padding: 1.2rem 1rem 0.4rem; }
        .prest-divider{ margin: 0.4rem 1rem 0.8rem; }
        .toolbar { flex-direction: column; align-items: flex-start; }
        .tb-select, .tb-input { width: 100%; }
        .toolbar-right { width: 100%; }
        .btn-nuevo, .btn-excel { width: 100%; justify-content: center; }
    }
</style>

<div class="container mt-5 mb-5" style="position:relative;z-index:1;">
    <div class="prest-card">

        <!-- Header -->
        <div class="prest-header">
            <div class="prest-header-icon">
                <i class='bx bx-transfer-alt'></i>
            </div>
            <div class="prest-header-text">
                <h4>Listado de Préstamos</h4>
                <p>Consulta, filtra y gestiona todos los préstamos registrados</p>
            </div>
        </div>

        <div class="prest-divider"></div>

        <div class="prest-body">

            <!-- Barra de herramientas -->
            <div class="toolbar">
                <div class="toolbar-left">
                    <select id="filtroTipo" class="tb-select">
                        <option value="id">Por ID</option>
                        <option value="nombre">Por Nombre solicitante</option>
                        <option value="fecha">Fecha de solicitud</option>
                        <option value="estado">Por Estado</option>
                    </select>
                    <input type="search" id="buscadorPrestamos" class="tb-input" placeholder="Buscar..." aria-label="Buscar">
                </div>
                <div class="toolbar-right">
                    <a href="<?= getUrl('prestamos', 'prestamos', 'getInsert'); ?>" class="btn-nuevo">
                        <i class='bx bx-plus'></i> Nuevo Préstamo
                    </a>
                    <button id="btnExportarExcelPrestamos" class="btn-excel" type="button">
                        <i class='bx bxs-file-export'></i> Exportar Excel
                    </button>
                </div>
            </div>

            <!-- Tabla -->
            <div class="table-responsive">
                <table class="prest-table" id="tablaPrestamos">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre solicitante</th>
                            <th>Fecha de solicitud</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($prestamos)) : ?>
                            <?php foreach ($prestamos as $prestamos) : ?>
                                <tr>
                                    <td><?= $prestamos['id_prestamo']; ?></td>
                                    <td><?= $prestamos['usu_nombre'] . ' ' . $prestamos['usu_apellido']; ?></td>
                                    <td><?= $prestamos['fecha_solicitud']; ?></td>
                                    <td>
                                        <?php if ($prestamos['estado_prestamo_id'] == 1) : ?>
                                            <span class="badge-activo">Activo</span>
                                        <?php else : ?>
                                            <span class="badge-cerrado">Cerrado</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div style="display:flex;justify-content:center;gap:6px;flex-wrap:wrap;">
                                            <?php if ($prestamos['estado_prestamo_id'] == 1): ?>
                                                <a href="<?= getUrl('prestamos', 'prestamos', 'modificar', ['id' => $prestamos['id_prestamo']]); ?>"
                                                   class="btn-accion btn-editar" title="Editar">
                                                    <i class='bx bx-edit-alt'></i>
                                                </a>
                                                <a href="<?= getUrl('prestamos', 'prestamos', 'devolver', ['id' => $prestamos['id_prestamo']]); ?>"
                                                   class="btn-accion btn-finalizar btn-finalizar-js"
                                                   data-url="<?= getUrl('prestamos', 'prestamos', 'devolver', ['id' => $prestamos['id_prestamo']]); ?>"
                                                   title="Finalizar">
                                                    <i class='bx bx-check-circle'></i>
                                                </a>
                                            <?php endif; ?>
                                            <a href="<?= getUrl('prestamos', 'prestamos', 'detalle', ['id' => $prestamos['id_prestamo']]); ?>"
                                               class="btn-accion btn-ver" title="Ver Detalle">
                                                <i class='bx bx-show'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" style="color:#94a3b8;padding:2rem;text-align:center;">No hay préstamos registrados.</td>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<!-- JS búsqueda + paginación -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputBusqueda = document.getElementById('buscadorPrestamos');
        const filtroTipo    = document.getElementById('filtroTipo');
        const tabla         = document.getElementById('tablaPrestamos').getElementsByTagName('tbody')[0];
        const paginacion    = document.getElementById('paginacionTabla');
        const filas         = Array.from(tabla.rows);
        const filasPorPagina = 6;
        let paginaActual = 1;

        const renderTabla = () => {
            const valor = inputBusqueda.value.toLowerCase().trim();
            const tipo  = filtroTipo.value;

            const filtradas = filas.filter(fila => {
                const celdas = fila.cells;
                const [id, nombre, fecha, estado] = [
                    celdas[0].textContent.toLowerCase(),
                    celdas[1].textContent.toLowerCase(),
                    celdas[2].textContent.toLowerCase(),
                    celdas[3].textContent.toLowerCase()
                ];
                switch (tipo) {
                    case 'id':     return id.includes(valor);
                    case 'nombre': return nombre.includes(valor);
                    case 'fecha':  return fecha.includes(valor);
                    case 'estado': return estado.includes(valor);
                    default:       return true;
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

        inputBusqueda.addEventListener('input',  () => { paginaActual = 1; renderTabla(); });
        filtroTipo.addEventListener('change',    () => { paginaActual = 1; renderTabla(); });
        renderTabla();
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btn-finalizar-js').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.getAttribute('data-url');
                Swal.fire({
                    title: '¿Está seguro de finalizar este préstamo?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3c56c7',
                    confirmButtonText: 'Sí, finalizar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });
        });
    });

    document.getElementById('btnExportarExcelPrestamos').addEventListener('click', function () {
        const tabla  = document.getElementById('tablaPrestamos');
        const filas  = Array.from(tabla.querySelectorAll('tbody tr'));
        const filasExportar = [];

        const headers = [];
        tabla.querySelectorAll('thead th').forEach((th, index) => {
            if (index < 4) headers.push(th.innerText);
        });
        filasExportar.push(headers);

        const inputBusqueda = document.getElementById('buscadorPrestamos');
        const filtroTipo    = document.getElementById('filtroTipo');
        const valor = inputBusqueda.value.toLowerCase().trim();
        const tipo  = filtroTipo.value;

        const filtradas = filas.filter(fila => {
            const celdas = fila.cells;
            const [id, nombre, fecha, estado] = [
                celdas[0].textContent.toLowerCase(),
                celdas[1].textContent.toLowerCase(),
                celdas[2].textContent.toLowerCase(),
                celdas[3].textContent.toLowerCase()
            ];
            switch (tipo) {
                case 'id':     return id.includes(valor);
                case 'nombre': return nombre.includes(valor);
                case 'fecha':  return fecha.includes(valor);
                case 'estado': return estado.includes(valor);
                default:       return true;
            }
        });

        filtradas.forEach(fila => {
            const row = [];
            fila.querySelectorAll('td').forEach((td, index) => {
                if (index < 4) {
                    let texto = td.textContent.replace(/\s+/g, ' ').trim();
                    row.push(texto);
                }
            });
            filasExportar.push(row);
        });

        const ws = XLSX.utils.aoa_to_sheet(filasExportar);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Prestamos");
        XLSX.writeFile(wb, "prestamos_filtrados.xlsx");
    });
</script>