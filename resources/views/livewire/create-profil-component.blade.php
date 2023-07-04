<form action="" enctype="multipart/form-data">
    <label for="sexe" class="form-label">Sexe</label>
    <select wire:model.lazy="profil.sexe" class="form-select">
        <option value="M">Masculin</option>
        <option value="F">Féminin</option>
        <option value="Perso">Personnalisé</option>
    </select>
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="tel" name="" id="" wire:model="profil.phone_number" class="form-control">
    <label for="bio" class="form-label">Votre Bio</label>
    <textarea name="" id="" cols="30" wire:model="profil.bio" rows="10"></textarea>
    <input type="file" name="" id="" wire:model="photo">
    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">

        <!-- File Input -->
        <label for="profil">Photo de Profil</label>
        <input type="file" wire:model="photo">
        <!-- Progress Bar -->

        <div x-show="isUploading">

            <progress max="100" x-bind:value="progress"></progress>
        </div>

    </div>
</form>
