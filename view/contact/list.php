<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Agenda de contactos</h1>
    </section>
    <section class="mb-3 ml-3">
        <a href="?controller=contact&method=new" class="btn btn-primary">Nuevo Contacto</a>
    </section>
    <section class="col-md-12 table-responsive">
        <label for="">Filtrar:</label>
        <input type="text" id="entradafilter"  class="form-control" placeholder="filtrar">

        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="contenidobusqueda">
                <?php foreach($contact as $contact) : ?>
                    <tr>
                        <td><?php echo $contact->name ?></td>
                        <td><?php echo $contact->phone ?></td>
                        <?php $Year = date("Y");?>
                        <?php  $age = strtotime($contact->date); ?>
                        <?php  $anio = date("Y", $age);?>
                        <td> <?php echo $Year - $anio ?> </td>
                        <td><?php echo $contact->address ?></td>
                        <td><?php echo $contact->email ?></td>
                        <td>
                            <a href="?controller=contact&method=edit&id=<?php echo $contact->id; ?>" class="btn btn-secondary">Editar</a>
                            <a href="?controller=contact&method=delete&id=<?php echo $contact->id;?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</main>

