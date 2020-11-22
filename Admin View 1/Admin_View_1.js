

function takeaction(id,tr,i){
    if (window.confirm("Do you want to mark this record ? ")) {
        var element = document.getElementById(tr);
        element.classList.remove("table-danger");
        element.classList.add("table-success");
        var element = document.getElementById(id);
        element.remove(id);
        var element = document.getElementById(i);
        element.classList.add("fa-check");
    } else {
        return 0;
    }
}