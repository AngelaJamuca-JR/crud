<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO {{ $paciente ->nombre}}</h1>
    <ul>
        <li>Id: {{ $paciente ->idPaciente}}</li>
        <li>Nombre: {{ $paciente ->nombre}}</li>
        <li>Apellido: {{ $paciente ->apellido}}</li>
        <li>Celular: {{ $paciente ->celular}}</li>
        
    </ul>
<br>
<a href="{{ route('pacientes.index') }}">REGRESAR A PACIENTES</a>


</body>
</html>