let board = ["","","","","","","","",""];
let player = "X";
let gameOver = false;

function play(cell,index)
{
    if(board[index] != "" || gameOver)
    {
        return;
    }

    board[index] = player;
    cell.innerHTML = player;

    checkWinner();

    if(!gameOver)
    {
        if(player == "X")
        {
            player = "O";
        }
        else
        {
            player = "X";
        }

        document.getElementById("status").innerHTML = "Player " + player + " Turn";
    }
}

function checkWinner()
{
    if(board[0]==player && board[1]==player && board[2]==player)
    win();

    else if(board[3]==player && board[4]==player && board[5]==player)
    win();

    else if(board[6]==player && board[7]==player && board[8]==player)
    win();

    else if(board[0]==player && board[3]==player && board[6]==player)
    win();

    else if(board[1]==player && board[4]==player && board[7]==player)
    win();

    else if(board[2]==player && board[5]==player && board[8]==player)
    win();

    else if(board[0]==player && board[4]==player && board[8]==player)
    win();

    else if(board[2]==player && board[4]==player && board[6]==player)
    win();
}

function win()
{
    document.getElementById("status").innerHTML = "Player " + player + " Wins!";
    gameOver = true;
}

function resetGame()
{
    board = ["","","","","","","","",""];
    player = "X";
    gameOver = false;

    let cells = document.getElementsByClassName("cell");

    for(let i=0;i<cells.length;i++)
    {
        cells[i].innerHTML = "";
    }

    document.getElementById("status").innerHTML = "Player X Turn";
}