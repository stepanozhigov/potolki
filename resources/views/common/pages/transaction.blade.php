@extends('common.layout')

@section('content')

<form method="POST"  class="application"  accept-charset="UTF-8" action="https://partner.rficb.ru/alba/input/">
  <input type="hidden" name="key" value="29ee1c0ac6" />
  <input name="cost" value="1" />
  <input type="hidden" name="name" value="potolki-ts.ru оплата договора"/>
  <input name="email" value="mail@example.com" />
  <input type="hidden" name="order_id" value="0" />
  <button type="button" name="button">Оплатить</button>
</form>
@endsection
