<link rel="stylesheet" type="text/css" href="assets/css/main.css" media="screen" />



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
                    <div style="font-size: 14px; line-height: 1.5em; text-align: center">
                            <h2><img src="assets/img/email.png" height="42" width="42"></img>Cuenta de origen</h2></div><div style="width: 95%"><hr/> </div>
					<div style="font-size: 14px; line-height: 1.5em; text-align:left">
                            <div class="form-group" style="margin:20px ; width: 90%">
                                Introduce la cuenta de correo desde donde vas a trasladar el correo así como el servidor IMAP de dicho email.
                            </div>
                             <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="serverImap">Servidor IMAP:</label>
                                 <input class="form-control" v-model="migration.imapOrg" data-vv-scope="origin" name="url"  v-validate="'required|url'" :class="{'input': true, 'is-danger': errors.has('origin.url') }" type="text" placeholder="Dominio">
                                 <span v-show="errors.has('origin.url')" class="help is-danger">{{ errors.first('origin.url') }}</span>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control"  v-model="migration.emailOrg" data-vv-scope="origin" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('origin.email') }" name="email" type="text" placeholder="Email">
                                <span v-show="errors.has('origin.email')" class="help is-danger">{{ errors.first('origin.email') }}</span>
                            </div>
                            <div class="form-group" style="margin:20px ; width: 90%">
                                <label for="passwordOrig">Password</label>
                                <input name="password" v-model="migration.passwordOrg" data-vv-scope="origin" class="form-control" v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('origin.password') }" type="password" placeholder="Password">
                                <span v-show="errors.has('origin.password')" class="help is-danger">{{ errors.first('origin.password') }}</span>
                            </div>

                    </div>
                </div>
            </div>



               <div class="col-sm-6 col-cms">
                 <div>
                    <div style="font-size: 14px; line-height: 1.5em; text-align: center">
                            <h2><img src="assets/img/email.png" height="42" width="42"></img>Cuenta de destino</h2></div><div style="width: 95%"><hr/> </div>
					<div style="font-size: 14px; line-height: 1.5em; text-align: left">
                                <div class="form-group" style="margin:20px ; width: 90%">
                                    Introduce la cuenta de correo desde donde vas a trasladar el correo así como el servidor IMAP de dicho email.
                                </div>
                                <div class="form-group btn-group-lg" style="margin:20px ; width: 90%">
                                    <label> Email: </label>
                                    <select  v-validate data-vv-rules="required" data-vv-scope="destiny" v-model="migration.emailDst" name="selector-dominios" required class="form-control">
                                        <option disabled value="">Selecciona una cuenta de correo</option>
                                        <?php foreach ($emailsActive as $email) : ?>
                                            <option value='<?= $email ?>'><?= $email ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="error" v-show="errors.has('destiny.selector-dominios')"</span>
                                </div>
                                <div class="form-group btn-group-lg" style="margin:20px ; width: 90%" >
                                    <label for="passwordDst">Password</label>
                                    <input name="password" v-model="migration.passwordDst" data-vv-scope="destiny" class="form-control" v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('destiny.password') }" type="password" placeholder="Password">
                                    <span v-show="errors.has('destiny.password')" class="help is-danger">{{ errors.first('destiny.password') }}</span>
                                </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <button id="boton-parcial" @click="validateBeforeSubmit()" class="boton-plugin btn-cms-col">Migrar</button>
            </div>
            <div class="row">
                <pre>
                    {{ $data }}
                </pre>
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
<script src="assets/js/vee-validate.js"></script>
<script src="assets/js/main.js"></script>
