<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Создать аккаунт</h3>
                        <form action="{{ route('register_process') }}" class="px-md-2" method="post">
                            @csrf
                            <div    class="form-outline mb-4">
                                <input name="name" type="text" id="form3Example1q" class="form-control @error('name') border-red-500 @enderror" value="{{ old('name') }}"  />
                                @error('name')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <label class="form-label" for="form3Example1q">Имя</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input name="email" type="email" id="emailAddress" class="form-control form-control-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
                                @error('email')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <label class="form-label" for="emailAddress">Email</label>
                            </div>
                            <div class="mb-4">

                            </div>

                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <input name="password" type="text" id="form3Example1w" class="form-control @error('password') border-red-500 @enderror" value="{{ old('password') }}" />
                                        <label class="form-label" for="form3Example1w">Пароль</label>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg mb-1">Регистрация</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
