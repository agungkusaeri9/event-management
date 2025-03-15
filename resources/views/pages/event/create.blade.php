<x-main-layout :title="$title">
    <x-section>
        <x-section-header :title="'Create Event'" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => route('dashboard')],
            ['label' => 'Events', 'url' => route('events.index')],
        ]" :active="'Create'" />

        <x-section-body>
            <x-section-card>
                <x-slot name="header">
                    <h4>Create Event</h4>
                </x-slot>
                <x-slot name="body">
                    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class='form-group mb-3'>
                            <label for='image' class='mb-2'>Image</label>
                            <input type='file' name='image' id='image'
                                class='form-control @error('image') is-invalid @enderror' value='{{ old('image') }}'>
                            @error('image')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='name' class='mb-2'>Name</label>
                            <input type='text' name='name' id='name'
                                class='form-control @error('name') is-invalid @enderror' value='{{ old('name') }}'>
                            @error('name')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='location' class='mb-2'>Location</label>
                            <input type='text' name='location' id='location'
                                class='form-control @error('location') is-invalid @enderror'
                                value='{{ old('location') }}'>
                            @error('location')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='pic' class='mb-2'>PIC</label>
                            <input type='text' name='pic' id='pic'
                                class='form-control @error('pic') is-invalid @enderror' value='{{ old('pic') }}'>
                            @error('pic')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='date' class='mb-2'>Date</label>
                            <input type='text' name='date' id='date'
                                class='form-control @error('date') is-invalid @enderror' value='{{ old('date') }}'>
                            @error('date')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='fee' class='mb-2'>Fee</label>
                            <input type='text' name='fee' id='fee'
                                class='form-control @error('fee') is-invalid @enderror' value='{{ old('fee') }}'>
                            @error('fee')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class='form-group mb-3'>
                            <label for='description' class='mb-2'>Description</label>
                            <textarea name='description' id='description' cols='30' rows='3'
                                class='form-control @error('description') is-invalid @enderror'>{{ old('description') }}</textarea>
                            @error('description')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group mb-3'>
                            <label for='terms' class='mb-2'>Terms</label>
                            <textarea name='terms' id='terms' cols='30' rows='3'
                                class='form-control @error('terms') is-invalid @enderror'>{{ old('terms') }}</textarea>
                            @error('terms')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='status'>Status</label>
                            <select name='status' id='status'
                                class='form-control @error('status') is-invalid @enderror'>
                                <option value='' selected disabled>Pilih Status</option>
                                <option @selected($item->status == 0) value="0">Closed</option>
                                <option @selected($item->status == 1) value="1">Opened</option>
                                <option @selected($item->status == 2) value="2">Finished</option>
                            </select>
                            @error('status')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group float-right'>
                            <a href="{{ route('events.index') }}" class="btn btn-warning">Cancel</a>
                            <button class='btn btn-primary'>Create</button>
                        </div>
                    </form>
                </x-slot>
            </x-section-card>
        </x-section-body>
    </x-section>
</x-main-layout>
