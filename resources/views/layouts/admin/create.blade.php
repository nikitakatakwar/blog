<div class="row mt-4">
    <div class="col-md-12">
        <form method="POST" action="{{ route('admin.store') }}" class="p-5">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control" id="name" placeholder="Enter Full Name" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}"
                            class="form-control" id="email" placeholder="Enter Email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" placeholder="Enter Password again"
                            required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
             
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role">Select Role</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">--Select Role--</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}"> {{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
              

            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" name="txt" class="btn btn-primary">
                    <a href="{{ route('admin.index') }}" class="btn btn-warning">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>