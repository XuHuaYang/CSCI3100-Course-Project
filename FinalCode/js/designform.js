
var AddButton = document.getElementById("addBox");
var DeleteButton = document.getElementById("deleteBox");
var SubmitButton = document.getElementById("submitBox");
var count=1;



AddButton.addEventListener("click",addTextBox);
function addTextBox() {
	
	var questionbox=document.createElement("input");
	var attclass=document.createAttribute("class");
	attclass.value="inputbox";
	questionbox.setAttributeNode(attclass);
	var attName=document.createAttribute("name");
	attName.value="question[]";
	questionbox.setAttributeNode(attName);
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	var questionbox=document.createElement("input");
	var attclass=document.createAttribute("class");
	attclass.value="inputbox";
	questionbox.setAttributeNode(attclass);
	var attName=document.createAttribute("name");
	attName.value="choiceA[]";
	questionbox.setAttributeNode(attName);
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	var questionbox=document.createElement("input");
	var attclass=document.createAttribute("class");
	attclass.value="inputbox";
	questionbox.setAttributeNode(attclass);
	var attName=document.createAttribute("name");
	attName.value="choiceB[]";
	questionbox.setAttributeNode(attName);
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	var questionbox=document.createElement("input");
	var attclass=document.createAttribute("class");
	attclass.value="inputbox";
	questionbox.setAttributeNode(attclass);
	var attName=document.createAttribute("name");
	attName.value="choiceC[]";
	questionbox.setAttributeNode(attName);
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	var questionbox=document.createElement("input");
	var attclass=document.createAttribute("class");
	attclass.value="inputbox";
	questionbox.setAttributeNode(attclass);
	var attName=document.createAttribute("name");
	attName.value="choiceD[]";
	questionbox.setAttributeNode(attName);
	document.getElementById("newquestionarea").appendChild(questionbox);
	var blank=document.createElement("p");
	document.getElementById("newquestionarea").appendChild(blank);
	
	count++;
	var question=document.createElement("H5");
	question.innerHTML="Question "+count+":";
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

