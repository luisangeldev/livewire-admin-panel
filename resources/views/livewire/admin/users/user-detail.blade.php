<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>User detail</strong>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>
                                    {{ $user->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>
                                    {{ $user->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    {{ $user->email }}
                                </td>
                            </tr>
                            <tr>
                                <th>Email verified at</th>
                                <td>
                                    {{ $user->email_verified_at }}
                                </td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>
                                    {{ $user->created_at }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-chevron-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
