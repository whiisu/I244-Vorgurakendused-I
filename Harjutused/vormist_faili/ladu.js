/* eslint-env browser */
'use strict';

/*
Seame nupule "Kuva lisamise vorm" s�ndmuse "click" halduri, mis peidab "kuva-nupp" paragrahvi,
aga toob n�htavale "lisa-vorm" form elemendi
*/
document.querySelector('#kuva-nupp button').addEventListener('click',
    /**
     * Funktsioon teeb vormi n�htavaks ning peidab "peida" nupu
     * @event
     */
    function () {
        document.getElementById('lisa-vorm').style.display = 'block';
        document.getElementById('kuva-nupp').style.display = 'none';
    });

/*
Seame nupule "Peida lisamise vorm" s�ndmuse "click" halduri, mis teeb "kuva-nupp"
paragrahvi n�htavaks, aga peidab "lisa-vorm" form elemendi
*/
document.querySelector('#peida-nupp button').addEventListener('click',
    /**
     * Funktsioon peidab vormi ning teeb n�htavaks "peida" nupu
     * @event
     */
    function () {
        document.getElementById('lisa-vorm').style.display = 'none';
        document.getElementById('kuva-nupp').style.display = 'block';
    });

/*
Lisame vormielemendile "lisa-vorm" s�ndmuse "submit" halduri, mis ilmeb siis kui kasutaja
kas klikib vormis asuval submit nupul v�i vajutab tekstikastis enter klahvi.
*/
document.getElementById('lisa-vorm').addEventListener('submit',
    /**
     * K�ivitatakse vormi postitamisel. Kontrollib vormis olevaid v��rtusi ja lisab
     * laotabelisse uue rea valitud v��rtusega
     * @event
     * @param  {Event} event S�ndmuse info
     */
    function (event) {
        // loeme tekstikastidest kasutaja sisestatud andmed
        var nimetus = document.getElementById('nimetus').value;
        var kogus = Number(document.getElementById('kogus').value);

        // kontrollime v��rtuseid
        if (!nimetus || kogus <= 0) {
            alert('Vigased v��rtused!');
            // Katkestame tavalise submit tegevuse, vastasel korral navigeeriks brauser mujale
            event.preventDefault();
            return;
        }
    });