
//get value of add symptom text field
document.getElementById("addSymptomButton").addEventListener("click", function () {
    //console.log("YYOOOWW");
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
   
   //clear text field 
    document.getElementById('symptomText').value = "";
});

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



