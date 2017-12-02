//get value of add symptom text field

document.getElementById('addSymptomButton').addEventListener("click", function () {
    var symptomText = document.getElementById('symptomText');
    /*if (symptomText.value === '') {
        alert("Please enter the symptom!");
    }
    else {
        document.getElementById('myList').innerHTML += symptomText.value + "<br/>";
    //}*/
  
    
});

//submit
/*
document.getElementById("yesSubmitSymptomsButton").addEventListener("click", function () {
    alert("Do you want to submit it?");
});
*/

/*
//create new checkbox upon adding
function addCheckBox(name){
    var checkbox = document.createElement('input'); 
    checkbox.type= 'checkbox';
    checkbox.name = name;
    //checkbox.id = id;
    //checkbox.value = value;
    return checkbox;
}

*/

document.getElementById("addSymptomButton").addEventListener("click", function () {
    console.log("YYOOOWW");
    var checkbox = document.createElement('input');
    //checkbox.setAttribute('type', 'checkbox');
    checkbox.type= 'checkbox';
    checkbox.name = "mailId";
    checkbox.addEventListener('change', onChangee);
    //return checkbox;
    var textnode = document.getElementById('symptomText').value;
    checkbox.value = textnode;
    console.log("text is " + textnode);
    var labell = document.createElement('label');
    //checkbox.innerHTML = textnode;
    labell.appendChild(checkbox); //checkbox.appendChild(textnode);
    labell.appendChild(document.createTextNode(textnode));
    
    document.getElementById("check_symptoms").appendChild(labell);
    document.getElementById("check_symptoms").appendChild(document.createElement("br"));
    document.getElementById('symptomText').value = "";
});

//clear text field
function ClearFields() {
    document.getElementById("symptomText").value = "";
}

/*
//get checked value for display
function checkedSymptoms() {
    var checkSymptom = document.forms[0];
    var txt = "";
    var alreadyClicked = [];
    var i;
    
    
    for (i = 0; i < checkSymptom.length; i++) {
        if (checkSymptom[i].checked && alreadyClicked[i] == false) {
            txt = checkSymptom[i].value;
            document.getElementById('pText').innerHTML += txt;
            console.log(txt);
        }
    }
    */
    
    /*
    for (i = 0; i < checkSymptom.length; i++) {
        if (checkSymptom[i].checked) {
            txt = checkSymptom[i].value;
            document.getElementById('pText').innerHTML += txt;
            console.log(txt);
        }
    }
    
}*/


//get checked value (all)

function checkedSymptoms() {
    var checkSymptom = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < checkSymptom.length; i++) {
        if (checkSymptom[i].checked) {
            txt = checkSymptom[i].value + " ";
            document.getElementById('pText').innerHTML += "<br/>" + txt;
            console.log(txt);
        }
    }
}

var mailMap = {};
var mailId = document.querySelectorAll("input[name=mailId]");
mailId.forEach(function (mail){
    
    mail.addEventListener('change', onChangee);
});

function onChangee(){
     var symptoms_list = document.getElementById("symptoms_list");
        if(this.checked){
            var li_symptom = document.createElement("li");
            li_symptom.id = this.value;
            li_symptom.innerHTML = this.value;
            symptoms_list.appendChild(li_symptom);
            //document.getElementById('pText').innerHTML += "<br/>" + txt;
        }
        else{
            var li_symptom = document.getElementById(this.value);
            symptoms_list.removeChild(li_symptom);
        }
}