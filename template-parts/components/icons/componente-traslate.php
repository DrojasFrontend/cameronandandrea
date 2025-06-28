<?php 
    global $TRP_LANGUAGE;
    $trp = TRP_Translate_Press::get_trp_instance();
    $url_converter = $trp->get_component('url_converter');

    $idiomas = array(
        'es_CO' => array('nombre' => 'Español', 'bandera' => get_template_directory_uri() . '/images/co.svg'),
        'en_US' => array('nombre' => 'English', 'bandera' => get_template_directory_uri() . '/images/en.svg')
    );
?>

<div class="d-inline-block pt-1 ps-lg-4">
    <div class="w-auto d-flex flex-row-reverse align-items-center gap-lg-2 gap-1">
        <?php foreach ($idiomas as $codigo => $datos): ?>
            <?php if ($codigo === $TRP_LANGUAGE): ?>
                <span class="language-active">
                    <img src="<?php echo $datos['bandera']; ?>" alt="<?php echo $datos['nombre']; ?>" class="flag-icon me-1" width="30" height="20">
                    <!-- <?php echo $datos['nombre']; ?> -->
                </span>
            <?php else: ?>
                <a class="" href="<?php echo $url_converter->get_url_for_language($codigo); ?>" class="language-inactive">
                    <img src="<?php echo $datos['bandera']; ?>" alt="<?php echo $datos['nombre']; ?>" class="flag-icon me-1" width="30" height="20">
                    <!-- <?php echo $datos['nombre']; ?> -->
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>