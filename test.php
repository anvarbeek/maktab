<!doctype html>
<html lang="en">
<!-- divinectorweb.com -->

<head>
    <meta charset="UTF-8">
    <title>Login Form in HTML & CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body style="background-color: #008AB8;">
    <div class="conteiner">

<div class="wrapper">
    <div class="wrap" id="q1">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"><span id="number"> </span>1 of 3 </div>
        </div>
        <div class="h4 font-weight-bold"> 1. Who is the Prime Minister of India?</div>
        <div class="pt-4">
            <form> <label class="options">Rahul Gandhi <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Indira Gandhi <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Narendra Modi <input type="radio" name="radio" id="rd" checked> <span class="checkmark"></span> </label> <label class="options">Ram Nath Kovind <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary" id="next1">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q2">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>2 of 3 </div>
        </div>
        <div class="h4 font-weight-bold"> 2. IPV4 stand's for?</div>
        <div class="pt-4">
            <form> <label class="options">Internet Protocol <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Intranet Protocol <input type="radio" name="radio" checked> <span class="checkmark"></span> </label> <label class="options">internet Protocol <input type="radio" name="radio" id="rd"> <span class="checkmark"></span> </label> <label class="options">None of the above <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back1"> <span class="fas fa-arrow-left pr-1"></span>Previous </button> <button class="btn btn-primary" id="next2">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q3">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>3 of 3 </div>
        </div>
        <div class="h4 font-weight-bold"> 3. What is the full form of CSS?</div>
        <div class="pt-4">
            <form> <label class="options">Clarity Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Cascading Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Confirm Style sheets <input type="radio" name="radio" id="rd" checked> <span class="checkmark"></span> </label> <label class="options">Canvas Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back2"> <span class="fas fa-arrow-left pr-2"></span>Previous </button> <button class="btn btn-primary" id="next3">Submit </button> </div>
    </div>
</div>
<div class="d-flex flex-column align-items-center">
    <div class="h3 font-weight-bold text-white">Go Dark</div> <label class="switch"> <input type="checkbox"> <span class="slider round"></span> </label>
</div>


<script>
    var q1 = document.getElementById("q1");
var q2 = document.getElementById("q2");
var q3 = document.getElementById("q3");

var next1 = document.getElementById('next1')
var back1 = document.getElementById('back1')
var next2 = document.getElementById('next2')
var back2 = document.getElementById('back2')
document.addEventListener('DOMContentLoaded', function () {
let query = window.matchMedia("(max-width: 767px)");
if (query.matches) {
next1.onclick = function () {
q1.style.left = "-650px";
q2.style.left = "15px";
}
back1.onclick = function () {
q1.style.left = "15px";
q2.style.left = "650px";
}
back2.onclick = function () {
q2.style.left = "15px";
q3.style.left = "650px";
}
next2.onclick = function () {
q2.style.left = "-650px";
q3.style.left = "15px";
}
}
else {
next1.onclick = function () {
q1.style.left = "-650px";
q2.style.left = "50px";
}
back1.onclick = function () {
q1.style.left = "50px";
q2.style.left = "650px";
}
back2.onclick = function () {
q2.style.left = "50px";
q3.style.left = "650px";
}
next2.onclick = function () {
q2.style.left = "-650px";
q3.style.left = "50px";
}
}
});


function uncheck() {
var rad = document.getElementById('rd')
rad.removeAttribute('checked')
}
document.addEventListener('DOMContentLoaded', function () {
const main = document.querySelector('body')
const toggleSwitch = document.querySelector('.slider')

toggleSwitch.addEventListener('click', () => {
main.classList.toggle('dark-theme')
})
})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>