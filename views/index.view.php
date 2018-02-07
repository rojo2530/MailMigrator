<link rel="stylesheet" type="text/css" href="file.css" media="screen" />
<div class="container" style="width: auto">

        <div class="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a style="cursor:pointer" onClick="window.location.assign(window.location.pathname);">Inicio</a></li>
                        <li><a  target="_blank" href="https://es.wikipedia.org/wiki/HTTP/2/"> Ayuda</a></li>
                    </ul>
                </div>
                </nav>

        <div class="row panel panel-default panel-plugin" style="padding:20px 0">


                        <div class="col-sm-6 col-cms">
                <div>
                    <div style="font-size: 14px; line-height: 1.5em; text-align: left">
                        <form method="post" action="http2.live.php">
                            <h2>Cuenta de origen</h2><hr/>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                Introduce la cuenta de correo desde donde vas a trasladar el correo así como el servidor IMAP de dicho email.
                            </div>
                             <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="serverImap">Servidor IMAP:</label>
                                <input type="text" class="form-control" id="serverImap" aria-describedby="emailHelp" placeholder="Introduce servidor IMAP">
                                <small id="emailHelp" class="form-text text-muted">Asegúrate de que es un servidor IMAP valido</small>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce Email">
                                <small id="emailHelp" class="form-text text-muted">Tiene que tener el formato cuenta@dominio.com</small>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                        </form>
                    </div>
                </div>
            </div>



               <div class="col-sm-6 col-cms">
                 <div>
                    <div style="font-size: 14px; line-height: 1.5em; text-align: left">
                            <h2>Cuenta de destino</h2><hr/>
                                <div class="form-group" style="margin:20px ; width: 90%">
                                    Introduce la cuenta de correo desde donde vas a trasladar el correo así como el servidor IMAP de dicho email.
                                </div>
                                <div class="form-group btn-group-lg" style="margin:20px ; width: 90%">
                                        <label> Email: </label>
                                <select name="selector-dominios" class="form-control">
                                </select>
                                                        </div>
                                <div class="form-group btn-group-lg" style="margin:20px ; width: 90%">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <button id="boton-parcial" class="boton-plugin btn-cms-col">Migrar</button>
            </div>

                        </div>
        </div>
        <div class="row">
            <div style="text-align: center; padding: 10px">
                <a href="http://webempresa.com"><img width="200px" src="https://webempresa.io/images/webempresa_logo.png"/></a>
            </div>
        </div>
    </div>
</div>
