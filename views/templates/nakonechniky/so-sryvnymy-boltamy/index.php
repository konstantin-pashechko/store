<?php $this->nav(); ?>
<h2>Под срывные болты</h2>
<div class="container">
<table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
    <thead>
    <tr>
      <th class="bb title">Сечение кабеля, мм²</th>
      <th class="bb title">Болт</th>
      <th class="bb title">Материал</th>
      <th class="bb title">Производитель</th>
      <th class="bb title">Артикул</th>
      <th class="bb title">Количество</th>
    </tr>
  </thead>
  <tbody>
<?php $this->data = (new Order(['param2']))->run($this->data) ?>
<?php foreach ($this->data as $key => $value): ?>
    <tr id="<?= $value['id'] ?>">
      <td field="param2" class="b-red name"><?= $value['param2'] ?></td>
      <td field="param4" class="b-green option"><?= $value['param4'] ?></td>
      <td field="param6" class="b-yellow option"><?= $value['param6'] ?></td>
      <td field="param8" class="b-blue option"><?= $value['param8'] ?></td>
      <td field="sku1" class="b-sea sku"><?= $value['sku1'] ?></td>
      <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>

  
