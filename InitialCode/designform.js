
var AddButton = document.getElementById("addBox");
var DeleteButton = document.getElementById("deleteBox");
var SubmitButton = document.getElementById("submitBox");


AddButton.addEventListener("click",addTextBox);
function addTextBox() {
	var questionset=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionset);
}

DeleteButton.addEventListener("click",deleteTextBox);
function deleteTextBox(){
	var list=document.getElementById("text");
	list.removeChild(list.childNodes[0]);
}

SubmitButton.addEventListener("click",submitMsg);
function submitMst(){
    var data = new Array;
    data["header"] = "";
    for(var i = 0;i < listItems.length;i++){
        data[i] = "";
    }
    var myJSON = JSON.stringify(data);//将dictionary转换成JSON
    myJSON.send();
}

