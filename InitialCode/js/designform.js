document.getElementById("textTitle").innerHTML="Enter you form title here";
var AddButton = document.getElementById("addBox");
var DeleteButton = document.getElementById("deleteBox");
var SubmitButton = document.getElementById("submitBox");

var ourHeadline = document.getElementById("our-headline");
var listItems = document.getElementById("our-list").getElementsByTagName("li");

for(i=0;i<listItems.length;i++){
	listItems[i].addEventListener("click",activateItem);
}

function activateItem(){
	ourHeadline.innerHTML=this.innerHTML;
}

AddButton.addEventListener("click",addTextBox);
function addTextBox() {
	var textBox=document.createElement("textarea");
	document.getElementById("text").appendChild(textBox);
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
