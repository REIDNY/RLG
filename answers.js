// Function to check answers
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
            } else {
                answers.push(''); // Push an empty string if no option is selected
            }
        }
    }

    let correctAnswers = [
        39916800, 24, 3628800, 6, 362880, 1, 479001600, 2, 'B', 'C',
        56, 3003, 2925, 84, 4, 10, 'A', 3003, 'C', 'B',
        120, 2162160, 19958400, 72, 2, 3628800, 'C', 210, 'C', 'B'
    ];

    let score = 0;
    let wrongAnswers = [];
    for (let i = 0; i < 30; i++) {
        if (answers[i] == correctAnswers[i]) {
            score++;
        } else {
            wrongAnswers.push(i + 1);
        }
    }

    let scoreDisplay = document.getElementById("score");
    scoreDisplay.innerHTML = 'Your Score: ' + score + '/30';

    let finishButton = document.getElementsByName("submit")[0];
    finishButton.style.display = "none";

    let buttonCell = document.getElementById("buttonCell");

    if (score < 15) {
        let tryAgainButton = document.createElement("button");
        tryAgainButton.textContent = "Try Again";
        tryAgainButton.className = "btn";
        tryAgainButton.onclick = function() {
            window.location.href = "test.html";
        };
        buttonCell.innerHTML = "";
        buttonCell.appendChild(tryAgainButton);
    } else if (score >= 15 && score < 25) {
        let repeatButton = document.createElement("button");
        repeatButton.textContent = "Repeat Exam";
        tryAgainButton.className = "btn";
        repeatButton.onclick = function() {
            location.reload();
        };
        buttonCell.innerHTML = "";
        buttonCell.appendChild(repeatButton);
    } else if (score >= 20) {
        let nextLevelButton = document.createElement("button");
        nextLevelButton.textContent = "Next Level";
        tryAgainButton.className = "btn";
        nextLevelButton.onclick = function() {
            window.location.href = "next_level.html";
        };
        buttonCell.innerHTML = "";
        buttonCell.appendChild(nextLevelButton);
    }
}
