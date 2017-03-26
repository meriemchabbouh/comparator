<h2>Reset passwordt</h2> <br>
{{ route("get-reset-password-token", ['reset_password_token' => $user->reset_password_code]) }}<br>
Mot de passse temporarire: {{ $user->temp_password }}