let firstNumber = "";
let operator = "";
let secondNumber = "";

function press(value)
{
    let screen = document.getElementById("screen");

 
    if(value == "+" || value == "-" || value == "*" || value == "/")
    {
        firstNumber = screen.value;
        operator = value;
        screen.value = "";
    }
    else
    {
       
        screen.value = screen.value + value;
    }
}

function calculate()
{
    let screen = document.getElementById("screen");
    secondNumber = screen.value;

    let result = 0;

    if(operator == "+")
    {
        result = Number(firstNumber) + Number(secondNumber);
    }
    else if(operator == "-")
    {
        result = Number(firstNumber) - Number(secondNumber);
    }
    else if(operator == "*")
    {
        result = Number(firstNumber) * Number(secondNumber);
    }
    else if(operator == "/")
    {
        result = Number(firstNumber) / Number(secondNumber);
    }

    screen.value = result;
}

function clearScreen()
{
    let screen = document.getElementById("screen");

    screen.value = "";
    firstNumber = "";
    secondNumber = "";
    operator = "";
}

function deleteOne()
{
    let screen = document.getElementById("screen");
    let text = screen.value;

    screen.value = text.substring(0, text.length - 1);
}