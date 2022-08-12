<link rel="stylesheet" href="css/estilos.css">
<form action="form-registro-nombre.php" method = "POST">
  <div class="slideContainer">
    <h3>¿Cuánto <span class="remarcado">dinero</span> necesitas?</h3>
  <p class="importeSolicitado">
    <span id="valor"  class="importeSolicitado">$30,000</span></p>
  <input type="range" name="importe" min="5000" max="100000" step="5000" value ="30000" id="estimador" class="slider">
    <h5>Pago quincenal estimado </h5>
    <P class="importeQuincenal"><span id="pagoQuincenal">$1,875</span></P>
      <select name="tipo_credito" id="tipo_credito" class="formulario__input input_tipo"tabindex="2" style=" background-color:#fff; text-align:center; width:50%;">
        <option value ="-1"selected disabled>Selecciona tu Crédito</option>
        <option value ="1">Credito Pyme</option>
        <option value ="2" >Crédito Simple</option>
        <option value ="3">MicroCrédito</option>
        <option value ="4">Crédito de Nómina</option>
      </select><p class="formulario__input-error">Debe seleccionar una opción de crédito</p>
<div class="espacio"></div>
<input type="submit" id="validate" class="button" value="Solicítalo ahora!" >
<p class="nota">Necesitarás: Identificación oficial vigente y cuenta bancaria a tu nombre. Buen historial crediticio reciente e ingresos comprobables mínimos por $10,000 mensuales</p>
</div> <!--SlideContainet--></form>
<script>
  $('#validate').click(function() {

if ($('#tipo_credito').value === "Selecciona tu Crédito") {
  document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		e.preventDefault();

} else {
    alert('Campo correcto');
}
});
</script>