<?php $this->nav(); ?>
<h2></h2>
<div class="container">
<table id="<?php echo $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
    <thead>
      <tr>
        <th colspan="6" class="b-dark purpur title">СО СРЫВНЫМИ БОЛТАМИ</th>
      </tr>
    <tr>
      <th class="bb title">Сечение, мм²</th>
      <th class="bb title">Длина, мм</th>
      <th class="bb title">Наименование</th>
      <th class="bb title">Производитель</th>
      <th class="bb title">Артикул</th>
      <th class="bb title">Количество</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($this->data as $key => $value): ?>
    <tr id="<?php echo $value['id'];?>">
      <td field="param2" class="b-red option"><?= $value['param2'] ?></td>
      <td field="param1" class="b-green option"><?= $value['param1'] ?></td>
      <td field="param4" class="b-yellow name"><?= $value['param4'] ?></td>
      <td field="param6" class="b-purpur name"><?= $value['param6'] ?></td>
      <td field="sku1" class="b-grey sku"><?= $value['sku1']; ?></td>
      <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>