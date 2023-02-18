
<input type="text" name="name" placeholder="Name" value="{{old('name') ?? $user?->name}}"><br>
<input type="email" name="email" placeholder="Email" value="{{old('email') ?? $user?->email}}"><br>
<input type="text" name="role" placeholder="Role" value="{{old('role') ?? $user?->role}}"><br>
