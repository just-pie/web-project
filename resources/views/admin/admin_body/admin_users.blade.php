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
    <hr style="margin: 10px;">
    <div class="container">
        <h3>Tabuľka používateľov</h3>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">
            <i class="fa fa-plus"></i>
            Pridať nového používateľa
        </button>
        <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pridanie nového používateľa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ action('AdminController@addUser') }}">
                        <div class="modal-body">
                            <br>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Meno a priezvisko</span>
                                </div>
                                <input type="text" name="meno" id="meno" class="form-control" required>
                                <input type="text" name="priezvisko" id="priezvisko" class="form-control" required>
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email: </span>
                                </div>
                                <input type="email" class="form-control" aria-label="email"
                                       aria-describedby="basic-addon1" name="email" id="email" required>
                            </div
                            <br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Dátum narodenia: </span>
                                </div>
                                <input type="date" name="datum_narodenia" class="form-control" id="datum_narodenia" min="1950-01-01"
                                       required max="2019-12-31">
                            </div>
                            <br>
                            <br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Rola: </label>
                                </div>
                                <select class="custom-select" id="rola" name="rola" required>
                                    <option selected>Vyberte...</option>
                                    <option value="1">Administrátor</option>
                                    <option value="2">Študent</option>
                                    <option value="3">Modetátor</option>
                                </select>
                            </div>
                            <br><hr><br>
                            <h4>Prihlasovacie údaje</h4>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Login: </span>
                                </div>
                                <input type="text" class="form-control"
                                       aria-describedby="basic-addon1" name="login" id="login" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Heslo: </span>
                                </div>
                                <input type="password" class="form-control"
                                       aria-describedby="basic-addon1" name="heslo" id="heslo" required>
                            </div>
                        </div><br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Odoslať" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                <th scope="col">Dátum narodenia</th>
                <th scope="col">Rola</th>
                <th class="no-sort" scope="col">Akcia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->idpouzivatelia }}</th>
                    <td>{{ $user->priezvisko }} {{$user->meno}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->datum_narodenia }}</td>
                    <td>{{ $user->rola }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                            <div class="icon">
                                <a href="#
{{--{{ action("AdminController@showUserInfo", ['id' => $user->id]) }}--}}
                                        "><i
                                            class="fa fa-eye"></i></a>
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