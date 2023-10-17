console.log('external JS');

// declaring variables
// let, var and const

var firstName = "janet";
var firstName = "Lisa"; // does not give any error

let secondName = "Jane", thirdName = "Joy";
//let secondName = "Mary"; // gives an error

let age = 12; //number
age = 11;
age = "12";

let height = 11.1; //number
let school = null;
var registered = true; //boolean

console.log(typeof firstName);

const studentAges = [12,13,15,17,20]; //array
console.log("Age of second student is", studentAges[1]);

//object
let studentDetails = {firstName: "Jane", 
			age: 12, 
			height: 11.1,
			registered: true,

			printDetails: function(){
console.log("My name is", this.firstName, "I am", this.age);	
			}
				};

console.log(studentDetails.height);
studentDetails.printDetails();

// single line comment
/* multiple line
comment */

//functions
function myFunction(){
	let myName = "Clara"; //local scope
	console.log('This is my function');
}
myFunction();
//console.log(myName); gives an error

//function with parameters
function findProduct(number1,number2){
	return number1 * number2;
}

let ourProduct = findProduct(7,10);
console.log("Our product is", ourProduct);

// for loop
for (let i=0; i<6; i++){
	console.log("The number is", i);
}

// conditional statements
let votingAge = 18
if (votingAge < 18){
	console.log("Not qualified");
} else if (votingAge == 18){
	console.log("Perfect age");
} else{
	console.log("Experienced voter");
}

{
 let myAge = 15 //block scope
}

myAge;




