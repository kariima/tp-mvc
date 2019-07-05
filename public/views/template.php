<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row mt-3">
              <div class="col-12">

              <?= $content ?>

              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= js_url('form.add.js') ?>"></script>
    <script>
    
    $(function() {

      $('#selectUserFromEmprunt').on('change', function() {

        if ( $(this).val() != '' ) {
          $('#selectGenreFromEmprunt').show();
        }
      });

      $('#selectGenreFromEmprunt').on('change', function() {
        console.log ( $(this).val() )

        $.ajax({

            url: "http://localhost:8888/tp-mvc/bibliotheque/genre/" + $(this).val(),
            type: 'GET',

            success: function(res) {
                  console.log(res);
                $('#resultsBooksByGenre').html('');
              
                res.forEach(function(livre) {

                  let idUser = $('#selectUserFromEmprunt').val();

                  console.log(livre)
                    let htmlContent = '<div class="card my-2">'+
                                          '<div class="card-body">'+ livre.titre +
                                              '<a class="btn btn-success btn-sm float-right" href="http://localhost:8888/tp-mvc/ajout-emprunt/'+idUser+'/'+livre.id+'">Emprunter ce livre</a>'+
                                          '</div>'+
                                      '</div>';

                    $('#resultsBooksByGenre').append(htmlContent);
                });
            }
        });
      });

    })
    
    </script>
  
  </body>
</html>