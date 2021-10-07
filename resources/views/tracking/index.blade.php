<x-app>
    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-4">Статус заказа</h2>
                <p class="font-size-md">Чтобы увидеть ваш заказ, пожалуйста, заполните необходимые поля. Номер заказа
                    был отправлен на ваш номер в виде смс-сообщения
                </p>
                <div class="card py-2 mt-4">
                    <form class="card-body needs-validation" novalidate>
                        <div class="form-group">
                            <label for="recover-email">Номер заказа</label>
                            <input class="form-control" type="email" id="recover-email" required>
                            <div class="invalid-feedback">Необходимо заполнить «Номер заказа».</div>
                        </div>
                        <div class="form-group">
                            <label for="recover-email">Номер телефона, при заказе</label>
                            <input class="form-control" type="email" id="recover-email" required>
                            <div class="invalid-feedback">Необходимо заполнить «Номер телефона, при заказе».</div>
                        </div>
                        <button class="btn btn-primary" type="submit">Просмотр</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>