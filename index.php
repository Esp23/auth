<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>

	<body>
		<H3 align=center>������ ����������� ������������</H3>
		<form action=page1.php class="login">
			<p>�����</p>
			<input type=text/ name="login" required pattern="[0-9a-zA-z]{5,}"/><br>
			<p>������</p>
			<input type=password required name="passwd"/>
			<input type=submit id="submit" value="�����"/>
			<a href="reg.php">�����������</a>
		</form>
	</body>
</html>

<?php
#phpinfo();
?>