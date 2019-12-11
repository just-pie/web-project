
    <div id="overlay" class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Počet všetkých používateľov:
                <?php echo e($countAllUsers); ?>

            </div>
            <div class="col-sm">
                Počet nových používateľov za posledný týždeň:
                <?php echo e($countRecentlyAddedUsers); ?>

            </div>
            <div class="col-sm">
                Tu bude počet aktívnych používateľov.
            </div>
        </div>
    </div>
    <hr style="margin: 10px;">
    <div class="container">
        <h3>Tabuľka používateľov</h3>
        <br>
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo session()->get('message'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>
        <?php endif; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">
            <i class="fa fa-plus"></i>
            Pridať nového používateľa
        </button>
        <?php echo $__env->make('admin.crud_operations.add_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <br>
        <br>
    </div>
    <div class="container">
        <table id="myTable" class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Priezvisko a meno</th>
                <th scope="col">E-mail</th>
                <th scope="col">Rola</th>
                <th class="no-sort" scope="col">Akcia</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($user->id); ?></th>
                    <td><?php echo e($user->name); ?></td>
                    <td><a href="mailto:<?php echo e($user->email); ?>?Subject=Predmet:%20Mobility%20študentov" target="_top"><?php echo e($user->email); ?></a></td>
                    <td><?php echo e($user->rola); ?></td>

                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                            <div class="icon">
                                <a href="#" data-toggle="modal" data-target="#edit" data-mymeno="<?php echo e($user->name); ?>" data-myemail="<?php echo e($user->email); ?>" data-mydatum_narodenia="<?php echo e($user->birth_date); ?>" data-myrola="<?php echo e($user->rola); ?>" data-mycreated_at="<?php echo e($user->created_at); ?>" data-myupdated_at="<?php echo e($user->updated_at); ?>"  data-myid="<?php echo e($user->id); ?>"><i class="fa fa-eye" style="color: green; " data-toggle="modal" data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                <?php if($user->isAdmin !== 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#edit" data-mymeno="<?php echo e($user->name); ?>" data-myemail="<?php echo e($user->email); ?>" data-mydatum_narodenia="<?php echo e($user->birth_date); ?>" data-myrola="<?php echo e($user->rola); ?>" data-mycreated_at="<?php echo e($user->created_at); ?>" data-myupdated_at="<?php echo e($user->updated_at); ?>"  data-myid="<?php echo e($user->id); ?>"><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" data-target="#delete" data-mymeno="<?php echo e($user->name); ?>" data-myid="<?php echo e($user->id); ?>"><i class="fa fa-trash" style="color: red;"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Action group">
                              
                              
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php echo $__env->make('admin.crud_operations.show_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.crud_operations.edit_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.crud_operations.delete_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(asset("js/app.js")); ?>"></script>
<script>
    $('#show').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var idpouzivatelia = button.data('myid');
        var meno = button.data('mymeno');
        var priezvisko = button.data('mypriezvisko');
        var email = button.data('myemail');
        var datum_narodenia = button.data('mydatum_narodenia');
        var rola = button.data('myrola');
        var created_at = button.data('mycreated_at');
        var updated_at = button.data('myupdated_at');
        var modal = $(this);
        if(rola === "Študent"){
            rola = 2;
        }
        else if(rola === "Moderátor"){
            rola = 3;
        }
        else{
            rola = 0;
        }
        modal.find('.modal-body #meno').val(meno);
        modal.find('.modal-body #priezvisko').val(priezvisko);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #datum_narodenia').val(datum_narodenia);
        modal.find('.modal-body #rola').val(rola);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #idpouzivatelia').val(idpouzivatelia);
    });
    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var idpouzivatelia = button.data('myid');
        var meno = button.data('mymeno');
        var priezvisko = button.data('mypriezvisko');
        var email = button.data('myemail');
        var datum_narodenia = button.data('mydatum_narodenia');
        var rola = button.data('myrola');
        var created_at = button.data('mycreated_at');
        var updated_at = button.data('myupdated_at');
        var modal = $(this);
        if(rola === "Študent"){
            rola = 2;
        }
        else if(rola === "Moderátor"){
            rola = 3;
        }
        else{
            rola = 0;
        }
        modal.find('.modal-body #meno').val(meno);
        modal.find('.modal-body #priezvisko').val(priezvisko);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #datum_narodenia').val(datum_narodenia);
        modal.find('.modal-body #rola').val(rola);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #idpouzivatelia').val(idpouzivatelia);
    });
    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var idpouzivatelia = button.data('myid');
        var meno = button.data('mymeno');
        var priezvisko = button.data('mypriezvisko');
        var modal = $(this);

        modal.find('.modal-body #meno').val(meno);
        modal.find('.modal-body #priezvisko').val(priezvisko);
        modal.find('.modal-body #idpouzivatelia').val(idpouzivatelia);
    });

    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.users').addClass('active');
    });

</script>