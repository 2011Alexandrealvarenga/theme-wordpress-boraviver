<form role="search" method="get" action="<?php echo home_url('/'); ?> ">
  <div class="input-group">
    <input type="search" class="form-control" value="<?php echo get_search_query(); ?>" name="s"/>
    <div class="input-group-append">
      <button class="btn btn-my-color-5" type="submit"><i class="icon-search"></i>
        
      </button>
    </div>
  </div>
</form>