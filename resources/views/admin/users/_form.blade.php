<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label">
            Nama
        </label>

        <input
            type="text"
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $user->name ?? '') }}"
            required>

        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-6 mb-3">

        <label class="form-label">
            Email
        </label>

        <input
            type="email"
            name="email"
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $user->email ?? '') }}"
            required>

        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label">
            Role
        </label>

        <select
            name="role"
            class="form-select @error('role') is-invalid @enderror">

            @if (isset($user) && $user->id == auth()->id() && $user->role == 'admin')
                <option value="admin" selected>Admin</option>
            @else
                <option value="viewer"
                {{ old('role', $user->role ?? '') == 'viewer' ? 'selected' : '' }}>
                User
                </option>

            <option value="admin"
                {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>
                Admin
            </option>
            @endif

        </select>

        @error('role')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

</div>

<hr>

<div class="row">

    <div class="col-md-6 mb-3">

    <label class="form-label">
        Password
        @isset($user)
            <small class="text-muted">(Kosongkan jika tidak diubah)</small>
        @endisset
    </label>

    <div class="input-group">
        <input
            type="password"
            name="password"
            id="password"
            autocomplete="new-password"
            class="form-control @error('password') is-invalid @enderror">

        <button
            class="btn btn-outline-secondary"
            type="button"
            id="togglePassword">
            <i class="bi bi-eye"></i>
        </button>
    </div>

    <small class="text-muted">
        Minimal 8 karakter.
    </small>

    @error('password')
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
    @enderror

</div>

    <div class="col-md-6 mb-3">

    <label class="form-label">
        Konfirmasi Password
    </label>

    <div class="input-group">
        <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            autocomplete="new-password"
            class="form-control">

        <button
            class="btn btn-outline-secondary"
            type="button"
            id="toggleConfirmPassword">
            <i class="bi bi-eye"></i>
        </button>
    </div>

</div>

</div>

<div class="mt-4">

    <button class="btn btn-primary">

        <i class="bi bi-check-circle"></i>

        Simpan

    </button>

    <a href="{{ route('admin.users.index') }}"
        class="btn btn-secondary">

        Kembali

    </a>

</div>