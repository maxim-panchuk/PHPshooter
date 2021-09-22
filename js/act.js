const resetBtn = document.getElementById("reset")
const sendBtn = document.getElementById("send")



function resetForm () {

    const radioButtons = document.getElementsByClassName("radio").length
    const checkBoxes = document.getElementsByClassName("check-box").length

    for (let i = 1; i <= radioButtons; i++) {
        if (document.getElementById("rad" + i).checked === true) {
            document.getElementById("rad" + i).checked = false
        }
    }

    document.getElementById("inputY").value = ""

    for (let i = 1; i <= checkBoxes; i++) {
        if (document.getElementById("inlineCheckbox" + i).checked === true) {
            document.getElementById("inlineCheckbox" + i).checked = false
        }
    }
}

function validation () {
    var isXselected = false;
    var isYvalid = false;
    var isRselected = false;

    const radioLength = 9;
    const checkBoxLength = 5;

    for (let i = 1; i <= radioLength; i++) {
        if (document.getElementById("rad" + i).checked === true) {
            isXselected = true;
        }
    }

    const yVal = document.getElementById("inputY").value;
    if (isNumeric(yVal)) {
        const num = parseFloat(yVal)
        if (num > -5 && num < 3) {
            isYvalid = true;
        }
    }

    for (let i = 1; i <= checkBoxLength; i++) {
        if (document.getElementById("inlineCheckbox" + i).checked === true) {
            isRselected = true;
        }
    }

    if (isXselected && isYvalid && isRselected) {

    } else {
        alert ("Некорректный ввод")
        resetForm()
    }
}

function isNumeric(str) {
    if (typeof str != "string") return false
    return !isNaN(str) &&
        !isNaN(parseFloat(str))
}

sendBtn.onclick = validation
resetBtn.onclick = resetForm
