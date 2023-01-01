<!DOCTYPE html>
<html lang="en">

<x-dashboard.styles />

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                                    </div>
                                    <x-form.form url="{{ route('dashboard.login_submit') }}">
                                        <x-form.input name="email" type="email" />
                                        <x-form.input name="password" type="password" />
                                        <x-form.button>Login</x-form.button>
                                    </x-form.form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <x-dashboard.scripts />

</body>

</html>
