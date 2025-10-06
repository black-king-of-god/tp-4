@extends('layout.master')
@section('main')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-gradient bg-primary text-white text-center">
                        <h4 class="mb-0">Créer un compte</h4>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ url('/inscription') }}">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" id="email" value="{{ old('email') }}" placeholder="exemple@mail.com">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" id="password" placeholder="6 à 12 caractères">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                       name="password_confirmation" id="password_confirmation" placeholder="Répétez le mot de passe">
                                @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
