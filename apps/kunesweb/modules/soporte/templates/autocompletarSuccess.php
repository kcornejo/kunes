<?php foreach ($archivos as $archivo): ?>
    <li class="list-group-item list-group-item-info"  style="cursor:pointer" onclick="window.location.href = '<?php echo url_for('archivo/detalle') . '?id=' . $archivo->getId() ?>'">
        <?php echo $archivo->getDescripcion();?>
    </li>
<?php endforeach; ?>
