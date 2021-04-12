<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>User Dashboard</h1>
	<h2>Select menu</h2>
	<form method="POST" name="userSelectGame" action="{{route('/relationship') }}">
		<label name="game"><select name="game" class="game">
			<option value="">Select your Game</option>
			<option value="valorant" id="game_id">Valorant</option>
			<option value="fifa" id="game_id">FIFA'21</option>
			</select>
			</label>
	</form>
</body>
</html>