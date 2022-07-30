<div class="wrapper">
  <div class="container">
    <table id="<?php echo $this->view; ?>_amex" class="tl-fixed table table-dark table-striped table-bordered tbordered table-sm">
      <thead>
        <tr>
          <th colspan="8" class="title white">ШКАФ IP-54 (Амекс)</th>
        </tr>
        <tr>
          <th rowspan="2" colspan="2" class="black title bordered b-blue"><p style="margin-bottom: 1em;">Наименование</p></th>
          <th colspan="3" class="title b-blue">0.8</th>     
          <th colspan="3" class="title b-blue">1.2</th>
        </tr>
        <tr>
          <th class="black bordered title b-yellow">Артикул</th>
          <th class="black bordered title b-purpur">Металлиста</th>
          <th class="black bordered title b-grey">Северная</th>
          <th class="black bordered title b-yellow">Артикул</th>
          <th class="black bordered title b-purpur">Металлиста</th>
          <th class="black bordered title b-grey">Северная</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['amex'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>" <?php if(
            substr($value['param2'], 0, 2) !== substr($this->data['amex'][$key+1]['param2'], 0, 2)
            ){ echo 'class="bordered"';}; ?>>
            <td colspan="2" field="param2" class="b-green name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>
            <td class="b-grey qty"><?php $this->get('_'.$value['sku1']) ?></td>
            <td field="sku2" class="b-yellow sku"><?php echo $value['sku2'] ?></td>
            <td field="sku9" class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
            <td class="b-grey qty"><?php $this->get('_'.$value['sku2']) ?></td>
            <?php if($_SESSION['edit']): ?>
              <td field="_order" class="order"><?php echo $value['_order'] ?></td>
            <?php endif; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
      <table id="<?php echo $this->view; ?>_nova" class="tl-fixed table table-dark table-striped table-bordered tbordered table-sm">
      <thead>
        <tr>
          <th colspan="4" class="title white">Боксы монтажные (НОВА)</th>
        </tr>
        <tr>
          <th rowspan="2" colspan="2" class="black bordered title b-blue">Наименоване</th>
          <th rowspan="2" class="black bordered title b-grey">Артикул</th>
          <th rowspan="2" class="black bordered title b-grey">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['nova'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="param2" class="b-green name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
         <table id="<?php echo $this->view; ?>_zamky" class="tl-fixed table table-dark table-striped table-bordered tbordered table-sm">
      <thead>
        <tr>
          <th colspan="4" class="title white">Аксессуары для монтажа</th>
        </tr>
        <tr>
          <th rowspan="2" colspan="2" class="black bordered title b-blue">Наименоване</th>
          <th rowspan="2" class="black bordered title b-grey">Артикул</th>
          <th rowspan="2" class="black bordered title b-grey">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['zamky'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="param2" class="b-green name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
            <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>