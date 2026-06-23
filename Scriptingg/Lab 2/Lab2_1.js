function generateTable() {
    let number = document.getElementById("num").value;

    if (number === "") {
        alert("Please enter a number.");
        return;
    }

    if (isNaN(number)) {
        alert("Please enter a valid numeric value.");
        return;
    }

    let result = "<h3>Multiplication Table of " + number + "</h3>";

    for (let i = 1; i <= 10; i++) {
        result += number + " × " + i + " = " + (number * i) + "<br>";
    }

    document.getElementById("output").innerHTML = result;
}