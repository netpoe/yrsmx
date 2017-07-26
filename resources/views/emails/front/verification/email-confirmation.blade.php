@component('mail::message')
# Confirma tu correo

Gracias por registrarte en YOURS MX

Para continuar, da clic en el siguiente vínculo:

@component('mail::button', ['url' => $url])
Confirmar correo
@endcomponent

Gus
@endcomponent
