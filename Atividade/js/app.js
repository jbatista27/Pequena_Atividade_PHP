var label = document.getElementsByTagName("label");
var labelValue = label[0].innerHTML;
var input = document.getElementsByTagName("input");
input[0].onchange = function(e){
	var fileName = e.target.value.split("\\").pop();
	if(fileName){
		label[0].innerHTML = "<strong>"+fileName+"</strong>";
	}else{
		label[0].innerHTML = labelValue;
	}
}
