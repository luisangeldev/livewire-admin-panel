<div>
    <div class="card">
        <div class="card-header">
            <strong>
                Users
            </strong>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Verified at</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->email_verified_at }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.users.detail', $user->id) }}"
                                    class="btn btn-info btn-sm"
                                >
                                    View
                                </a>
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                    class="btn btn-primary btn-sm"
                                >
                                    Edit
                                </a>
                                <button class="btn btn-danger btn-sm" wire:click='deleteUser({{ $user->id }})'>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
</div>
