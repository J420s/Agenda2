<div class="row justify-content-center">
        <div class="col-md-6 align-self-center">
          <form action="" class="bg-dark p-4  color-white" style="border-radius:10px">
            <div class="row">
                <div class="form-group col">
                    <label>Id</label>
                    <input type="text" class="form-control" value="<?=$row['id']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Nom: </label>
                    <input type="text" class="form-control" value="<?=$row['nom']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Cognoms: </label>
                    <input type="text" class="form-control" value="<?=$row['cognoms']?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Direcció: </label>
                    <input type="text" class="form-control" value="<?=$row['direccio']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Localitat: </label>
                    <input type="text" class="form-control" value="<?=$row['localitat']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Provincia </label>
                    <input type="text" class="form-control" value="<?=$row['provincia']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>CP: </label>
                    <input type="number" class="form-control" pattern="[0-9]{5}" value="<?=$row['cp']?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Teléfono 1: </label>
                    <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?=$row['telefon1']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Teléfono 2: </label>
                    <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?=$row['telefon2']?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Fax: </label>
                    <input type="text" class="form-control" value="<?=$row['fax']?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Mail: </label>
                    <input type="email" class="form-control" value="<?=$row['mail']?>" <?=$disable?>>
                </div>
            </div>
            <?php if(!$disable)$this->get_form_buttons()?>
            
            
          </form>
        </div>
    </div>