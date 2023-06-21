<!DOCTYPE html>
<html>
<head>
<title>Contactpagina</title>
</head>


<body>
<div id="form">
    <h1>Contactformulier</h1>
    <p class="vraag">Voornaam:</p>
    <input class="Input">
    <p class="vraag">Achternaam:</p>
    <input class="Input">
    <p class="vraag">Adres:</p>
    <input class="Input">
    <p class="vraag">Huisnummer:</p>
    <input class="Input">
    <p class="vraag">Postcode:</p>
    <input class="Input">
    <p class="vraag">Stad:</p>
    <input class="Input"> 
    <div id="geslacht">
     <p class="vraag">Geslacht:</p>   
    <p class="geslacht">Man</p><input name="geslacht" type="radio"> <p class="geslacht">vrouw</p> <input name="geslacht" type="radio"> <p class="geslacht">overig</p> <input name="geslacht" type="radio"> 
    </div>
    <p class="vraag">Geboortedatum:</p>
    <input class="Birth">
    <select class="Birth">
        <option>Januari</option>
        <option>Februari</option>
        <option>Maart</option>
        <option>April</option>
        <option>Mei</option>
        <option>Juni</option>
        <option>Juli</option>
        <option>Augustus</option>
        <option>September</option>
        <option>Oktober</option>
        <option>November</option>
        <option>December</option>
    </select>
    <input class="Birth">
    <br>
    <p class="vraag">Opmerking</p>
    <input id="antwoord">
    <br>
    <p class="Input"></p>
    <button class="Send">Verzenden</button>
</body>
</html>