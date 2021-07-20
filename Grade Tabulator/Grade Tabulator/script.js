


var rowCounter = 1;
var re = /^-?[0-9]+$/; //regular expression only allows numbers to go through
var reg = /^[a-zA-Z]*$/;//regular expression only allows alphabets to go through
var total = 0;
var maxValue = 0;
var minValue = 100;

do {

    var studentname = prompt("Enter student's name", "");
    while (reg.test(studentname) == false) {
        studentname = prompt("Please enter a valid student's name", "");

    }
    while (studentname == "") {


        studentname = prompt("Please enter a student's name", "")
    }

    var studentattendance = prompt("Enter " + studentname + "'s attendance mark");

    while (studentattendance > 100|| studentattendance < 0 || re.test(studentattendance) == false) {

        studentattendance = prompt("Please enter " + studentname + "'s attendance mark (0 - 100)");
        
    }
    


    var studenthomework = prompt("Enter " + studentname + " 's homework mark");

    while (studenthomework > 100 || studenthomework < 0 || re.test(studenthomework) == false) {
        studenthomework = prompt("Please enter " + studentname + " 's homework mark(0 - 100)");
    }

    var studentmidterm = prompt("Enter " + studentname + "'s midterm test mark");

    while (studentmidterm > 100 || studentmidterm < 0 || re.test(studentmidterm) == false) {
        studentmidterm = prompt("Please enter " + studentname + "'s midterm test mark(0 - 100)");
    }

    var studentfinalexam = prompt("Enter " + studentname + "'s final exam mark");

    while (studentfinalexam > 100 || studentfinalexam < 0 || re.test(studentfinalexam) == false) {

        studentfinalexam = prompt("Please enter " + studentname + "'s final exam mark(0 - 100)");

    }

    var finalGrade = parseInt((studentmidterm * 0.3) + (studentfinalexam * 0.4) + (studenthomework * 0.2) + (studentattendance * 0.1));





        var newRow = myTable.insertRow(rowCounter);
        

 


        var studentnameCell = newRow.insertCell(0);
        studentnameCell.innerHTML = studentname;

        var studentattendanceCell = newRow.insertCell(1);
        studentattendanceCell.innerHTML = studentattendance;

        var studenthomeworkCell = newRow.insertCell(2);
        studenthomeworkCell.innerHTML = studenthomework;

        var studentmidtermCell = newRow.insertCell(3);
        studentmidtermCell.innerHTML = studentmidterm;

        var studentfinalexamCell = newRow.insertCell(4);
        studentfinalexamCell.innerHTML = studentfinalexam;

        var finalGradeCell = newRow.insertCell(5);
        finalGradeCell.innerHTML = finalGrade;


    if (finalGrade >= 80) {
        var finalGradeLetterCell= newRow.insertCell(6);
        finalGradeLetterCell.innerHTML = "A";
    } else if (finalGrade >= 70) {
        var finalGradeLetterCell = newRow.insertCell(6);
        finalGradeLetterCell.innerHTML = "B";
    } else if (finalGrade >= 60) {
        var finalGradeLetterCell = newRow.insertCell(6);
        finalGradeLetterCell.innerHTML = "C";
    } else if (finalGrade >= 50) {
        var finalGradeLetterCell = newRow.insertCell(6);
        finalGradeLetterCell.innerHTML = "D";
    } else {
        var finalGradeLetterCell = newRow.insertCell(6);
        finalGradeLetterCell.innerHTML ='<font style=color:"red">' + 'F' + '</font>';
    }

        

        rowCounter = rowCounter + 1;




        

    
        total += finalGrade;


        if (finalGrade > maxValue) {
            maxValue = finalGrade;
        }

        if (finalGrade < minValue) {

            minValue = finalGrade;
        }
    

        var count = confirm("Continue?", "")

    }

while (count == true);


function myFunction() {
   alert("The average final grade is " + total / (rowCounter-1));
}

function highest() {
    alert("The highest final grade is "+ maxValue);
}

function lowest() {


    alert("The lowest final grade is " +minValue);
}

