<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <label for="name">Nom :</label>
    <input type="text" name="name" value="{{ old('name') }}" required>
    @error('name') <div>{{ $message }}</div> @enderror

    <label for="email">Email :</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email') <div>{{ $message }}</div> @enderror

    <label for="message">Message :</label>
    <textarea name="message" required>{{ old('message') }}</textarea>
    @error('message') <div>{{ $message }}</div> @enderror

    <button type="submit">Envoyer</button>
</form>
