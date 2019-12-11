<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Úprava dát používateľa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="<?php echo e(action('AdminController@editUser')); ?>">
                    <br>
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" id="id" name="id">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Meno</span>
                        </div>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email: </span>
                        </div>
                        <input type="email" class="form-control" aria-label="email"
                               aria-describedby="basic-addon1" name="email" id="email" required>
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Dátum narodenia: </span>
                        </div>
                        <input type="date" name="birth_date" class="form-control" id="datum_narodenia"
                               min="1950-01-01"
                               required max="2019-12-31">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Rola: </label>
                        </div>
                        <select class="custom-select" id="rola" name="rola" required>
                            <option selected>Vyberte...</option>
                            <option value="2">Študent</option>
                            <option value="3">Moderátor</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Dátum pridania: </span>
                        </div>
                        <input type="text" name="created_at" class="form-control" id="created_at" disabled="">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Dátum poslednej úpravy: </span>
                        </div>
                        <input type="text" name="updated_at" class="form-control" id="updated_at" disabled="">
                    </div>
                    <br>
                    
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
                        <input type="submit" value="Uložiť zmeny" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

