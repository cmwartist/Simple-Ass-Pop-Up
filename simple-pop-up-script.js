jQuery(document).ready(function(){
    jQuery('.simple-pop-up-close').click(function(){
        jQuery('#simple-pop-up').addClass('hidden');
    });
    setTimeout(showPopUp, 3000);
});
function showPopUp(){
    jQuery('#simple-pop-up').removeClass('hidden');
}