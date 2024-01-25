@component('mail::message')
# Olá, {{ $details['cliente'] }}.

Aqui está o link para confirmar seu e-mail no <strong>My Wealthy Friend</strong>. <br>
O link expira em 20 minutos.

@component('mail::button', ['url' => $details['link'] ])
Acessar
@endcomponent

Atenciosamente,
equipe My Wealthy Friend.
@endcomponent
