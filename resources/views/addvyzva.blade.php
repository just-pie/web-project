@include('includes.head', ['title' => 'Pridanie výzvy'])

<body>

@include('includes.nav')

<div class="first-widget parallax" id="portfolio">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Pridanie výzvy</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Výzvy</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="comment-form">
                <div class="widget-inner">
                    <form action="{{url('addvyzva')}}" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="nazov">Názov výzvy:</label></br>
                            <input type="text" id="nazov" name="nazov" class="form-control" required>
                        </div>
                        <div>
                            <label for="popis">Krátky popis:</label>
                            <textarea name="popis" id="popis" rows="5" class="form-control" required></textarea>
                        </div>
                        <div>
                            <label for="ostatneinfo">Deatily k výzve:</label>
                            <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control"
                                      required></textarea>
                        </div>
                        <div>
                            <label for="dlzka">Dĺžka výzvy:</label></br>
                            <input type="text" id="dlzka" name="dlzka" class="form-control" required>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div>
                            <label for="platnedo">Platnosť výzvy do:</label></br>
                            <input type="date" id="platnedo" name="platnedo" class="form-control" required>
                        </div>
                        <div>
                            <label for="filename">Foto:</label></br>
                            <input type="file" name="filename" id="filename" class="form-control" required>
                        </div>
                        <div>
                            <label for="oblast">Oblasť:</label></br>
                            <select class="form-control" id="oblast" name="oblast" required>
                                <option value=""></option>
                                @foreach ($oblasti as $oblast)
                                    <option value="{{ $oblast->idoblasti }}">{{ $oblast->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="typvyzvy">Typ výzvy:</label></br>
                            <select class="form-control" id="typvyzvy" name="typvyzvy" required>
                                <option value=""></option>
                                @foreach ($typvyzvy as $typ)
                                    <option value="{{ $typ->idtypvyzvy }}">{{ $typ->typ }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <label for="univerzity">Univerzity:</label></br>
                            <select class="form-control" id="univerzity" name="univerzity[]" multiple required>
                                <option value=""></option>
                                @foreach ($univerzity as $uni)
                                    <option value="{{ $uni->iduniverzity }}">{{ $uni->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <input class="mainBtn" type="submit" name="submit" value="Pridať výzvu" id="submit">
                        </div>
                    </form>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".vyzvy").addClass("active");
    });
</script>

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</body>
</html>