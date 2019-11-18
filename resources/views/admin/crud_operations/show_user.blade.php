<div class="container">
    @foreach($pouzivatel as $user)
    <dl class="row">
        <dt class="col-sm-3">Meno a priezvisko</dt>
        <dd class="col-sm-9">{{$user->meno}} {{$user->priezvisko}}</dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{$user->email}}</dd>

        <dt class="col-sm-3">Dátum narodenia</dt>
        <dd class="col-sm-9">{{$user->datum_narodenia}}</dd>

        <dt class="col-sm-3 text-truncate">Rola</dt>
        <dd class="col-sm-9">{{$user->rola}}</dd>

        <dt class="col-sm-3">Používateľ bol vytvorený dňa:</dt>
        <dd class="col-sm-9">
            {{$user->created_at}}
        </dd>
        <dt class="col-sm-3">Používateľ bol upravený dňa:</dt>
        <dd class="col-sm-9">
            {{$user->updated_at}}
        </dd>
    </dl>
    @endforeach
</div>
<br>