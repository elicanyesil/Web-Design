var slider=document.getElementById("myRange");
var output=document.getElementById("value");

output.innerHTML= slider.value;

slider.oninput= function() {
	output.innerHTML= this.value;

}
slider.addEventListener("mousemove" ,function() {
	var x = slider.value;
	var color = 'linear-gradient(90deg, rgb(0,178,240)' + x + '% ,rgb(214,214,214)' + x + '% )';
	
	slider.style.background=color;
	

})

//range2
var slider2=document.getElementById("myRange2");
var output2=document.getElementById("value2");

output2.innerHTML= slider2.value;

slider2.oninput= function() {
	output2.innerHTML= this.value;

}
slider2.addEventListener("mousemove" ,function() {
	var x = slider2.value;
	var color = 'linear-gradient(90deg, rgb(0,178,240)' + x + '% ,rgb(214,214,214)' + x + '% )';
	
	slider2.style.background=color;
	
})

//range3
var slider3=document.getElementById("myRange3");
var output3=document.getElementById("value3");

output3.innerHTML= slider3.value;

slider3.oninput= function() {
	output3.innerHTML= this.value;

}
slider3.addEventListener("mousemove" ,function() {
	var x = slider3.value;
	var color = 'linear-gradient(90deg, rgb(0,178,240)' + x + '% ,rgb(214,214,214)' + x + '% )';
	
	slider3.style.background=color;
	
})

//range4
var slider4=document.getElementById("myRange4");
var output4=document.getElementById("value4");

output4.innerHTML= slider4.value;

slider4.oninput= function() {
	output4.innerHTML= this.value;

}
slider4.addEventListener("mousemove" ,function() {
	var x = slider4.value;
	var color = 'linear-gradient(90deg, rgb(0,178,240)' + x + '% ,rgb(214,214,214)' + x + '% )';
	
	slider4.style.background=color;
	
})