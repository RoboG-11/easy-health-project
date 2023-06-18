<form>
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
    <label for="especialidad" class="col-md-4 col-lg-3 col-form-label">Especialidad:</label>
    <div class="col-md-8 col-lg-9">
      <input name="especialidad" type="text" class="form-control" id="especialidad">
    </div>
  </div>

  <div class="row mb-3">
    <label for="cedula" class="col-md-4 col-lg-3 col-form-label">Cédula Profesional:</label>
    <div class="col-md-8 col-lg-9">
      <input name="cedula" type="text" class="form-control" id="cedula">
    </div>
  </div>

  <div class="row mb-3">
    <label for="formacion" class="col-md-4 col-lg-3 col-form-label">Formación:</label>
    <div class="col-md-8 col-lg-9">
      <input name="formacion" type="text" class="form-control" id="formacion">
    </div>
  </div>

  <div class="row mb-3">
    <label for="establecimiento" class="col-md-4 col-lg-3 col-form-label">Establecimiento:</label>
    <div class="col-md-8 col-lg-9">
      <select name="establecimiento" class="form-select" aria-label="Seleccione un establecimiento">
        <option selected>Seleccione un establecimiento</option>
        <!-- Aquí se deben generar dinámicamente las opciones con los establecimientos disponibles en la base de datos -->
        <option value="1">Establecimiento 1</option>
        <option value="2">Establecimiento 2</option>
        <option value="3">Establecimiento 3</option>
        <!-- Agrega más opciones según los establecimientos en la base de datos -->
      </select>
    </div>
  </div>
</form><!-- End Profile Edit Form -->