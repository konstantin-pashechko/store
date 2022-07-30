<div class="container" style="width: 50vw;">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="6" class="b-dark blue title">ТЭНы для стиральных машин</th>
      </tr>
      <tr class="bordered">
        <th class="b-green black title">Длина</th>
        <th class="b-red black title">Мощность</th>
        <th colspan="2" class="b-yellow black title">Особенность</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-grey black title">Кличество</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data = (new Order(['param1','param0']))->run($this->data); ?> 
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
          <td field="param1" class="b-green option"><val><?php echo $value['param1'] ?></val> мм</td>
          <td field="param0" class="b-red option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
          <td colspan="2" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>