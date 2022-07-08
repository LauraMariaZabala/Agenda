<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Editar contacto</h1>
    </section>
    <section class="row-mt-2">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2>Información del contacto</h2>
            </div>
            <div class="card-body w-100">
                <form action="?controller=contact&method=update" method="post">

                    <input type="hidden" name="id" value="<?php echo $contact[0]->id; ?>">

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $contact[0]->name; ?> " require>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $contact[0]->phone; ?>" require>
                    </div>
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="date" class="form-control" value="<?php echo $contact[0]->date; ?>" require>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $contact[0]->address; ?>" require>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $contact[0]->email; ?>" require>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
