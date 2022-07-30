<?php $this->nav(); ?>
<div class="bbox">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="b-dark red title">Настенные светильники под E-27 МЕТАЛЛ</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th class="b-green black title">Форма</th>
        <th class="b-blue black title">Решетка</th>
        <th class="b-purpur black title">Цвет</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-grey black title">Количество</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
          <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-green option"><?php echo $value['param4'] ?></td>
          <td field="param6" class="b-blue option"><?php echo $value['param6'] ?></td>
          <td field="param8" class="b-purpur option"><?php echo $value['param8'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>