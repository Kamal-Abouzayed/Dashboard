<x-dashboard.app>

    <x-dashboard.page-header name="Users" />

    <x-form.form class="card shadow mb-4" url="{{ route('dashboard.users.store') }}">

        <x-dashboard.card-header>
            Create New User
        </x-dashboard.card-header>


        <x-dashboard.card-body>
            <x-form.field>
                <x-form.input name="name" type="text" />
                <x-form.input name="email" type="email" />
                <x-form.input name="password" type="password" />
            </x-form.field>

            <x-form.button class="btn btn-primary">Save</x-form.button>

        </x-dashboard.card-body>

    </x-form.form>

</x-dashboard.app>
