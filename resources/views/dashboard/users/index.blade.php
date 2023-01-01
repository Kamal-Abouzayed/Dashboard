<x-dashboard.app>

    <x-dashboard.page-header name="Users" />

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary">Create New User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->isAdmin == 1)
                                        <span class="badge bg-primary text-white">Admin</span>
                                    @else
                                        <span class="badge bg-success text-white">User</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('dashboard.users.edit', $user->id) }}"
                                            class="btn btn-sm btn-outline-info py-0 mx-2">
                                            Edit
                                        </a>
                                        |

                                        <x-form.form url="{{ route('dashboard.users.destroy', $user->id) }}"
                                            method="DELETE">
                                            <x-form.button class="btn btn-sm btn-outline-danger py-0 mx-2">
                                                Delete
                                            </x-form.button>
                                        </x-form.form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-dashboard.app>
