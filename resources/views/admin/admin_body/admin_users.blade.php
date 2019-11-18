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
                                <a href="{{ url('/admin-user/' . $user->idpouzivatelia) }}"><i class="fa fa-eye" style="color: green; " data-toggle="modal" data-target-id="1" data-target="#showUser"></i></a>&nbsp;
                                <a href="#"><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;
                                <a href="#"><i class="fa fa-trash" style="color: red;"></i></a>
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