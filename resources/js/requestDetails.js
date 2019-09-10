
$('#btnInfo').click(function(){
    var txtClass = $(this).attr("class");
    // $.getJSON('https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/place/details/json?placeid='+ txtClass +'&fields=name,opening_hours,website,rating,formatted_phone_number&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg', function(data) {    
    //   console.log(data.result.name)     
    //   console.log(data.result.opening_hours.open_now)
    //   console.log(data.result.opening_hours.weekday_text)
    // });
    console.log(txtClass)
  })