<h2>Лампы накаливания</h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_lon" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="5" class="title">ЛОН (Искра)</th>
        </tr>
        <tr class="bordered">
          <th class="b-red black title">Мощность</th>
          <th class="b-blue black title">Цоколь</th>
          <th class="b-yellow black title">Примечание</th>
          <th class="b-grey black title">Артикул</th>
          <th class="b-green black title">Количество</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['lon'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['lon'][$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td field="param1" class="b-red option"><val><?php echo $value['param1'] ?></val> Вт</td>
            <td field="param2" class="b-blue option"><?php echo $value['param2'] ?></td>
            <td field="param4" class="b-yellow name"><?php echo $value['param4'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?= $this->view; ?>_imp" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="7" class="title">ЛОН (импорт)</th>
        </tr>
        <tr class="bordered">
          <th class="b-red black title">Мощность</th>
          <th class="b-blue black title">Цоколь</th>
          <th class="b-yellow black title">Прим</th>
          <th colspan="2" class="b-grey black title">Филлипс</th>
          <th colspan="2" class="b-green black title">Осрам</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['imp'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['lon'][$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td field="param1" class="b-red option"><val><?php echo $value['param1'] ?></val> Вт</td>
            <td field="param2" class="b-blue option"><?php echo $value['param2'] ?></td>
            <td field="param4" class="b-yellow option"><?php echo $value['param4'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku2']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_mo" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="5" class="title">МО Е-27 (низковольтная)</th>
        </tr>
        <tr class="bordered">
          <th class="b-blue black title">Напряжение</th>
          <th class="b-red black title">Мощность</th>
          <th class="b-yellow black title">Примечание</th>
          <th class="b-grey black title">Артикул</th>
          <th class="b-green black title">Количество</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['mo'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['mo'][$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td field="param1" class="b-blue option"><val><?php echo $value['param1'] ?></val> В</td>
            <td field="param3" class="b-red option"><val><?php echo $value['param3'] ?></val> Вт</td>
            <td field="param4" class="b-yellow option"><?php echo $value['param4'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>  
    </table>    
  </div>
  <div class="box">
  <table id="<?= $this->view; ?>_ikzk" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title">ИКЗК</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-green black title">Количество</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data['ikzk'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['ikzk'][$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td colspan="3" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>    
</div>
</div>