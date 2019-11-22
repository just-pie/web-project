<main class="page-content pt-2">
    <div id="overlay" class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Počet všetkých používateľov:
                {{$countAllUsers}}
            </div>
            <div class="col-sm">
                Počet nových používateľov za posledný týždeň:
                {{$countRecentlyAddedUsers}}
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
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! session()->get('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">
            <i class="fa fa-plus"></i>
            Pridať nového používateľa
        </button>
        @include('admin.crud_operations.add_user')
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
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->idpouzivatelia }}</th>
                    <td>{{ $user->priezvisko }} {{$user->meno}}</td>
                    <td><a href="mailto:{{ $user->email }}?Subject=Predmet:%20Mobility%20študentov" target="_top">{{ $user->email }}</a></td>
                    <td>{{ $user->rola }}</td>

                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                            <div class="icon">
                                <a href="#" data-toggle="modal" data-target="#edit" data-mymeno="{{$user->meno}}" data-mypriezvisko="{{$user->priezvisko}}" data-myemail="{{$user->email}}" data-mydatum_narodenia="{{$user->datum_narodenia}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->idpouzivatelia}}"><i class="fa fa-eye" style="color: green; " data-toggle="modal" data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                @if($user->rola !== "Admin")
                                    <a href="#" data-toggle="modal" data-target="#edit" data-mymeno="{{$user->meno}}" data-mypriezvisko="{{$user->priezvisko}}" data-myemail="{{$user->email}}" data-mydatum_narodenia="{{$user->datum_narodenia}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->idpouzivatelia}}"><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" data-target="#delete" data-mymeno="{{$user->meno}}" data-mypriezvisko="{{$user->priezvisko}}" data-myid="{{$user->idpouzivatelia}}"><i class="fa fa-trash" style="color: red;"></i></a>
                                @endif
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Action group">
                              {{--  <a href="{{ action("UserController@edit_page", ['id' => $user->id]) }}"
                                   class="btn btn-outline-warning" role="button">Upraviť</a>--}}
                              {{--  <a href="{{ action("UserController@delete_page", ['id' => $user->id]) }}"
                                   class="btn btn-outline-danger" role="button">Vymazať</a>--}}
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>

@include('admin.crud_operations.show_user')
@include('admin.crud_operations.edit_user')
@include('admin.crud_operations.delete_user')

<script src="{{asset("js/app.js")}}"></script>
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
</script>