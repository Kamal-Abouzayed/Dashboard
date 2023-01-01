<x-dashboard.app>

    <x-dashboard.page-header name="dashboard" />

    <x-dashboard.row>
        {{-- users --}}
        <x-dashboard.statistic name="users" count="500">
            @slot('icon')
                <i class="fas fa-users fa-2x text-gray-300"></i>
            @endslot
        </x-dashboard.statistic>

        {{-- categories --}}
        <x-dashboard.statistic
            name="categories"
            count="500"
            text-color="text-success"
            border-color="border-left-success"
        >
            @slot('icon')
                <i class="fas fa-tags fa-2x text-gray-300"></i>
            @endslot
        </x-dashboard.statistic>

        <x-dashboard.statistic
            name="products"
            count="500"
            text-color="text-info"
            border-color="border-left-info"
            >
            @slot('icon')
                <i class="fas fa-box fa-2x text-gray-300"></i>
            @endslot
        </x-dashboard.statistic>

        <x-dashboard.statistic
            name="articles"
            count="500"
            text-color="text-warning"
            border-color="border-left-warning"
            >
            @slot('icon')
                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            @endslot
        </x-dashboard.statistic>

    </x-dashboard.row>

    {{-- <x-form.form url="{{ route('home') }}" method="PATCH">

        <x-dashboard.card-header>
            Create New User
        </x-dashboard.card-header>


        <x-dashboard.card-body>
            <x-form.field>
                <x-form.input name="title" type="text" />
                <x-form.textarea name="body" />
                <x-form.textarea name="description" />
            </x-form.field>

            <x-form.field>

                <div class="form-group">

                    <x-form.label name="category" />

                    <select class="form-control" name="category_id" id="category">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>


                    <x-form.error name='category' />

                </div>
            </x-form.field>

            <x-form.button>Save</x-form.button>

        </x-dashboard.card-body>

    </x-form.form> --}}

</x-dashboard.app>
