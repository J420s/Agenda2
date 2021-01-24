<div class="row justify-content-center">
        <div class="col-md-6 align-self-center">
          <form action="guardar.php" method="POST" class="bg-dark p-4 color-white" style="border-radius:10px">
            <div class="row">
                <div class="form-group col">
                    <label>Id</label>
                    <input type="text" class="form-control" name="id" value="<?=isset($formFields['id']) ? $formFields['id'] : null?>" readonly>
                </div>
                <div class="form-group col">
                    <label>Nom: </label>
                    <input type="text" class="form-control" name="nom" value="<?=isset($formFields['nom']) ? $formFields['nom'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Cognoms: </label>
                    <input type="text" class="form-control" name="cognoms" value="<?=isset($formFields['cognoms']) ? $formFields['cognoms'] : null?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Direcció: </label>
                    <input type="text" class="form-control" name="direccio" value="<?=isset($formFields['direccio']) ? $formFields['direccio'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Localitat: </label>
                    <input type="text" class="form-control" name="localitat" value="<?=isset($formFields['localitat']) ? $formFields['localitat'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Provincia </label>
                    <input type="text" class="form-control" name="provincia" value="<?=isset($formFields['provincia']) ? $formFields['provincia'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>CP: </label>
                    <input type="number" class="form-control" name="cp" pattern="[0-9]{5}" value="<?=isset($formFields['cp']) ? $formFields['cp'] : null?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Teléfono 1: </label>
                    <input type="tel" class="form-control" name="telefon1" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" value="<?=isset($formFields['telefon1']) ? $formFields['telefon1'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Teléfono 2: </label>
                    <input type="tel" class="form-control" name="telefon2" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" value="<?=isset($formFields['telefon2']) ? $formFields['telefon2'] : null?>" <?=$disable?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Fax: </label>
                    <input type="text" class="form-control" name="fax" value="<?=isset($formFields['fax']) ? $formFields['fax'] : null?>" <?=$disable?>>
                </div>
                <div class="form-group col">
                    <label>Mail: </label>
                    <input type="email" class="form-control" name="mail" value="<?=isset($formFields['mail']) ? $formFields['mail'] : null?>" <?=$disable?>>
                </div>
            </div>
            <?php if(!$disable) echo $this->get_form_buttons()?>
          </form>
        </div>
    </div>