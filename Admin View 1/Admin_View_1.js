

function takeaction(){
window.confirm("Do you want to mark this record ?");
var element = document.getElementById("tr4");
element.classList.remove("table-danger");
element.classList.add("table-success");
var element = document.getElementById("tr4_btn");
element.classList.remove("btn-warning");
element.classList.add("btn-success");
element.classList.add("disabled");
element.value="Taken";
}