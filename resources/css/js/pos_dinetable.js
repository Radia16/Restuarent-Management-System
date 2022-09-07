// *********** In dine button, add table js
var rIndex,
    table = document.getElementById("table1");

// add row
function addHTMLTableRow1() {
    var table = document.getElementById("table1"),
        newRow = table.insertRow(table.length),
        cell1 = newRow.insertCell(0),
        cell2 = newRow.insertCell(1),
        cell3 = newRow.insertCell(2),
        cell4 = newRow.insertCell(3),
        f1text = document.getElementById("f1text").value,
        f1add = document.getElementById("f1add").value;
    cell1.innerHTML = f1text;
    cell3.innerHTML = f1add;
    cell4.innerHTML = '<a onclick="removeSelectedRow()" href="#"><i class="fa fa-trash "></i></a>';
}
function addHTMLTableRow2() {
    var table = document.getElementById("table2"),
        newRow = table.insertRow(table.length),
        cell1 = newRow.insertCell(0),
        cell2 = newRow.insertCell(1),
        cell3 = newRow.insertCell(2),
        cell4 = newRow.insertCell(3),
        f2text = document.getElementById("f2text").value,
        f2add = document.getElementById("f2add").value;
    cell1.innerHTML = f2text;
    cell3.innerHTML = f2add;
    cell4.innerHTML = '<a href="#"><i class="fa fa-trash "></i></a>';
}
function addHTMLTableRow3() {
    var table = document.getElementById("table3"),
        newRow = table.insertRow(table.length),
        cell1 = newRow.insertCell(0),
        cell2 = newRow.insertCell(1),
        cell3 = newRow.insertCell(2),
        cell4 = newRow.insertCell(3),
        f3text = document.getElementById("f3text").value,
        f3add = document.getElementById("f3add").value;
    cell1.innerHTML = f3text;
    cell3.innerHTML = f3add;
    cell4.innerHTML = '<a href="#"><i class="fa fa-trash "></i></a>';
}
// function removeSelectedRow() {
//     table.deleteRow(rIndex);
//     document.getElementById("f1text").value = " ";
//     document.getElementById("f1add").value = " ";
// }


