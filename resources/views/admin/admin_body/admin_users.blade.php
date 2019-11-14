<main class="page-content pt-2">
    <div id="overlay" class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Tu bude počet používateľov.
            </div>
            <div class="col-sm">
                Tu bude počet nových používateľov.
            </div>
            <div class="col-sm">
                Tu bude počet aktívnych používateľov.
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-md-12">
            <h2>Tabuľka používateľov</h2>
        </div>
    </div>
    <div class="container">
        <table id="myTable" class="table table-striped" >
            <thead>
            <tr class="bg-primary">
                <th scope="col">ID</th>
                <th scope="col" >Priezvisko a meno</th>
                <th scope="col" >E-mail</th>
                <th scope="col" >Dátum narodenia</th>
                <th scope="col" >Rola</th>
                <th scope="col" >Akcia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->idpouzivatela }}</th>
                    <td>{{ $user->priezvisko }} {{$user->meno}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dn }}</td>
                    <td>{{ $user->rola }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                            <div class="icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Action group">
                                <a href="{{ action("UserController@edit_page", ['id' => $user->id]) }}"
                                   class="btn btn-outline-warning" role="button">Upraviť</a>
                                <a href="{{ action("UserController@delete_page", ['id' => $user->id]) }}"
                                   class="btn btn-outline-danger" role="button">Vymazať</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>