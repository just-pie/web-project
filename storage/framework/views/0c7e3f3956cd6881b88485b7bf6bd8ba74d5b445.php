<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Odstránenie používateľa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="<?php echo e(action('AdminController@deleteUser')); ?>">
                    <br>
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" id="idpouzivatelia" name="idpouzivatelia">
                    <div class="container">
                        <p>Skutočne si prajete vymazať tohto používateľa z databázy?</p>
                        <p><strong><?php echo e($user->name); ?></strong></p>
                        <br>
                        <p><em>Táto akcia je nevratná!</em></p>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť okno</button>
                        <input type="submit" value="Áno, odstrániť z databázy" class="btn btn-danger">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

