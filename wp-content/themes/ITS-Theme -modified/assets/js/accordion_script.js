jQuery(document).ready(function($) {
    jQuery('.accordion-header').click(function() {
       var $this = $(this);
       var $accordionBody = $this.next('.accordion-body');
       
   
       $('.accordion-body').not($accordionBody).slideUp();
       $accordionBody.slideToggle();
   
    });
   
    $(".accordion-header").first().trigger('click');
 });