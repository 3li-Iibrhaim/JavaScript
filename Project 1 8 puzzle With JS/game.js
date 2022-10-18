var nodes = document.getElementsByClassName('num');

function randomNumber() {
    const number = [1, 2, 3, 4, 5, 6, 7, 8];
    var ranNums = shuffle(number);

    // random array without deplucate element
    for (var i = 0; i < nodes.length - 1; i++) {
        nodes[i].innerHTML = ranNums[i];
    }

}

function shuffle(array) {
    var i = array.length,
        j = 0,
        temp;

    while (i--) {
        j = Math.floor(Math.random() * (i + 1));
        // swap randomly chosen element with current element
        temp = array[i];
        array[i] = array[j];
        array[j] = temp;  // can see [0, 1, 2, 3, 4, 5, 6, 7]
    }

    return array;
}

function move(num) {
    cur = document.getElementById('cursor');
    number = document.getElementById(num);

    //previce and current index for currsor
    var previndex = Array.from(number.parentElement.children).indexOf(number);
    var currIndex = Array.from(cur.parentElement.children).indexOf(cur);

    var indexDeffrence = previndex - currIndex; //check deffrence between previce and current index

    //in this statment i use alogrithm 'that I made' and check if i can move box on 8 puzzle or note `8 puzzle rule`
    var canMovePosition = indexDeffrence == 1 || indexDeffrence == -1 || indexDeffrence == 3 || indexDeffrence == -3;
    //this statment is support for above statment that check `puzzle rule`
    var supportCheck = (previndex == 2 && currIndex == 3) || (previndex == 3 && currIndex == 2) || (previndex == 6 && currIndex == 5) || (previndex == 5 && currIndex == 6);

    if (canMovePosition && supportCheck == false) {
        new Audio('move.wav').play();
        swapBox(number, cur);
        checkGameWin();
        moveNumber();
    }

}

// this function swap element in html tree node
function swapBox(element1, element2) {
    // The cloneNode() method creates a copy of a node, and returns the clone.
    var clonedElement1 = element1.cloneNode(true);
    var clonedElement2 = element2.cloneNode(true);

    // replace element from parent and then swap
    // The parentNode property returns the parent node of an element or node.
    // replaceChild() method of the Node element replaces a child node within the given (parent) node.
    element2.parentNode.replaceChild(clonedElement1, element2);
    element1.parentNode.replaceChild(clonedElement2, element1);
}

function checkGameWin() {
    var winNumber = ['1', '2', '3', '4', '5', '6', '7', '8', ''];
    var correntNumber = [];

    for (var i = 0; i < nodes.length; i++) {
        correntNumber.push(nodes[i].innerHTML);
    }

    var isWin = arrayEquals(correntNumber, winNumber);  //return true if the list equal

    if (isWin) {
        winAction();
    }
}

function arrayEquals(a, b) {
    return Array.isArray(a) &&
        Array.isArray(b) &&
        a.length === b.length &&
        a.every((val, index) => val === b[index]);
}

function winAction() {
    new Audio('win.mp3').play();
    randomNumber();
    winCounter();
}

var count = 0;
function moveNumber() {
    count += 1;
    var counter = document.getElementById('counter');
    counter.innerHTML = 'move:' + count;

}

var winCount = 0;
function winCounter() {
    count = -1;
    var win = document.getElementById('wincount');
    winCount += 1;
    win.innerHTML = 'win:' + winCount;
}