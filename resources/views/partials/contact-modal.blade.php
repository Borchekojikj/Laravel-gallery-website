    <!-- Modal Contact-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Вработи нашш студенти</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="text-secondary">Венесете Ваши информации за да стапиме во контакт:</span>
                    <form action=" {{ route('email') }}" method="post" class="mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Е-мејл</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        @error('email')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        @error('phone')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <label for="company" class="form-label">Компанија</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                        @error('company')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-warning w-100">Испрати</button>

                    </form>
                </div>

            </div>
        </div>
    </div>