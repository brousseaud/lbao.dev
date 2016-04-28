<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
<script>
jQuery(document).ready(function(){
  pos = 0
  moveThis = ((1/10)*100)
  move2 = moveThis
  jQuery(".left-arrow").click(function(){
    if(pos >= -130) {
      jQuery(".game").animate({
        left:"-=" + move2  + "%"
      });
      pos -= move2;
    };
  });
  jQuery(".right-arrow").click(function(){
    if(pos == 0){
    }else{
    jQuery(".game").animate({
      left:"+=" + move2 + "%"
    });
    pos += move2;
  }
    });
  });
</script>
