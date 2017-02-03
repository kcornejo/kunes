<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($archivo->getId(), 'archivo_edit', $archivo) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre_archivo_original">
  <?php echo $archivo->getNombreArchivoOriginal() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre_archivo_actual">
  <?php echo $archivo->getNombreArchivoActual() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_usuario_id">
  <?php echo $archivo->getUsuarioId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($archivo->getCreatedAt()) ? format_date($archivo->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($archivo->getUpdatedAt()) ? format_date($archivo->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_created_by">
  <?php echo $archivo->getCreatedBy() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_updated_by">
  <?php echo $archivo->getUpdatedBy() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cantidad_rating">
  <?php echo $archivo->getCantidadRating() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rating">
  <?php echo $archivo->getRating() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estado">
  <?php echo $archivo->getEstado() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $archivo->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_etiqueta">
  <?php echo $archivo->getEtiqueta() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_materia_id">
  <?php echo $archivo->getMateriaId() ?>
</td>
