<?php $this->nav(); ?>
<h2>Блоки ТЭНов</h2>
<div class="container">
<table id="<?php echo $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
    <thead>
    <tr>
      <th class="bb title">Мощность</th>
      <th class="bb title">Фланец</th>
      <th colspan="2" class="bb title">Длина</th>
      <th class="bb title">Материал</th>
      <th class="bb title">Производитель</th>
      <th class="bb title">Артикул</th>
      <th class="bb title">Количество</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($this->data as $key => $value): ?>
    <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] !== $this->data[$key+1]['param0']){echo 'class="bordered"';} ?>>
      <td field="param0" class="b-red option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
      <td field="param2" class="b-green option"><?php echo $value['param2']; ?></td>
      <td colspan="2" field="param4" class="b-yellow length"><?php echo $this->replace($value['param4']); ?></td>
      <td field="param6" class="b-blue material"><?php echo $this->replace($value['param6']); ?></td>
      <td field="param8" class="b-purpur manufacturer"><?php echo $this->replace($value['param8']); ?></td>
      <td field="sku1" class="b-sea sku"><?php echo $value['sku1']; ?></td>
      <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>

  
