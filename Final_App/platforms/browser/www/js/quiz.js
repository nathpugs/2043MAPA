<script type="text/javascript">function myFunction() {
    var x = document.getElementById("sliderOne");
    var currentVal = x.value;
    
        document.getElementById("demo").innerHTML = "Value: " + currentVal;
    
}

function myFunction2() {
    var s1 = $('#sliderOne').val();
    var s2 = $('#sliderTwo').val();
    var s3 = $('#sliderThree').val();
    var s4 = $('#sliderFour').val();
    var s5 = $('#sliderFive').val();
    
    var finalPoints = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);
    
    document.getElementById("demo").innerHTML = finalPoints;
}

function myFunction3() {
    var s1 = $('#sliderOne').val();
    var s2 = $('#sliderTwo').val();
    var s3 = $('#sliderThree').val();
    var s4 = $('#sliderFour').val();
    var s5 = $('#sliderFive').val();
    
    var f = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);
    
    if (f >= 0 && f <100) {
        document.getElementById("demo").innerHTML = "Lowest score";
    } else if (f >= 100 && f <200) {
        document.getElementById("demo").innerHTML = "Low score";
    } else if (f >= 200 && f <300) {
        document.getElementById("demo").innerHTML = "Medium score";
    } else if (f >= 300 && f <400) {
        document.getElementById("demo").innerHTML = "High score";
    } else if (f >= 400) {
        document.getElementById("demo").innerHTML = "Highest score";
    }  
   
}
function displayComment() {
    var s1 = $('#sliderOne').val();
    var s2 = $('#sliderTwo').val();
    var s3 = $('#sliderThree').val();
    var s4 = $('#sliderFour').val();
    var s5 = $('#sliderFive').val();
    
    var f = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);
    
    if (f >= 0 && f <100) {
        document.getElementById("demo").innerHTML = "Lowest score";
    } else if (f >= 100 && f <200) {
        document.getElementById("demo").innerHTML = "Low score";
    } else if (f >= 200 && f <300) {
        document.getElementById("demo").innerHTML = "Medium score";
    } else if (f >= 300 && f <400) {
        document.getElementById("demo").innerHTML = "High score";
    } else if (f >= 400) {
        document.getElementById("demo").innerHTML = "Highest score";
    }  
   
}

$$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});

//Hide Q1, show Q2
$$('#q1q2').on('click', function() {
    $$('#questionOne').css('display', 'none');
    $$('#questionTwo').css('display', 'block');    
}


//Hide Q2, show Q1
$$('#q2q1').on('click', function() {
    $$('#questionOne').css('display', 'none');
    $$('#questionTwo').css('display', 'block');    
}
              
              )

//Hide Q1, show Q2
$(document).ready(function(){
    $("#q1q2").click(function(){
        $("#questionOne").css("display", "none");
        $("#questionTwo").css("display", "block");
    });
});

//Hide Q2, show Q1
$(document).ready(function(){
    $("#q2q1").click(function(){
        $("#questionTwo").css("display", "none");
        $("#questionOne").css("display", "block");
    });
});

//Hide Q2, show Q3
$(document).ready(function(){
    $("#q2q3").click(function(){
        $("#questionTwo").css("display", "none");
        $("#questionThree").css("display", "block");
    });
});

//Hide Q3, show Q2
$(document).ready(function(){
    $("#q3q2").click(function(){
        $("#questionThree").css("display", "none");
        $("#questionTwo").css("display", "block");
    });
});

//Hide Q3, show Q4
$(document).ready(function(){
    $("#q3q4").click(function(){
        $("#questionThree").css("display", "none");
        $("#questionFour").css("display", "block");
    });
});

//Hide Q4, show Q3
$(document).ready(function(){
    $("#q4q3").click(function(){
        $("#questionFour").css("display", "none");
        $("#questionThree").css("display", "block");
    });
});

//Hide Q4, show Q5
$(document).ready(function(){
    $("#q4q5").click(function(){
        $("#questionFour").css("display", "none");
        $("#questionFive").css("display", "block");
    });
});

//Hide Q5, show Q4
$(document).ready(function(){
    $("#q5q4").click(function(){
        $("#questionFive").css("display", "none");
        $("#questionFour").css("display", "block");
    });
});

//Hide Q5, show result
$(document).ready(function(){
    $("#q5result").click(function(){
        $("#questionFive").css("display", "none");
        $("#result").css("display", "block");
    });
});</script>