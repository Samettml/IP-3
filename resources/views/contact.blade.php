@extends('layout')

@section('main')
    İletişim Sayfası İçeriği
    <br><br>
    @if($errors->any())
        <h2> <strong>Hatalı veri girişi!!</strong></h2>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        @csrf
        İsminiz
        <br><input type="text" name="isim" value="{{ old('isim') }}"/>  <!-- Eski isim verisi -->
        <br><br>
        Konu:
        <br>
        <select name="konu">
            <option {{ old('konu') == 'Öğrenci İşleri' ? 'selected' : '' }}>Öğrenci İşleri</option>
            <option {{ old('konu') == 'Sosyal Olanaklar' ? 'selected' : '' }}>Sosyal Olanaklar</option>
            <option {{ old('konu') == 'Diğer' ? 'selected' : '' }}>Diğer</option>
        </select> <!-- Eski konu verisi -->
        <br><br>
        Mesajınız:
        <br>
        <textarea name="mesaj">{{ old('mesaj') }}</textarea> <!-- Eski mesaj verisi -->
        <br>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection
