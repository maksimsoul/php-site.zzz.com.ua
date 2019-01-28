<?php
include 'views/header.php';
?>


<section id="message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><span>Форма</span> обратной связи</h2>
                <div id="contact-form">
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Ваш Email *</label>
                                    <input id="form_email" type="email" class="form-control" placeholder="Введите адрес электронной почты*" required="" data-error="Требуется действующее электронное письмо.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Ваше имя *</label>
                                    <input id="form_name" type="text" class="form-control" required="" placeholder="Как к Вам обращаться?">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="text_comment" class="form-control" placeholder="Пожалуйста, оставьте сообщение" rows="4" required="" data-error="Пожалуйста, оставьте нам сообщение."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="messages"></div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" name="btn_submit" id="button_contacts" value="Отправить сообщение">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "views/footer.php";
?>