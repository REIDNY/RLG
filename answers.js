function checkAnswers() {
    let answers = [];
    for (let i = 1; i <= 30; i++) {
        let input = document.getElementById('answer' + i);
        if (input) {
            answers.push(input.value);
        } else {
            let radioA = document.getElementById('answer' + i + 'A');
            let radioB = document.getElementById('answer' + i + 'B');
            let radioC = document.getElementById('answer' + i + 'C');
            if (radioA && radioA.checked) {
                answers.push('A');
            } else if (radioB && radioB.checked) {
                answers.push('B');
            } else if (radioC && radioC.checked) {
                answers.push('C');
            }
        }
    }

    let correctAnswers = [
        39916800, 24, 3628800, 6, 362880, 1, 479001600, 2, 'B', 'C',
        56, 3003, 2925, 84, 4, 10, 'A', 3003, 'C', 'B',
        120, 2162160, 19958400, 72, 2, 3628800, 'C' , 210, 'C', 'B' 
    ];

    let score = 0;
    for (let i = 0; i < 10; i++) {
        if (answers[i] == correctAnswers[i]) {
            score++;
        }
    }

    let scoreDisplay = document.getElementById("score");
    scoreDisplay.innerHTML = 'Your Score: ' + score + '/10';
    
    let testAgainDisplay = document.getElementById("testAgain");
    testAgainDisplay.innerHTML = 'Do you want to take the test again? <button onclick="takeTestAgain()">Yes</button>';
}

function takeTestAgain() {
    if (confirm("Do you want to take the test again?")) {
        // Reload the page to reset the test
        window.location.reload();
    }
}
