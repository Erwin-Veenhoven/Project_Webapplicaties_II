function resizeSquares() {
    let squares = document.getElementsByClassName('square');
    for (let i = 0; i < squares.length; i++) {
        let width = squares[i].offsetWidth;
        squares[i].style.height = width + 'px';
    }
}

window.addEventListener('load', function() {
    resizeSquares();
});

window.addEventListener('resize', function() {
    resizeSquares();
});
