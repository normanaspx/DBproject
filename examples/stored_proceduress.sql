CREATE PROCEDURE insertProduct(name varchar(50), description varchar(50), price decimal)
BEGIN
	INSERT INTO producto VALUES(NULL, name, description, price)
END
INSERT INTO `producto`(`ID_PRODUCTO`, `NOMBRE`, `DESCRIPCION`, `PRECIO`)
VALUES (NULL, 'Producto', 'Mochila', 1500)

/*	$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];*/
