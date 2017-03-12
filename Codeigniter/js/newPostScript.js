var i = 2;
var j = 1;

function addIngredient() {
	var original = document.getElementById('ingredients-list-elem2');
	var clone = original.cloneNode(true);
	
	clone.id = 'ingredients-list-elem' + ++i;
	var cloneAttr = clone.getElementsByClassName("form-control");
	for (k = 0; k < 4; k++) { 
		console.log(cloneAttr[k]);
    		cloneAttr[k].value= "";
	}
	original.parentNode.appendChild(clone);
}

function addStep() {
	var original = document.getElementById('step-list-elem');
	var clone = original.cloneNode(true);
	clone.id = 'step-list-elem' + ++j;
	
	
	original.parentNode.appendChild(clone);
	var targetLabel = document.getElementById('step-list-elem' + j).getElementsByClassName("steplabel")[0];
	targetLabel.innerHTML = "Step" + j;
}