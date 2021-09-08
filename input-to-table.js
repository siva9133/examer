var addi=0;
function add()
{
    var question=document.getElementById('question').value;
    var option1=document.getElementById('option-1').value;
    var option2=document.getElementById('option-2').value;
    var option3=document.getElementById('option-3').value;
    var option4=document.getElementById('option-4').value;
    var correctanswer=document.getElementById('correct-answer').value;

    if(question==""||question==null,option1==""||option1==null,option2==""||option2==null,option3==""||option3==null,option4==""||option4==null,correctanswer==null||correctanswer=="")
    alert("Please Fill all the required fields");
    else
    {
        let newrow=table.insertRow(1);
        newrow.id="tr_"+addi;
        addi++;

        let cel1=newrow.insertCell(0);
        let cel2=newrow.insertCell(1);
        let cel3=newrow.insertCell(2);
        let cel4=newrow.insertCell(3);
        let cel5=newrow.insertCell(4);
        let cel6=newrow.insertCell(5);

        cel1.innerHTML=question;
        cel2.innerHTML=option1;
        cel3.innerHTML=option2;
        cel4.innerHTML=option3;
        cel5.innerHTML=option4;
        cel6.innerHTML=correctanswer;
    }
}

function remove()
{
    let rowsize=table.rows.length;
    if (rowsize>1) {
        document.getElementsByTagName('tr')[1].remove();
    }
}