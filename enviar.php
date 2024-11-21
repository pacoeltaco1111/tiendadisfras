<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido de Disfraces</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        input[type="text"], input[type="tel"], input[type="email"], select, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h2>Realiza tu Pedido</h2>
    <form action="conexion.php" method="POST">
        <label for="fullName">Nombre Completo:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="paymentType">Tipo de Pago:</label>
        <select id="paymentType" name="paymentType" required>
            <option value="tarjeta">Tarjeta de Crédito/Débito</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia Bancaria</option>
        </select>

        <label for="desiredCostume">Disfraz Deseado:</label>
        <input type="text" id="desiredCostume" name="desiredCostume" required>

        <label for="phoneNumber">Teléfono:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required>

        <label for="suggestion">Sugerencia:</label>
        <textarea id="suggestion" name="suggestion" rows="4"></textarea>

        <button type="submit">Enviar Pedido</button>
    </form>

</body>
</html>