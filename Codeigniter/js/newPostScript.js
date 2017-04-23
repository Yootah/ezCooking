var i = 1;
var j = 1;

function addIngredient() {
	var original = document.getElementById('ingredients-list-elem1').parentNode;
	var clone = original.cloneNode(true);
	
	clone.children[0].id = 'ingredients-list-elem' + (++i);
	var cloneAttr = clone.children[0].getElementsByClassName("form-control");
	for (k = 0; k < 4; k++) { 
		console.log(cloneAttr[k]);
		cloneAttr[k].name= cloneAttr[k].id + i;
        cloneAttr[k].value= "";
	}
	clone.children[0].children[0].innerHTML=i;
	original.parentNode.appendChild(clone);
}

function addStep() {
	var original = document.getElementById('step-list-elem');
	var clone = original.cloneNode(true);
	clone.id = 'step-list-elem' + (++j);
	
	
	original.parentNode.appendChild(clone);
	document.getElementById('step-list-elem' + j).getElementsByClassName("form-control")[0].name = "step"+j;
	document.getElementById('step-list-elem' + j).getElementsByClassName("form-control")[0].value = "";
	var targetLabel = document.getElementById('step-list-elem' + j).getElementsByClassName("steplabel")[0];
	targetLabel.innerHTML = "Step" + j;
}