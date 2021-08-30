let score = 0;	
	
	function checkAnswer(inputId, answers) {
		let userAnswer = document.getElementById(inputId).value;
		for(let i = 0; i < answers.length; i++){
			if(userAnswer === answers[i]){
				score++;
				break;
			}
		}
	}
		function checkAnswers() {
			checkAnswer("userAnswer1", ["7"]);
			checkAnswer("userAnswer2", ["Азия"]);
			checkAnswer("userAnswer3", ["Хараппская"]);
			checkAnswer("userAnswer4", ["Кристофер Паолини"]);
			checkAnswer("userAnswer5", ["2/3"]);

			alert("Мои поздравления ! Ты набрал " + score + " очков. Держи обещанное ! Самая сильная мышца в теле человека ?... Сердце? Пфф.. Язык! Ещё увидимся, Мудрейший!" );
		}
