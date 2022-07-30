<div class="container">
  <table id="<?= $this->view; ?>_tab1" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="b-dark title">Д а т ч и к и &nbsp; д в и ж е н и я</th>
      </tr>
      <tr class="bordered">
        <th class="b-green black title">Тип</th>
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th colspan="2" class="b-blue black title">Белый</th>
        <th colspan="2" class="b-purpur black title">Черный</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data['tab1'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['tab1'][$key+1]['param2']){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-green name"><?php echo $value['param2'] ?></td>
          <td colspan="3" field="param4" class="b-yellow name"><?php echo $value['param4'] ?></td>
          <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="container">
  <table id="<?= $this->view; ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="6" class="b-dark title">Ф О Т О Р Е Л Е</th>
      </tr>
      <tr class="bordered">
        <th class="b-green black title">Т О К</th>
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th class="b-purpur black title">Артикул</th>
        <th class="b-blue black title">Количесво</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data['tab2'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['tab2'][$key+1]['param2']){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-green option"><?php echo $value['param2'] ?></td>
          <td colspan="3" field="param4" class="b-yellow name"><?php echo $value['param4'] ?></td>
          <td field="sku1" class="b-purpur sku"><?php echo $value['sku1'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
