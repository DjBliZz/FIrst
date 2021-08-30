const maxTryCount = 3;
let tryCount = 0;
let answer = parseInt(Math.random() * 100);	
	function readInt() {
		let number = document.getElementById("userAnswer").value;
		return parseInt(number);
	}
		function write(text) {
			document.getElementById("info").innerHTML = text;
		}
			function hide(id){
					document.getElementById(id).style.display = "none";
			}
				
				function guess() {
				tryCount++;
				let userAnswer = readInt();	
					if(userAnswer === answer){
						write("<b>Здорово, ты угадал(а)!</b>");
						hide("button");
						hide("userAnswer");
						}	else if (tryCount >= maxTryCount) {
								write("Попытки закончились, вы проиграли<br>Првильный ответ: " + answer);
								hide("button");
								hide("userAnswer");
							}
								else if (userAnswer > answer){
								write("Вы ввели слишком большое число<br>Попробуйте ещё раз. Введите число от 1 до 100");
								}	else if (userAnswer < answer){
									write("Вы ввели слишком маленькое число<br>Попробуйте ещё раз. Введите число от 1 до 100")
									}
					
				}	