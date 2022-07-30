<div class="container">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="7" class="b-dark title">Пакетные переключатели ПКП</th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Мощность</th>
        <th class="b-green black title">Полюсов</th>
        <th class="b-blue black title">Положений</th>
        <th colspan="4" class="b-purpur black title">АСКО</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data = (new Order(['param1','param3','param2']))->run($this->data) ?> 
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>
          <td field="param3" class="b-green option"><?php echo $value['param3'] ?></td>
          <td field="param2" class="b-blue name"><?php echo $value['param2'] ?></td>
          <td colspan="2" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
