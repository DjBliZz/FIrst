let letters = ["a", "B", "c", "D", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "P", "q", "R", "s", "T", "u", "v", "W", "X", "y", "Z", "1", "4", "7", "2", "5", "8", "3", "6", "9", "0"];

function readInt() {
	return +document.getElementById("userAnswer").value;
	
}
	function write(text){
		document.getElementById("passw").innerHTML = text;
	}
		function getRandomNumber(max){
			return Math.round(Math.random() * max);
		}
			function generateText(letters, length){
				let text = "";
				for (var i = 0; i < length; i++){
					let n = getRandomNumber(letters.length -1);
					text = text + letters[n];
				}
			return text;
			}
				function generate(){
					let length = readInt();
					let passw = generateText(letters, length);
					write(passw);
				}

	
