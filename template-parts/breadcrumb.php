<?php if( is_404() ) : ?>
    <div class="breadcrumbs breadcrumb breadcrumb--404" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php else: ?>
    <div class="breadcrumbs breadcrumb " typeof="BreadcrumbList" vocab="https://schema.org/">
<?php endif; ?>

    <div class="inner breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
</div>