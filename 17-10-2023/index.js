// DOM

//access html elements using JS
// by ID
let firstHeading = 
		document.getElementById('firstHeading');
console.log(firstHeading);

// by class
let paragraphs = 
	document.getElementsByClassName('paragraphs');
console.log(paragraphs[1]);
// innerHTML property
paragraphs[1].innerHTML = "Updated second paragraph";
//by tag name
let headings = 
	document.getElementsByTagName('h1');
console.log(headings[1])

//value property
let num1 = document.getElementById('num1');
let num2 = document.getElementById('num2');
//num1.value;

//change attribute of html elements
/*let cat = document.getElementById('cat');
cat.src = "cat.png";

//add style to elements
cat.style.borderTop = "2px solid black"; */

// events
function findProduct(){
	//console.log(num1.value * num2.value);
	//alert(num1.value * num2.value);
	document.getElementById('result').innerHTML = 
					num1.value * num2.value;

	return false;
}






