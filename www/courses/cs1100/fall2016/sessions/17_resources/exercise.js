function getCell() {
    var column = prompt("what column do you want to select?");
    if (column < 0 || column > 4) {
        alert("invalid selection");
    }
    else {
        var selector = "td:nth-child(" + column + ")";
        var cell = document.querySelector(selector);
        return cell;
    }
}

var cell1 = getCell();
cell1.style.backgroundColor = "blue";

var cell2 = getCell();
cell2.style.backgroundColor = "red";
