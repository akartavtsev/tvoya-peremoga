jQuery(function($) {

  $(document).ready(function(){
    showText();
  });

  function showText(){
    $('.read-more').click(function() {
      $('.container-text').show(1000);
      $('.read-more').hide();
    });
  }
});
