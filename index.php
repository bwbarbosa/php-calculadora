<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="calculadora.css">

</head>
<body>

    <header>
        <h3>Calculadora</h3>
    

    <section>
        <div>
            <form action="calculadora.php" method="post">
                <input type="number" name="num1" placeholder="Primeiro número">
                <br>

                <!-- <input type="text" name="operacao" placeholder="Operações: x / + -"> -->
                
                <select name="operacao" id="operacao">
                    <option value="x">x</option>
                    <option value="/">/</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                </select>
                
                <br>
                <input type="number" name="num2" placeholder="Segundo número">
                
                <br>
                <button type="submit">
                    Calcular

            </form>

        </div>

    </section>

    <footer>
        <h4>&copy; bwdeveloper. </h4>
    </footer>
    </header>
</body>
</html>