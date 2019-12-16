<div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Pridanie nového používateľa</h5>
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
                        <input type="text" name="name" id="name" class="form-control" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email: </span>
                        </div>
                        <input type="email" class="form-control" aria-label="email"
                               aria-describedby="basic-addon1" name="email" id="email" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Dátum narodenia: </span>
                        </div>
                        <input type="date" name="datum_narodenia" class="form-control" id="datum_narodenia" min="1950-01-01"
                               required max="2019-12-31" autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Rola: </label>
                        </div>
                        <select class="custom-select" id="rola" name="rola" required>
                            <option selected>Vyberte...</option>
                            <option value="2">Študent</option>
                            <option value="3">Modetátor</option>
                        </select>
                    </div>

                    <br><hr><br>
                    <h4>Prihlasovacie údaje</h4>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Heslo: </span>
                        </div>
                        <input type="password" class="form-control"
                               aria-describedby="basic-addon1" name="heslo" id="heslo" required autocomplete="off">
                    </div>
                </div><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
                    <input type="submit" value="Odoslať" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
