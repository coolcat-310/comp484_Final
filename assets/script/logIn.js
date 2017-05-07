/**
 * Created by juancarlosnavarrete on 4/21/17.
 */




$( document ).click(function() {
    /***
     * The event listener is called when the webpage is click on by the user.
     * Classes with the name "toggle" will disappear and reappear after every click.
     */
    $( ".toggle" ).toggle( "highlight" );

});

$(".num").hover(
    /***
     * This event listener is called when the user hovers over an element with the class 'num',
     * which will append '***' the the given element.
     */
    function () {
        $(this).append($("<span> ***</span>"));
    }, function () {
        $(this).find("span:last").remove();
    }
);
