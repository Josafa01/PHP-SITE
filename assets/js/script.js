class Scribbler {
    
   	Writer(e) {
        const textArray = e.innerHTML.split('');
        e.innerHTML = '';
        textArray.forEach((letter, i) => {
            setTimeout(function() {
              e.innerHTML += letter;  
            }, 67 * i);
        });
    };

}

const scribbler = new Scribbler();
const phrase = document.querySelector('.phrase');
scribbler.Writer(phrase);
setInterval(function(){ scribbler.Writer(phrase); }, 10000);



$(document).scroll(function() {

	if ($(this).scrollTop() > 20) {
	    $(".prod_item").animate({
	    	"margin-top": "2%",
		    opacity: 1
		}, {
		    duration: 1000,
		});
	} 
	
});     
