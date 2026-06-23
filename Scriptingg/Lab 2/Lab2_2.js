function findMinMax() {
    let a = [2, 19, 37, 48, 45, 94, 12, 23, 78];

    let smallest = a[0];
    let largest = a[0];

    // Loop through array
    for (let i = 1; i < a.length; i++) {
        if (a[i] < smallest) {
            smallest = a[i];
        }

        if (a[i] > largest) {
            largest = a[i];
        }
    }

    document.getElementById("result").innerHTML =
        "Array: " + a + "<br>" +
        "Smallest number: " + smallest + "<br>" +
        "Largest number: " + largest;
}