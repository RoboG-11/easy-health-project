<form action="../Controller/Oyente_Paciente.php" method="POST">
  <div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto de perfil</label>
    <div class="col-md-8 col-lg-9">
      <img src="assets/img/profile-img.jpg" alt="Profile">
      <div class="pt-2">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="sexo" class="col-md-4 col-lg-3 col-form-label">Sexo:</label>
    <div class="col-md-8 col-lg-9">
      <select name="sexo" class="form-select" id="sexo">
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
      </select>
    </div>
  </div>

  <div class="row mb-3">
    <label for="edad" class="col-md-4 col-lg-3 col-form-label">Edad:</label>
    <div class="col-md-8 col-lg-9">
      <input name="edad" type="number" class="form-control" id="edad">
    </div>
  </div>

  <div class="row mb-3">
    <label for="peso" class="col-md-4 col-lg-3 col-form-label">Peso:</label>
    <div class="col-md-8 col-lg-9">
      <input name="peso" type="number" class="form-control" id="peso">
    </div>
  </div>

  <div class="row mb-3">
    <label for="fechaNacimiento" class="col-md-4 col-lg-3 col-form-label">Fecha de Nacimiento:</label>
    <div class="col-md-8 col-lg-9">
      <input name="fechaNacimiento" type="date" class="form-control" id="fechaNacimiento">
    </div>
  </div>

  <div class="row mb-3">
    <label for="nacionalidad" class="col-md-4 col-lg-3 col-form-label">Nacionalidad:</label>
    <div class="col-md-8 col-lg-9">
      <input name="nacionalidad" type="text" class="form-control" id="nacionalidad">
    </div>
  </div>

  <div class="row mb-3">
    <label for="enfermedadCronica" class="col-md-4 col-lg-3 col-form-label">Enfermedad Crónica:</label>
    <div class="col-md-8 col-lg-9">
      <input name="enfermedadCronica" type="text" class="form-control" id="enfermedadCronica">
    </div>
  </div>

  <div class="row mb-3">
    <label for="alergias" class="col-md-4 col-lg-3 col-form-label">Alergias:</label>
    <div class="col-md-8 col-lg-9">
      <input name="alergias" type="text" class="form-control" id="alergias">
    </div>
  </div>

  <div class="row mb-3">
    <label for="nss" class="col-md-4 col-lg-3 col-form-label">NSS:</label>
    <div class="col-md-8 col-lg-9">
      <input name="nss" type="text" class="form-control" id="nss">
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
  </div>
</form><!-- End Profile Edit Form -->