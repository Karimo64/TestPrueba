
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registro
    </div>
    <div class="form">
       <div class="inputfield">
            <label>Nombre(s)</label>
            <input type="text" class="input">
       </div>  
        <div class="inputfield">
            <label>Apellidos</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Sexo</label>
            <div class="custom_select">
              <select>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
        </div>

        <div class="inputfield">
            <label>Correo</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Telefono</label>
            <input type="text" class="input">
        </div>

        <div class="inputfield">
            <label>Direccion</label>
            <input type="text" class="input">
        </div> 

      
      <div class="inputfield">
        <input type="submit" value="Registrar" class="btn">
      </div>
    </div>
</div>	
	
</body>
</html>