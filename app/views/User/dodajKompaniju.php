<?php include 'app/views/_global/beforeContent.php'; ?>

<div class="container">
    <div class="row">
        <h3 class="h3">
            Dodaj kompaniju
        </h3>
        
        <div class="col-12">
            <form action="<?php Configuration::BASE_URL ?>novoPreduzece" method="POST">
                <div class="col-lg-4 col-md-4 col-xs-12 float-left row">
                <div class="form-group">
                    <label for="_punNaziv">Naziv</label>
                    <input type="text" name="_punNaziv" class="form-control" required="required" id="_punNaziv" />
                </div>
                <div class="form-group">
                    <label for="_kratakNaziv">Kratak naziv</label>
                    <input type="text" name="_kratakNaziv" class="form-control" required="required" id="_kratakNaziv" />
                </div>
                <div class="form-group">
                    <label for="_matBroj">Maticni broj</label>
                    <input type="text" name="_matBroj" class="form-control" required="required" id="_matBroj" />
                </div>
                <div class="form-group">
                    <label for="_pib">PIB</label>
                    <input type="text" name="_pib" class="form-control" required="required" id="_pib" />
                </div>
                <div class="form-group">
                    <label for="_sajtLink">Link sajta</label>
                    <input type="text" name="_sajtLink" class="form-control" required="required" id="_sajtLink" />
                </div>
                <div class="form-group">
                    <label for="_telefon">Telefon</label>
                    <input type="text" name="_telefon" class="form-control" required="required" id="_telefon" />
                </div>
                <div class="form-group">
                    <label for="_posebneNapomene">Posebne napomene</label>
                    <input type="text" name="_posebneNapomene" class="form-control" required="required" id="_posebneNapomene" />
                </div>
                <div class="form-group">
                    <label for="_logotip">Logo</label>
                    <input type="file" name="_logotip" class="form-control" id="_logotip" required="required" />
                </div>
                <div class="form-group">
                    <label for="_kratakOpis">Kratak opis</label>
                    <input type="text" name="_kratakOpis" class="form-control" id="_kratakOpis" required="required" />
                </div>                     
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 float-left row">
                    <div class="form-group col-xs-4 col-md-4 col-xs-6 float-left">
                        <label for="_adresa">Adresa</label>
                        <input id="_adresa" type="text" class="form-control" name="_adresa" required="required" />
                    </div>
  
                    <div class="form-group col-lg-4 col-md-4 col-xs-6 float-left">
                        <label for="_lokacija_sirina">Lokacija sirina</label>
                        <input id="_lokacija_sirina" type="text" class="form-control" name="_lokacija_sirina" required="required" />
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-xs-6 float-left">
                        <label for="_lokacija_duzina">Lokacija duzina</label>
                        <input id="_lokacija_duzina" type="text" class="form-control" name="_lokacija_duzina" required="required" />                        
                    </div>
                    <label for="_filter_delatnosti">Delatnost</label>
                <select id="_filter_delatnosti" name="_delatnost" class="demo-default selectized" tabindex="-1" style="display: none;" required="required" >
                  <option value="" selected="selected">Bilo koja</option>
                    <?php
                        if (is_array($DATA['delatnosti']))
                        foreach ($DATA['delatnosti'] as $delatnost):
                    ?>
                    <option value="<?php echo $delatnost->delatnosti_SIF ?>">
                        <?php echo $delatnost->Naziv ?>
                    </option>
                    <?php endforeach; ?>
              </select>                        

                    <label for="_filter_delatnosti">Regija</label>
                <select id="_filter_regija" name="_regija" onchange="getResCity($(this).val())"  tabindex="-1" class="selectized" style="display: none;" required="required">
                  <option value="" selected="selected">Bilo koja</option>
                  <?php 
                        if (is_array($DATA['regioni']))
                        foreach ($DATA['regioni'] as $regioni):                  
                  ?>
                    <option value="<?php echo $regioni->regija_sif ?>">
                        <?php echo $regioni->naziv ?>
                    </option>                  
                  <?php endforeach; ?>
              </select>
                <div class="form-group spec-form">
                    <label for="_filter_gradovi">Grad</label>
                    <select class="form-control" name="_grad" onchange="getResDistrict($(this).val())" id="_filter_gradovi" required="required">
                    <option value="" selected="selected">Bilo koja</option>
                </select>
                </div>
                <div class="form-group spec-form">
                    <label for="_filter_opstina">Opstina</label>
                    <select class="form-control" name="_opstina" id="_filter_opstina"  required="required">
                    <option value="" selected="selected">Bilo koja</option>
                </select>                    
                </div>
                    <div class="form-group mr-2">
                        <span>Ponedeljak</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_pOd">
                        <input type="number" class="form-control" min="0" max="24" name="_pDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Utorak</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_uOd">
                        <input type="number" class="form-control" min="0" max="24" name="_uDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Sreda</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_sOd">
                        <input type="number" class="form-control" min="0" max="24" name="_sDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Cetvrtak</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_cOd">
                        <input type="number" class="form-control" min="0" max="24" name="_cDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Petak</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_peOd">
                        <input type="number" class="form-control" min="0" max="24" name="_peDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Subota</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_suOd">
                        <input type="number" class="form-control" min="0" max="24" name="_suDo">
                    </div>
                    <div class="form-group mr-2">
                        <span>Nedelja</span>
                        <input type="number" class="form-control mb-2" min="0" max="24" name="_neOd">
                        <input type="number" class="form-control" min="0" max="24" name="_neDo">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Dalje</button>
            </form>
        </div>
    </div>
</div>
<script>
    function getResCity($id) {
        $.ajax({
            url: '<?php Configuration::BASE_URL ?>ajaxCallCity/' + $id,
                success: function(results) {
                    $('#_filter_gradovi option').each(function () {
                       $(this).remove(); 
                    });
                    $('#_filter_gradovi').append(results);
                },
                error: function() {
                    
                }
        });
    }
    function getResDistrict($id) {
        $.ajax({
            url: '<?php Configuration::BASE_URL ?>ajaxCallDistrict/' + $id,
                success: function(results) {
                    $('#_filter_opstina option').each(function () {
                       $(this).remove(); 
                    });
                    $('#_filter_opstina').append(results);
                },
                error: function() {
                    
                }
        });
    }    

</script>
<?php include 'app/views/_global/afterContent.php'; ?>