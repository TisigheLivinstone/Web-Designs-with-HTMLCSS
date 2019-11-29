//  $("p").hide(400);
 //This function change the content of the page as it loads for every 2seconds
				 	function sampleFunction() {
						document.write("You clicked me!!");
						document.write("Page has been altered.")
					 }
					 window.onload = function() {
						setTimeout(sampleFunction, 2000);

					 };
					  var myEx = /documents|knowledge/;
                    var myEx = new RegExp("documents|knowledge");

           var myString = "The PHP Certificate documents your knowledge of PHP and SQL (MySQL)";
                if(myEx.test(myString)) {
                 alert ("Yes")
      }else {
         alert("Something went wrong")
  }
  var myFunc=function(arr1, arr2) {
	  return arr1.concat(arr2);
  }
  

  const myFunc =(arr1,arr2)=>arr1.concat(arr2);
console.log(myFunc([1,2],[3,4,5]));

const arrNumberList=[2,-4,-6,4,6,9,3,10,39];

const sqList =(arr)=> {
	const sqListInteger= arr(num=> Number.isInteger(num) && num>0).map(x=>x*x);
	return sqListInteger;
}
const sqListInteger=sqList(arrNumberList);
console.log(sqListInteger);
//The rest operator
const sum =(function(){
	return function sum(---args) {
		return args.reduce((a,b) => a+b, 0);
	};
})();
	console.log(sum(1,2,3,4,5));

	