function findMinMax() {
    let a = [2, 19, 37, 48, 45, 94, 12, 23, 78];

    let smallest = a[0];
    let largest = a[0];

    let i = 1; // start from second element

    while (i < a.length) {
        if (a[i] < smallest) {
            smallest = a[i];
        }

        if (a[i] > largest) {
            largest = a[i];
        }

        i++;
    }

    document.getElementById("result").innerHTML =
        "Array: " + a + "<br>" +
        "Smallest number: " + smallest + "<br>" +
        "Largest number: " + largest;
}