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
