<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Creación de contactos</h1>
    </section>
    <section class="row-mt-2">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2>Información del contacto</h2>
            </div>
            <div class="card-body w-100">
                <form action="?controller=contact&method=save" method="post">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del contacto" require>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="phone" class="form-control" placeholder="Ingrese el número de telefono" require>
                    </div>
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="date" class="form-control" placeholder="Ingrese la fecha de nacimiento" require>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="address" class="form-control" placeholder="Ingrese la dirección" require>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Ingrese el correo " require>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
