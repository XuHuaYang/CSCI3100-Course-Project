
var AddButton = document.getElementById("addBox");
var DeleteButton = document.getElementById("deleteBox");
var SubmitButton = document.getElementById("submitBox");


AddButton.addEventListener("click",addTextBox);
function addTextBox() {
	var questionbox=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	var questionbox=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	var questionbox=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	var questionbox=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	var questionbox=document.createElement("input");
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	
	var question=document.createTextNode("Question");
	document.getElementById("newquestiontitlearea").appendChild(question);
	var blank=document.createElement("p");
	document.getElementById("newquestiontitlearea").appendChild(blank);
	var ChoiceA=document.createTextNode("Choice A");
	document.getElementById("newquestiontitlearea").appendChild(ChoiceA);
	var blank=document.createElement("p");
	document.getElementById("newquestiontitlearea").appendChild(blank);
	var ChoiceB=document.createTextNode("Choice B");
	document.getElementById("newquestiontitlearea").appendChild(ChoiceB);
	var blank=document.createElement("p");
	document.getElementById("newquestiontitlearea").appendChild(blank);
	var ChoiceC=document.createTextNode("Choice C");
	document.getElementById("newquestiontitlearea").appendChild(ChoiceC);
	var blank=document.createElement("p");
	document.getElementById("newquestiontitlearea").appendChild(blank);
	var ChoiceD=document.createTextNode("Choice D");
	document.getElementById("newquestiontitlearea").appendChild(ChoiceD);
	var blank=document.createElement("p");
	document.getElementById("newquestiontitlearea").appendChild(blank);

}

DeleteButton.addEventListener("click",deleteTextBox);
function deleteTextBox(){
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	var boxlist=document.getElementById("newquestionarea");
	n=boxlist.length;
	boxlist.removeChild(boxlist.childNodes[0]);
	
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);
	var titlelist=document.getElementById("newquestiontitlearea");
	n=titlelist.length;
	titlelist.removeChild(titlelist.childNodes[0]);

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

