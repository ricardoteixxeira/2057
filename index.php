<!DOCTYPE html>
<html>

<head>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>2057</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		h1 {
			font-size: 4rem;
			color: #333;
			text-align: center;
			margin-bottom: 2rem;
		}

		.countdown {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			text-align: center;
			font-size: 2rem;
			color: #555;
		}

		.countdown-item {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 1rem;
			padding: 1rem;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}

		.countdown-item-value {
			font-size: 4rem;
			font-weight: bold;
			color: #333;
			margin-bottom: 0.5rem;
		}

		.countdown-item-label {
			font-size: 1.5rem;
			color: #777;
		}
	</style>
</head>

<body>

	<script>
		// Define a data-alvo
		const targetDate = new Date('January 1, 2057 00:00:00');

		// Atualiza a contagem regressiva a cada segundo
		const interval = setInterval(() => {
			// Obtem a data atual
			const now = new Date();

			// Calcula a diferença entre a data atual e a data-alvo
			const difference = targetDate.getTime() - now.getTime();

			// Calcula os anos, meses, dias, horas e segundos restantes
			let years = Math.floor(difference / (1000 * 60 * 60 * 24 * 365));
			let months = Math.floor((difference % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24 * 30));
			let days = Math.floor((difference % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
			let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((difference % (1000 * 60)) / 1000);

			// Corrige os valores negativos de meses e dias
			if (months < 0) {
				years--;
				months += 12;
			}
			if (days < 0) {
				months--;
				days += new Date(now.getFullYear(), now.getMonth(), 0).getDate();
			}

			// Exibe a contagem regressiva na página da web
			document.getElementById('countdown').innerHTML = `${years} anos, ${months} meses, ${days} dias, ${hours} horas e ${seconds} segundos`;

			// Para a contagem regressiva quando a data-alvo é alcançada
			if (difference < 0) {
				clearInterval(interval);
				document.getElementById('countdown').innerHTML = 'CHEGOU!';
			}
		}, 1000);

	</script>

<body>
	<div class="container">
		<h1>2057</h1>
		<div class="countdown">
			<div class="countdown-item">
				<span class="countdown-item-value" id="days"></span>
				<span class="countdown-item-label">Dias</span>
			</div>
			<div class="countdown-item">
				<span class="countdown-item-value" id="hours"></span>
				<span class="countdown-item-label">Horas</span>
			</div>
			<div class="countdown-item">
				<span class="countdown-item-value" id="minutes"></span>
				<span class="countdown-item-label">Minutos</span>
			</div>
			<div class="countdown-item">
				<span class="countdown-item-value" id="seconds"></span>
				<span class="countdown-item-label">Segundos</span>
			</div>
		</div>
	</div>

</body>

</html>