<!DOCTYPE html>
<html lang="en">
<body>
    <main class="contacto-main">
        <section class="contacto-header">
            <div class="contenido-header">
                <div class="contacto-header-div">
                    <div class="contacto-hTexto">
                        <h1>Contacta con CloudMice</h1>
                        <h2>¿Quieres ponerte en contacto con nosotros? ¡Nos encantaría!</br> Estas son las opciones que tienes para hacerlo.</h2>
                    </div>
                    <div class="contact-header-img">
                        <img src="<?php echo base_url('./assets/img/cloud-support2.png');?>" width="120">
                    </div>
                </div>
            </div>
        </section>

        <section class="contacto-map container" style="max-width: 70%;">
            <h1>Nuestra Ubicacion</h1>
            <hr class="contacto-hr">
            <div class="row">
                <div class="col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.00698574544!2d-58.83797818828727!3d-27.46904188086716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca383ec3455%3A0xe60f6e677c2a8cb2!2sHip%C3%B3lito%20Yrigoyen%201075%2C%20W3400ASX%20Corrientes!5e0!3m2!1ses!2sar!4v1713040025351!5m2!1ses!2sar" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-4" id="contact2">
                    <h3 class="pt-3">Info Util</h3>
                    <hr class="contacto-hr" align="left" width="50%">
                    <h4>Sede Operativa</h4>
                    <i class="fas fa-globe">Hipólito Yrigoyen 1075, W3400 Corrientes</i><br>
                    <h4 class="pt-2">Contacto</h4>
                    <i class="fas fa-phone">+54 3794 909 9999</i><br>
                    <h4 class="pt-2">Email</h4>
                    <i class="fa fa-envelope">cloudmice9@support.com</i><br>
                </div>
            </div>
        </section>

        <section class="contacto-form container" style="max-width: 70%">
            <div class="container">
                    <h1 class="text-center">Contactanos!</h1>
                    <p class="text-secondary text-center">Envianos un ticket, te responderemos a la brevedad :)</p>
                </div>
                <hr class="contacto-hr">
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-9">
                    <div class="contacto-inputs border rounded shadow overflow-hidden">

                    <form action="#!">
                        <div class="row gy-4 p-4 p-xl-5">
                        <div class="col-12">
                            <label for="fullname" class="form-label">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                            <span class="input-group-text"><img src="<?php echo base_url('./assets/img/email2.png');?>" width="25"></span>
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone" class="form-label">Celular</label>
                            <div class="input-group">
                            <span class="input-group-text"><img src="<?php echo base_url('./assets/img/telephone2.png');?>" width="25"></span>
                            <input type="tel" class="form-control" id="phone" name="phone" value="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Mensaje <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                            <div class="d-grid">
                                <button class="contacto-submit" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </section>

    </main>


</body>
</html>