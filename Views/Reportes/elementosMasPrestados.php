<!-- =====================================
     Archivo: Reporte - Elementos Más Prestados
     Estilo: Azul marino minimalista (mismo sistema)
====================================== -->

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

    /* ===== TARJETAS KPI ===== */
    .rep-kpi-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) { .rep-kpi-row { grid-template-columns: 1fr; } }

    .rep-kpi {
        background: #fff;
        border-radius: 14px;
        border: 1px solid #e4eaf3;
        padding: 16px 18px;
        box-shadow: 0 2px 12px rgba(13,48,135,.07);
        display: flex;
        align-items: center;
        gap: 14px;
        position: relative;
        overflow: hidden;
    }

    .rep-kpi::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, #0d3087, #3c56c7);
    }

    .rep-kpi-icon {
        width: 42px; height: 42px;
        background: #eef1fb;
        border-radius: 11px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }

    .rep-kpi-icon i { font-size: 20px; color: #3c56c7; }

    .rep-kpi-val {
        font-family: 'Syne', sans-serif;
        font-size: 24px;
        font-weight: 700;
        color: #0d3087;
        line-height: 1;
    }

    .rep-kpi-label {
        font-size: 12px;
        color: #8a97ad;
        margin-top: 2px;
    }

    /* ===== CARD PRINCIPAL ===== */
    .rep-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,.13);
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .rep-card::before {
        content: '';
        display: block;
        height: 4px;
        background: linear-gradient(90deg, #0d3087, #3c56c7, #6c83e0);
    }

    /* ===== HEADER ===== */
    .rep-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 1.4rem 1.8rem 0.6rem;
    }

    .rep-header-icon {
        width: 46px; height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }

    .rep-header-icon i { font-size: 22px; color: #3c56c7; }

    .rep-header-text h4 {
        font-size: 17px; font-weight: 700;
        color: #0d3087; margin: 0;
        font-family: 'Syne', sans-serif;
    }

    .rep-header-text p { font-size: 12.5px; color: #94a3b8; margin: 2px 0 0; }

    .rep-divider { height: 1px; background: #e8edf6; margin: 0.4rem 1.8rem 1rem; }
    .rep-body    { padding: 0 1.8rem 1.8rem; }

    /* ===== TOOLBAR ===== */
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
        outline: none;
        font-family: inherit;
        transition: border-color .2s;
    }

    .tb-select:focus, .tb-input:focus {
        border-color: #3c56c7;
        box-shadow: 0 0 0 3px rgba(60,86,199,.08);
    }

    .tb-input::placeholder { color: #a8b8d8; }
    .tb-select { min-width: 190px; }
    .tb-input  { min-width: 220px; }

    /* ===== BOTONES TOOLBAR ===== */
    .btn-imprimir {
        background: #f0f4ff;
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

    .btn-imprimir:hover { background: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    .btn-excel {
        background: #f0f4ff;
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

    .btn-excel:hover { background: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    /* ===== TABLA ===== */
    .rep-table { width: 100%; border-collapse: collapse; font-size: 13.5px; }

    .rep-table thead tr { background: #0d3087; }
    .rep-table thead th {
        color: #ffffff;
        font-weight: 600;
        font-size: 12.5px;
        letter-spacing: .03em;
        padding: 11px 14px;
        text-align: center;
        border: none;
    }

    .rep-table tbody tr { border-bottom: 1px solid #edf1fa; transition: background .15s; }
    .rep-table tbody tr:hover { background: #f5f8ff; }
    .rep-table tbody td {
        padding: 10px 14px;
        text-align: center;
        color: #2d4080;
        vertical-align: middle;
        border: none;
    }

    /* ===== BADGE RANKING ===== */
    .badge-rank-1 {
        background: #fff8e6; color: #946800;
        border: 1px solid #f5d87a;
        border-radius: 6px; padding: 3px 10px;
        font-size: 11.5px; font-weight: 700;
        display: inline-flex; align-items: center; gap: 4px;
    }

    .badge-rank-2 {
        background: #f0f3f8; color: #2d4080;
        border: 1px solid #c5d0e8;
        border-radius: 6px; padding: 3px 10px;
        font-size: 11.5px; font-weight: 700;
        display: inline-flex; align-items: center; gap: 4px;
    }

    .badge-rank-3 {
        background: #fef0e8; color: #8b3a00;
        border: 1px solid #f5c09a;
        border-radius: 6px; padding: 3px 10px;
        font-size: 11.5px; font-weight: 700;
        display: inline-flex; align-items: center; gap: 4px;
    }

    /* Barra de frecuencia visual */
    .freq-bar-wrap {
        display: flex; align-items: center; gap: 8px;
    }

    .freq-bar {
        height: 6px;
        border-radius: 4px;
        background: linear-gradient(90deg, #3c56c7, #6c83e0);
        min-width: 4px;
    }

    .freq-num {
        font-weight: 700;
        color: #0d3087;
        font-size: 13px;
        white-space: nowrap;
    }

    /* ===== PAGINACIÓN ===== */
    .pag-wrap { display: flex; justify-content: center; margin-top: 1.2rem; }
    #paginacionPrestados { display: flex; gap: 4px; list-style: none; padding: 0; margin: 0; }

    #paginacionPrestados .page-item .page-link {
        display: inline-flex; align-items: center; justify-content: center;
        min-width: 34px; height: 34px; border-radius: 8px;
        border: 1.5px solid #d6e0fa; background: #f5f8ff;
        color: #3c56c7; font-size: 13px; font-weight: 500;
        text-decoration: none; transition: background .15s, border-color .15s;
    }

    #paginacionPrestados .page-item.active .page-link {
        background: #3c56c7; border-color: #3c56c7; color: #fff;
    }

    #paginacionPrestados .page-item.disabled .page-link { opacity: .4; pointer-events: none; }
    #paginacionPrestados .page-item .page-link:hover { background: #e2ebff; border-color: #b8c8ec; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .rep-body    { padding: 0 1rem 1.2rem; }
        .rep-header  { padding: 1.2rem 1rem 0.4rem; }
        .rep-divider { margin: 0.4rem 1rem 0.8rem; }
        .toolbar { flex-direction: column; align-items: flex-start; }
        .tb-select, .tb-input { width: 100%; }
        .toolbar-right { width: 100%; }
        .btn-imprimir, .btn-excel { width: 100%; justify-content: center; }
    }

    /* ===== PRINT ===== */
    @media print {
        .toolbar, .pag-wrap, nav { display: none !important; }
        .rep-kpi-row { break-inside: avoid; }
        body { background: #fff !important; }
        svg[style*="position:fixed"] { display: none !important; }
    }
</style>

<div class="container mt-4 mb-5" style="position:relative;z-index:1;">

    <!-- KPIs de resumen -->
    <div class="rep-kpi-row" id="kpi-row">
        <div class="rep-kpi">
            <div class="rep-kpi-icon"><i class='bx bx-transfer-alt'></i></div>
            <div>
                <div class="rep-kpi-val" id="kpi-total-prestamos">—</div>
                <div class="rep-kpi-label">Total de préstamos registrados</div>
            </div>
        </div>
        <div class="rep-kpi">
            <div class="rep-kpi-icon"><i class='bx bx-box'></i></div>
            <div>
                <div class="rep-kpi-val" id="kpi-total-elementos">—</div>
                <div class="rep-kpi-label">Elementos distintos prestados</div>
            </div>
        </div>
        <div class="rep-kpi">
            <div class="rep-kpi-icon"><i class='bx bx-trophy'></i></div>
            <div>
                <div class="rep-kpi-val" id="kpi-mas-prestado">—</div>
                <div class="rep-kpi-label">Elemento más solicitado</div>
            </div>
        </div>
    </div>

    <!-- Card principal -->
    <div class="rep-card">

        <div class="rep-header">
            <div class="rep-header-icon">
                <i class='bx bx-bar-chart-alt-2'></i>
            </div>
            <div class="rep-header-text">
                <h4>Elementos Más Prestados</h4>
                <p>Ranking de elementos por frecuencia de uso en el sistema</p>
            </div>
        </div>

        <div class="rep-divider"></div>

        <div class="rep-body">

            <!-- Toolbar -->
            <div class="toolbar">
                <div class="toolbar-left">
                    <select id="filtroPrestados" class="tb-select">
                        <option value="codigo">Por Código</option>
                        <option value="nombre">Por Nombre</option>
                        <option value="usuario">Por Usuario frecuente</option>
                        <option value="fecha">Por Última fecha</option>
                    </select>
                    <input type="search" id="buscadorPrestados" class="tb-input"
                           placeholder="Buscar..." aria-label="Buscar">
                </div>
                <div class="toolbar-right">
                    <button class="btn-imprimir" onclick="window.print()">
                        <i class='bx bx-printer'></i> Imprimir
                    </button>
                    <button class="btn-excel" id="btnExportarExcel">
                        <i class='bx bxs-file-export'></i> Exportar Excel
                    </button>
                </div>
            </div>

            <!-- Tabla -->
            <div class="table-responsive">
                <table class="rep-table" id="tablaPrestados">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Nombre del Elemento</th>
                            <th>Veces Prestado</th>
                            <th>Última Fecha</th>
                            <th>Usuario más Frecuente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $posicion = 1;
                        if ($elementos && mysqli_num_rows($elementos) > 0):
                            while ($e = mysqli_fetch_assoc($elementos)):
                        ?>
                            <tr>
                                <td>
                                    <?php if ($posicion === 1): ?>
                                        <span class="badge-rank-1"><i class='bx bx-trophy'></i> 1°</span>
                                    <?php elseif ($posicion === 2): ?>
                                        <span class="badge-rank-2"><i class='bx bx-medal'></i> 2°</span>
                                    <?php elseif ($posicion === 3): ?>
                                        <span class="badge-rank-3"><i class='bx bx-award'></i> 3°</span>
                                    <?php else: ?>
                                        <span style="font-size:13px;color:#8a97ad;font-weight:600;"><?= $posicion ?>°</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= htmlspecialchars($e['elem_codigo']); ?></td>
                                <td style="text-align:left;font-weight:500;"><?= htmlspecialchars($e['elem_nombre']); ?></td>
                                <td>
                                    <div class="freq-bar-wrap" style="justify-content:center;">
                                        <div class="freq-bar" style="width:<?= min($e['veces_prestado'] * 8, 80) ?>px;"></div>
                                        <span class="freq-num"><?= $e['veces_prestado']; ?></span>
                                    </div>
                                </td>
                                <td><?= date('d/m/Y', strtotime($e['ultima_fecha'])); ?></td>
                                <td><?= htmlspecialchars($e['usuario_mas_frecuente']); ?></td>
                            </tr>
                        <?php
                            $posicion++;
                            endwhile;
                        else:
                        ?>
                            <tr>
                                <td colspan="6" style="color:#94a3b8;padding:2.5rem;text-align:center;">
                                    <i class='bx bx-data' style="font-size:32px;display:block;margin-bottom:8px;opacity:.4;"></i>
                                    No hay datos de préstamos registrados.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pag-wrap">
                <nav><ul class="pagination" id="paginacionPrestados"></ul></nav>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    /* ── KPIs desde la tabla ── */
    const filasTodas  = Array.from(document.querySelectorAll('#tablaPrestados tbody tr'));
    const totalElem   = filasTodas.filter(f => f.cells.length > 1).length;
    let   totalVeces  = 0;
    let   masNombre   = '—';
    let   masVeces    = 0;

    filasTodas.forEach((fila, i) => {
        if (fila.cells.length < 4) return;
        const veces = parseInt(fila.cells[3].textContent.trim()) || 0;
        totalVeces += veces;
        if (i === 0) { masNombre = fila.cells[2].textContent.trim(); masVeces = veces; }
    });

    document.getElementById('kpi-total-prestamos').textContent = totalVeces || '—';
    document.getElementById('kpi-total-elementos').textContent = totalElem  || '—';
    document.getElementById('kpi-mas-prestado').textContent    = masNombre;

    /* ── Búsqueda + paginación ── */
    const inputBusqueda  = document.getElementById('buscadorPrestados');
    const filtroTipo     = document.getElementById('filtroPrestados');
    const tablaBody      = document.querySelector('#tablaPrestados tbody');
    const paginacion     = document.getElementById('paginacionPrestados');
    const filas          = Array.from(tablaBody.rows);
    const filasPorPagina = 8;
    let   paginaActual   = 1;

    const renderTabla = () => {
        const valor = inputBusqueda.value.toLowerCase().trim();
        const tipo  = filtroTipo.value;

        const filtradas = filas.filter(fila => {
            if (fila.cells.length < 5) return true;
            const codigo  = fila.cells[1].textContent.toLowerCase();
            const nombre  = fila.cells[2].textContent.toLowerCase();
            const fecha   = fila.cells[4].textContent.toLowerCase();
            const usuario = fila.cells[5]?.textContent.toLowerCase() ?? '';
            switch (tipo) {
                case 'codigo':  return codigo.includes(valor);
                case 'nombre':  return nombre.includes(valor);
                case 'usuario': return usuario.includes(valor);
                case 'fecha':   return fecha.includes(valor);
                default:        return true;
            }
        });

        const totalPaginas = Math.ceil(filtradas.length / filasPorPagina);
        const inicio = (paginaActual - 1) * filasPorPagina;
        const fin    = inicio + filasPorPagina;

        filas.forEach(f => f.style.display = 'none');
        filtradas.slice(inicio, fin).forEach(f => f.style.display = '');
        renderPaginacion(totalPaginas);
    };

    const renderPaginacion = totalPaginas => {
        paginacion.innerHTML = '';
        if (totalPaginas <= 1) return;

        const crearItem = (html, pagina, disabled = false, active = false) => {
            const li = document.createElement('li');
            li.className = `page-item${disabled ? ' disabled' : ''}${active ? ' active' : ''}`;
            const a = document.createElement('a');
            a.className = 'page-link'; a.href = '#'; a.innerHTML = html;
            a.onclick = e => {
                e.preventDefault();
                if (!disabled && pagina !== paginaActual) { paginaActual = pagina; renderTabla(); }
            };
            li.appendChild(a); return li;
        };

        paginacion.appendChild(crearItem('&laquo;', paginaActual - 1, paginaActual === 1));
        for (let i = 1; i <= totalPaginas; i++)
            paginacion.appendChild(crearItem(i, i, false, paginaActual === i));
        paginacion.appendChild(crearItem('&raquo;', paginaActual + 1, paginaActual === totalPaginas));
    };

    inputBusqueda.addEventListener('input',  () => { paginaActual = 1; renderTabla(); });
    filtroTipo.addEventListener('change',    () => { paginaActual = 1; renderTabla(); });
    renderTabla();

    /* ── Exportar Excel ── */
    document.getElementById('btnExportarExcel').addEventListener('click', () => {
        const valor = inputBusqueda.value.toLowerCase().trim();
        const tipo  = filtroTipo.value;

        const filtradas = filas.filter(fila => {
            if (fila.cells.length < 5) return true;
            const codigo  = fila.cells[1].textContent.toLowerCase();
            const nombre  = fila.cells[2].textContent.toLowerCase();
            const fecha   = fila.cells[4].textContent.toLowerCase();
            const usuario = fila.cells[5]?.textContent.toLowerCase() ?? '';
            switch (tipo) {
                case 'codigo':  return codigo.includes(valor);
                case 'nombre':  return nombre.includes(valor);
                case 'usuario': return usuario.includes(valor);
                case 'fecha':   return fecha.includes(valor);
                default:        return true;
            }
        });

        const datos = [['#', 'Código', 'Nombre', 'Veces Prestado', 'Última Fecha', 'Usuario Frecuente']];
        filtradas.forEach(fila => {
            if (fila.cells.length < 5) return;
            datos.push([
                fila.cells[0].textContent.trim(),
                fila.cells[1].textContent.trim(),
                fila.cells[2].textContent.trim(),
                fila.cells[3].textContent.trim(),
                fila.cells[4].textContent.trim(),
                fila.cells[5]?.textContent.trim() ?? ''
            ]);
        });

        const ws = XLSX.utils.aoa_to_sheet(datos);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Elementos Más Prestados');
        XLSX.writeFile(wb, 'reporte_elementos_prestados.xlsx');
    });
});
</script>