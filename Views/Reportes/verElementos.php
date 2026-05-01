<!-- =====================================
     Archivo: Reporte - Monitoreo de Stock
     Estilo: Azul marino (mismo que módulo Elementos)
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
    body { background: #e8eef8; position: relative; }

    /* ===== KPIs ===== */
    .mon-kpi-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) { .mon-kpi-row { grid-template-columns: 1fr; } }

    .mon-kpi {
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

    .mon-kpi::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, #0d3087, #3c56c7);
    }

    .mon-kpi-icon {
        width: 42px; height: 42px;
        background: #eef1fb;
        border-radius: 11px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }

    .mon-kpi-icon i { font-size: 20px; color: #3c56c7; }
    .mon-kpi-icon.warn { background: #fff2f2; }
    .mon-kpi-icon.warn i { color: #c0001a; }

    .mon-kpi-val {
        font-family: 'Syne', sans-serif;
        font-size: 26px;
        font-weight: 700;
        color: #0d3087;
        line-height: 1;
    }

    .mon-kpi-val.danger { color: #c0001a; }

    .mon-kpi-label {
        font-size: 12px;
        color: #8a97ad;
        margin-top: 3px;
    }

    /* ===== CARD PRINCIPAL — idéntica a elem-card ===== */
    .elem-card {
        background: #ffffff;
        border-radius: 18px;
        border: none;
        box-shadow: 0 8px 40px rgba(13,48,135,.13);
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
        width: 46px; height: 46px;
        background: #eef1fb;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }

    .elem-header-icon i { font-size: 22px; color: #3c56c7; }

    .elem-header-text h4 {
        font-size: 17px; font-weight: 700;
        color: #0d3087; margin: 0;
        font-family: 'Syne', sans-serif;
    }

    .elem-header-text p { font-size: 12.5px; color: #94a3b8; margin: 2px 0 0; }

    .elem-divider { height: 1px; background: #e8edf6; margin: 0.6rem 1.8rem 1rem; }
    .elem-body    { padding: 0 1.8rem 1.8rem; }

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
    .tb-select { min-width: 160px; }
    .tb-input  { min-width: 220px; }

    .btn-excel {
        background: #f0f4ff; background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 8px 16px;
        font-size: 13px; font-weight: 500;
        cursor: pointer;
        display: inline-flex; align-items: center; gap: 6px;
        transition: background .2s, border-color .2s;
        font-family: inherit;
    }

    .btn-excel:hover { background: #e2ebff; background-color: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    .btn-imprimir {
        background: #f0f4ff; background-color: #f0f4ff;
        color: #3d5a99;
        border: 1.5px solid #d6e0fa;
        border-radius: 9px;
        padding: 8px 16px;
        font-size: 13px; font-weight: 500;
        cursor: pointer;
        display: inline-flex; align-items: center; gap: 6px;
        transition: background .2s, border-color .2s;
        font-family: inherit;
    }

    .btn-imprimir:hover { background: #e2ebff; background-color: #e2ebff; border-color: #b8c8ec; color: #1e2a45; }

    /* ===== TABLA — idéntica a elem-table ===== */
    .elem-table { width: 100%; border-collapse: collapse; font-size: 13.5px; }

    .elem-table thead tr { background: #0d3087; }
    .elem-table thead th {
        color: #ffffff; font-weight: 600; font-size: 12.5px;
        letter-spacing: .03em; padding: 11px 14px;
        text-align: center; border: none;
    }

    .elem-table tbody tr { border-bottom: 1px solid #edf1fa; transition: background .15s; }
    .elem-table tbody tr:hover { background: #f5f8ff; }
    .elem-table tbody td {
        padding: 10px 14px; text-align: center;
        color: #2d4080; vertical-align: middle; border: none;
    }

    /* Fila en alerta stock bajo */
    .elem-table tbody tr.row-alerta td { color: #8b1a1a; }
    .elem-table tbody tr.row-alerta { background: #fff5f5; }
    .elem-table tbody tr.row-alerta:hover { background: #ffe8e8; }

    /* ===== BADGES ===== */
    .badge-ok {
        background: #e6f4ec; color: #1a7a42;
        border: 1px solid #a8dbb9; border-radius: 6px;
        padding: 3px 10px; font-size: 11.5px; font-weight: 600;
        display: inline-block;
    }

    .badge-bajo {
        background: #ffe8e8; color: #c0001a;
        border: 1px solid #fbb; border-radius: 6px;
        padding: 3px 10px; font-size: 11.5px; font-weight: 600;
        display: inline-flex; align-items: center; gap: 4px;
    }

    .badge-tipo {
        background: #eef1fb; color: #3c56c7;
        border: 1px solid #c5d0e8; border-radius: 6px;
        padding: 3px 10px; font-size: 11.5px; font-weight: 600;
        display: inline-block;
    }

    /* ===== AVISO INFERIOR ===== */
    .mon-aviso {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #fff8e6;
        border: 1px solid #f5d87a;
        border-radius: 10px;
        padding: 10px 16px;
        font-size: 12.5px;
        color: #7a5200;
        margin-top: 1rem;
    }

    .mon-aviso i { font-size: 16px; color: #d48806; flex-shrink: 0; }

    /* ===== PAGINACIÓN ===== */
    .pag-wrap { display: flex; justify-content: center; margin-top: 1.2rem; }
    #paginacionTabla { display: flex; gap: 4px; list-style: none; padding: 0; margin: 0; }

    #paginacionTabla .page-item .page-link {
        display: inline-flex; align-items: center; justify-content: center;
        min-width: 34px; height: 34px; border-radius: 8px;
        border: 1.5px solid #d6e0fa; background: #f5f8ff;
        color: #3c56c7; font-size: 13px; font-weight: 500;
        text-decoration: none; transition: background .15s, border-color .15s;
    }

    #paginacionTabla .page-item.active .page-link {
        background: #3c56c7; background-color: #3c56c7;
        border-color: #3c56c7; color: #ffffff;
    }

    #paginacionTabla .page-item.disabled .page-link { opacity: .4; pointer-events: none; }
    #paginacionTabla .page-item .page-link:hover { background: #e2ebff; border-color: #b8c8ec; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .elem-body { padding: 0 1rem 1.2rem; }
        .elem-header { padding: 1.2rem 1rem 0.4rem; }
        .elem-divider { margin: 0.5rem 1rem 0.8rem; }
        .toolbar { flex-direction: column; align-items: flex-start; }
        .tb-select, .tb-input { width: 100%; }
        .toolbar-right { width: 100%; }
        .btn-excel, .btn-imprimir { width: 100%; justify-content: center; }
    }

    /* ===== PRINT ===== */
    @media print {
        .toolbar, .pag-wrap, nav { display: none !important; }
        body { background: #fff !important; }
        svg[style*="position:fixed"] { display: none !important; }
    }
</style>

<div class="container mt-4 mb-5" style="position:relative;z-index:1;">

    <!-- KPIs calculados por JS -->
    <div class="mon-kpi-row">
        <div class="mon-kpi">
            <div class="mon-kpi-icon"><i class='bx bx-box'></i></div>
            <div>
                <div class="mon-kpi-val" id="kpi-total">—</div>
                <div class="mon-kpi-label">Total de elementos</div>
            </div>
        </div>
        <div class="mon-kpi">
            <div class="mon-kpi-icon warn"><i class='bx bxs-error-circle'></i></div>
            <div>
                <div class="mon-kpi-val danger" id="kpi-alertas">—</div>
                <div class="mon-kpi-label">Elementos con stock bajo (&lt; 5)</div>
            </div>
        </div>
        <div class="mon-kpi">
            <div class="mon-kpi-icon"><i class='bx bx-category'></i></div>
            <div>
                <div class="mon-kpi-val" id="kpi-categorias">—</div>
                <div class="mon-kpi-label">Categorías distintas</div>
            </div>
        </div>
    </div>

    <div class="elem-card">

        <!-- Header -->
        <div class="elem-header">
            <div class="elem-header-icon">
                <i class='bx bx-bar-chart-alt-2'></i>
            </div>
            <div class="elem-header-text">
                <h4>Monitoreo de Stock de Elementos</h4>
                <p>Consulta y filtra el nivel de inventario por elemento</p>
            </div>
        </div>

        <div class="elem-divider"></div>

        <div class="elem-body">

            <!-- Toolbar -->
            <div class="toolbar">
                <div class="toolbar-left">
                    <select id="filtroTipo" class="tb-select">
                        <option value="codigo">Por Código</option>
                        <option value="nombre">Por Nombre</option>
                        <option value="categoria">Por Categoría</option>
                    </select>
                    <input type="search" id="buscadorElementos" class="tb-input"
                           placeholder="Buscar..." aria-label="Buscar">
                </div>
                <div class="toolbar-right">
                    <button class="btn-imprimir" onclick="window.print()">
                        <i class='bx bx-printer'></i> Imprimir
                    </button>
                    <button class="btn-excel" id="btnExportarExcel" type="button">
                        <i class='bx bxs-file-export'></i> Exportar Excel
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
                            <th>Cantidad</th>
                            <th>Estado Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($elementos && mysqli_num_rows($elementos) > 0): ?>
                            <?php while ($elemento = mysqli_fetch_assoc($elementos)): ?>
                                <?php $esAlerta = ($elemento['elem_telem_id'] == 2 && $elemento['elem_cantidad'] < 5); ?>
                                <tr class="<?= $esAlerta ? 'row-alerta' : '' ?>"
                                    title="<?= $esAlerta ? '¡Advertencia! Elemento por agotarse' : '' ?>">
                                    <td><?= htmlspecialchars($elemento['elem_codigo']); ?></td>
                                    <td style="text-align:left;font-weight:500;"><?= htmlspecialchars($elemento['elem_nombre']); ?></td>
                                    <td>
                                        <span class="badge-tipo"><?= htmlspecialchars($elemento['telem_nombre']); ?></span>
                                    </td>
                                    <td><?= htmlspecialchars($elemento['cate_nombre']); ?></td>
                                    <td>
                                        <strong><?= $elemento['elem_cantidad']; ?></strong>
                                    </td>
                                    <td>
                                        <?php if ($esAlerta): ?>
                                            <span class="badge-bajo">
                                                <i class='bx bxs-error-circle'></i> Stock bajo
                                            </span>
                                        <?php else: ?>
                                            <span class="badge-ok">Normal</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" style="color:#94a3b8;padding:2.5rem;text-align:center;">
                                    <i class='bx bx-data' style="font-size:32px;display:block;margin-bottom:8px;opacity:.4;"></i>
                                    No se encontraron elementos.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Aviso inferior -->
            <div class="mon-aviso">
                <i class='bx bx-info-circle'></i>
                Los elementos <strong>No Devolutivos</strong> con <strong>cantidad menor a 5</strong>
                aparecen resaltados en rojo como advertencia de bajo inventario.
            </div>

            <!-- Paginación -->
            <div class="pag-wrap">
                <nav><ul class="pagination" id="paginacionTabla"></ul></nav>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    /* ── KPIs desde la tabla ── */
    const todasFilas = Array.from(document.querySelectorAll('#tablaElementos tbody tr'));
    const total      = todasFilas.filter(f => f.cells.length > 1).length;
    const alertas    = todasFilas.filter(f => f.classList.contains('row-alerta')).length;
    const cats       = new Set(todasFilas.map(f => f.cells[3]?.textContent.trim()).filter(Boolean));

    document.getElementById('kpi-total').textContent      = total    || '0';
    document.getElementById('kpi-alertas').textContent    = alertas  || '0';
    document.getElementById('kpi-categorias').textContent = cats.size || '0';

    /* ── Búsqueda + paginación ── */
    const inputBusqueda  = document.getElementById('buscadorElementos');
    const filtroTipo     = document.getElementById('filtroTipo');
    const tablaBody      = document.querySelector('#tablaElementos tbody');
    const paginacion     = document.getElementById('paginacionTabla');
    const filas          = Array.from(tablaBody.rows);
    const filasPorPagina = 6;
    let   paginaActual   = 1;

    const renderTabla = () => {
        const valor = inputBusqueda.value.toLowerCase().trim();
        const tipo  = filtroTipo.value;

        const filtradas = filas.filter(fila => {
            if (fila.cells.length < 4) return true;
            const codigo    = fila.cells[0].textContent.toLowerCase();
            const nombre    = fila.cells[1].textContent.toLowerCase();
            const categoria = fila.cells[3].textContent.toLowerCase();
            switch (tipo) {
                case 'codigo':    return codigo.includes(valor);
                case 'nombre':    return nombre.includes(valor);
                case 'categoria': return categoria.includes(valor);
                default:          return true;
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

        const crearItem = (label, pagina, disabled = false, active = false) => {
            const li = document.createElement('li');
            li.className = `page-item${disabled ? ' disabled' : ''}${active ? ' active' : ''}`;
            const a = document.createElement('a');
            a.className = 'page-link'; a.href = '#'; a.innerHTML = label;
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
            if (fila.cells.length < 4) return true;
            const codigo    = fila.cells[0].textContent.toLowerCase();
            const nombre    = fila.cells[1].textContent.toLowerCase();
            const categoria = fila.cells[3].textContent.toLowerCase();
            switch (tipo) {
                case 'codigo':    return codigo.includes(valor);
                case 'nombre':    return nombre.includes(valor);
                case 'categoria': return categoria.includes(valor);
                default:          return true;
            }
        });

        const datos = [['Código', 'Nombre', 'Tipo', 'Categoría', 'Cantidad', 'Estado Stock']];
        filtradas.forEach(fila => {
            if (fila.cells.length < 5) return;
            datos.push([
                fila.cells[0].textContent.trim(),
                fila.cells[1].textContent.trim(),
                fila.cells[2].textContent.trim(),
                fila.cells[3].textContent.trim(),
                fila.cells[4].textContent.trim(),
                fila.cells[5].textContent.trim(),
            ]);
        });

        const ws = XLSX.utils.aoa_to_sheet(datos);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Stock Elementos');
        XLSX.writeFile(wb, 'monitoreo_stock.xlsx');
    });
});
</script>