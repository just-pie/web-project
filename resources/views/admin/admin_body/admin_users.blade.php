
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
        <table id="pouzivatelia" class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Meno</th>
                <th scope="col">E-mail</th>
                <th scope="col">Rola</th>
                <th class="no-sort" scope="col">Akcia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td><a href="mailto:{{ $user->email }}?Subject=Predmet:%20Mobility%20študentov" target="_top">{{ $user->email }}</a></td>
                    <td>{{ $user->rola }}</td>

                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                            <div class="icon">
                                <a href="" data-toggle="modal" data-target="#show" data-myname="{{$user->name}}" data-myemail="{{$user->email}}" data-mybirth_day="{{$user->birth_date}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->id}}"><i class="fa fa-eye" style="color: green; " data-toggle="modal" data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                @if($user->isAdmin !== 1)
                                    <a href="" data-toggle="modal" data-target="#editUser" data-myname="{{$user->name}}" data-myemail="{{$user->email}}" data-mybirth_day="{{$user->birth_date}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->id}}"><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="" data-toggle="modal" data-target="#delete" data-name="{{$user->name}}" data-id="{{$user->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
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

@include('admin.crud_operations.show_user')
@include('admin.crud_operations.edit_user')
@include('admin.crud_operations.delete_user')

<script src="{{asset("js/app.js")}}"></script>
<script>
    $('#show').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var idpouzivatelia = button.data('myid');
        var name = button.data('myname');
        var email = button.data('myemail');
        var birth_date = button.data('mybirth_date');
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
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #birth_date').val(birth_date);
        modal.find('.modal-body #rola').val(rola);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #id').val(idpouzivatelia);
    });
    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('myid');
        var name = button.data('mymeno');
        var email = button.data('myemail');
        var birth_day = button.data('mybirth_date');
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
        modal.find('.modal-body #meno').val(name);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #birth_date').val(birth_day);
        modal.find('.modal-body #rola').val(rola);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #idpouzivatelia').val(id);
    });
    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('id');
        var name = button.data('name');
        var modal = $(this);

        modal.find('.modal-body #user_name').val(name);
        modal.find('.modal-body #id').val(id);
    });

    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.users').addClass('active');
    });
</script>