var countriesField = document.querySelector ('select[name = country]');

 fetch('https://restcountries.eu/rest/v2/region/americas?fields=name')
    .then(function (response){
      return response.json();
    })

    .then(function (data){
    //  console.log(data[0].name) //--> 57 paises de America
      for(var i = 0; i < data.length; i++){
        var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = data[i].name;
            countriesField.appendChild(opt);
      };
    })
   .catch(function (error){
     console.error(error);
   })


var stateField = document.querySelector ('select[name = state]');

 fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre')
    .then(function(response){
      return response.json();
    })

    .then(function (todaLaData){
      //console.log(todaLaData.provincias[3].nombre)
      for (var i = 0; i < todaLaData.provincias.length; i++){
         var opt = document.createElement('option');
         opt.value = i;
         opt.innerHTML = todaLaData.provincias[i].nombre;
         stateField.appendChild(opt);
      };
    })

   .catch(function (error){
     console.error(error);
   })

 // opcion ver las provincias si soy de argentina !!
stateField.style.display = 'none';

countriesField.onchange = function (){
  console.log(this.value);
  if (this.value == "2") {
   stateField.style.display = 'block';
 } else {
   stateField.style.display = 'none';
 }
};
