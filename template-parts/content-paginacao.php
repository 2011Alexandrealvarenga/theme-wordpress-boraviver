<div class="paginacao">
  <?php 
  $big = 999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big)) ),
        ));
 ?>
</div>