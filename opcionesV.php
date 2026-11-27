
<html>
<head>
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Agencia de Viajes</h1>

    <form action="recibV.php" method="POST">

        <h2>Datos del cliente</h2>
        Nombre completo:
        <input type="text" name="nombre" required><br><br>
        
        Correo electrónico:
        <input type="email" name="correo" required><br><hr>


        <h2>Destinos turísticos</h2>

        <select name="viajes[]" multiple>
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>

        <br><hr>

        <h2>Actividades turísticas</h2>
        <label>
            <input type="checkbox" value="Buceo" name="actividades[]">
            Buceo
        </label><br>
        <label>
            <input type="checkbox" value="Paseo en lancha" name="actividades[]">
            Paseo en lancha
        </label><br>
        <label>
            <input type="checkbox" value="Visita a zonas arqueológicas" name="actividades[]">
            Visita a zonas arqueológicas
        </label><br>
        <label>
            <input type="checkbox" value="Senderismo" name="actividades[]">
            Senderismo
        </label><br>
        <label>
            <input type="checkbox" value="Pesca deportiva" name="actividades[]">
            Pesca deportiva
        </label><br>
        <label>
            <input type="checkbox" value="Recorrido gastronómico" name="actividades[]">
            Recorrido gastronómico
        </label><br>

        <label>
            <input type="checkbox" value="Visita a museos" name="actividades[]">
            Visita a museos
        </label><br>

        <hr>

        <h2>Servicios adicionales</h2>

        <label>
            <input type="checkbox" value="Transporte al aeropuerto" name="servicios[]">
            Transporte al aeropuerto
        </label><br>

        <label>
            <input type="checkbox" value="Desayuno incluido" name="servicios[]">
            Desayuno incluido
        </label><br>

        <label>
            <input type="checkbox" value="Hospedaje de lujo" name="servicios[]">
            Hospedaje de lujo
        </label><br>

        <label>
            <input type="checkbox" value="Seguro de viajero" name="servicios[]">
            Seguro de viajero
        </label><br>

        <label>
            <input type="checkbox" value="Renta de automóvil" name="servicios[]">
            Renta de automóvil
        </label><br>

        <label>
            <input type="checkbox" value="Guía turístico" name="servicios[]">
            Guía turístico
        </label><br><br>

        <button type="submit">Generar paquete</button>

    </form>

</body>
</html>
