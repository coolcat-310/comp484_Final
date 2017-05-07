
function fib(num) {
    if (num == 0)
        return num;
    else if (num == 1)
        return num;
    else
        return fib(num - 1) + fib(num - 2);
}

function exp(num) {
    if (num == 0)
        return 1;
    else
        return 2 * exp(num -1);
}

$("#exp_button").click(function () {
    var num = $("#exp").val();
    if(isNaN(num)) {
        document.getElementById('exp_result').innerHTML = "";
        alert("Please enter a valid number");
    } else {
        var result = exp(num);
        document.getElementById('exp_result').innerHTML = "<p>The result is: " + result + "</p>";
    }
});

$("#fib_button").click(function () {
    var num = $("#fib").val();
   if(isNaN(num)) {
       document.getElementById('fib_result').innerHTML = "";
       alert("Please enter a valid number");
    } else {
       var result = fib(num);
       document.getElementById('fib_result').innerHTML = "<p>The result is: " + result + "</p>";
   }
});

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
