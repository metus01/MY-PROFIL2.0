<form wire:submit.prevent="submit" class="gap-2">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" wire:model="name">
    @error('name')
        <div class="is-invalid">
            {{ $message }}
        </div>
    @enderror
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" wire:model="email">
    @error('email')
        <div class="is-invalid">
            {{ $message }}
        </div>
    @enderror
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" wire:model="password">
    @error('password')
        <div class="is-invalid">
            {{ $message }}
        </div>
    @enderror
    <button type="submit" class=" mt-4 btn btn-primary">S'enrégistrer</button>
</form>
