<section id="contacto">


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <h2>CONTACTO</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor indícanos tu nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Tu e-mail.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="phone">Fono</label>
                            <input type="tel" class="form-control" placeholder="Fono" id="phone" required data-validation-required-message="Ingresa tu número telefónico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Déjanos tu mensaje, comentario o sugerencia."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-info btn-lg">¡Allá va!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
