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
                            <h2>Cuenta de origen</h2><hr/>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                Introduce la cuenta de correo desde donde vas a trasladar el correo así como el servidor IMAP de dicho email.
                            </div>
                             <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="serverImap">Servidor IMAP:</label>
                                 <input class="form-control" name="url"  v-validate="'required|url'" :class="{'input': true, 'is-danger': errors.has('url') }" type="text" placeholder="Dominio">
                                 <span v-show="errors.has('url')" class="help is-danger">{{ errors.first('url') }}</span>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" name="email" type="text" placeholder="Email">
                                <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="passwordOrig">Password</label>
                                <input name="password" data-vv-scope="origin" class="form-control" v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('origin.password') }" type="password" placeholder="Password">
                                <span v-show="errors.has('origin.password')" class="help is-danger">{{ errors.first('origin.password') }}</span>
                            </div>

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
                                <select name="selector-dominios" required class="form-control">
                                </select>
                                                        </div>
                                <div class="form-group btn-group-lg" style="margin:20px ; width: 90%" >
                                    <label for="passwordDst">Password</label>
                                    <input name="password" data-vv-scope="destiny" class="form-control" v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('destiny.password') }" type="password" placeholder="Password">
                                    <span v-show="errors.has('destiny.password')" class="help is-danger">{{ errors.first('destiny.password') }}</span>
                                </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <button id="boton-parcial" @click="validateBeforeSubmit()" class="boton-plugin btn-cms-col">Migrar</button>
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
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="vee-validate.js"></script>
<script src="main.js"></script>
