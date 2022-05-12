<form action="index.php" method="post">
    <select id="status" name="status" class="form-select" onChange="mostrar4(this.value);">
        <option value="">Consultar formato de registro</option>
        <option value="I">I Política</option>
        <option value="II">II Identificación de peligros y aspectos ambientales, análisis de riesgos y evacuación de impactos ambientales</option>
        <option value="III">III Requisitos legales</option>
        <option value="IV">IV Objetivos, metas e indicadores</option>
        <option value="V">V Funciones, responsabilidades y autoridades</option>
        <option value="VI">VI Competencia del personal, capacitación y entretenimiento</option>
        <option value="VII">VII Comunicación, participación y consulta</option>
        <option value="VIII">VIII Control de documentos y registros</option>
        <option value="IX">IX Mejores prácticas y estándares</option>
        <option value="X">X Control de actividades y procesos</option>
        <option value="XI">XI Integridad mecánica y aseguramiento de la calidad</option>
        <option value="XII">XII Seguridad de contratistas</option>
        <option value="XIII">XIII Preparación y respuestas a emergencias </option>
        <option value="XIV">XIV Monitoreo verificación y evaluación</option>
        <option value="XV">XV Auditorías</option>
        <option value="XVI">XVI Investigación de incidentes y accidentes</option>
        <option value="XVII">XVII Revisión de resultados</option>
        <option value="XVIII">XVIII Informes de desempeño</option>
    </select>
</form>
<div id="I" style="display: none;">
    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
        @include('modal-elementos.formularios iv.tabla')
    </a>
</div>
<div id="II" style="display: none;">
    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
        Evaluar2
    </a>
</div>
<div id="III" style="display: none;">
    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
        Evaluar3
    </a>
</div>
