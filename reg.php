<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>

	<body>
		<H3 align=center>Страница регистрации</H3>
		<form>
			<p>Имя</p>
			<input type=text/ name="name" required pattern="[a-zA-zА-Яа-я]{5,}"><br>
			<p>Фамилия</p>
			<input type=text/ name="surname" required pattern="[0-9a-zA-zА-Яа-я]{,}"><br>
			<p>Год рождения</p>
			<select  name="DOB">
				<option value=1970>1970</option>
				<option value=1970>1971</option>
				<option value=1970>1972</option>
				<option value=1970>1973</option>
				<option value=1970>1974</option>
				<option value=1970>1975</option>
				<option value=1970>1976</option>
				<option value=1970>1977</option>
				<option value=1970>1978</option>
				<option value=1970>1979</option>
				<option value=1970>1980</option>
				<option value=1970>1981</option>
				<option value=1970>1982</option>
				<option value=1970>1983</option>
				<option value=1970>1984</option>
				<option value=1970>1985</option>
				<option value=1970>1986</option>
				<option value=1970>1987</option>
				<option value=1970>1988</option>
				<option value=1970>1989</option>
				<option value=1970>1990</option>
				<option value=1970>1991</option>
			</select>
			<p>e-mail</p>
			<input type="text" name="email" required size=25><br>
			<p>Логин</p>
			<input type="text" name="login" required><br>
			<p>Пароль</p>
			<input type="password" name="passwd" required><br><br>
			<input type="submit" value="Регистрация">
		</form>
	</body>
</html>