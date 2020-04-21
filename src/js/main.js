$(document).ready(function (){

  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);


  $.ajax({
    url: 'server.php',
    method: 'GET',
    success: function(data){
      console.log(data);
      var albums = data;
      for (var i = 0; i < albums.length; i++) {
        var album = albums[i];
        var albumTemplate = {
          albumCover: album.img,
          albumtitle: album.albumtitle,
          artistname: album.artistname,
          year: album.year
        };
        var html = template(albumTemplate);
        $('main').append(html);
      };
    },
    error: function(error){
      alert ('hai sbagliato');
    }

  });


});
