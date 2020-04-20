$(document).ready(function (){
  $.ajax({
    url: 'server.php',
    method: 'GET',
    success: function(data){
      console.log(data);
      var albums = data;
      for (var i = 0; i < albums.length; i++) {
        var album = albums[i];
        $('main .card').append('<p>' + album.img + '</p>');
        $('main .card').append('<p>' + album.albumtitle + '</p>');
        $('main .card').append('<p>' + album.artistname + '</p>');
        $('main .card').append('<p>' + album.year + '</p>');
      };
    },
    error: function(error){
      alert ('hai sbagliato');
    }



  });


});
