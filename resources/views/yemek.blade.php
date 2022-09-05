<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yemek Ekle</title>
  </head>
  <body>    
    <form action="{{route("yemek.ekle")}}" method="post">
      @csrf
      <label>Yemek Adı:</label><br>
      <input type="text" name="adi"><br>
      <label>İçireiği: </label><br>
      <input type="text" name="icerik"><br>
      <label>Türü:</label><br>
      <input type="text" name="turu"><br>
      <label>Fiyatı:</label><br>
      <input type="number" name="fiyati"><br>
      <input type="submit" value="Gönder">
    </form>
  </body>
</html>
