<?php $this->nav(); ?>
<div class="container">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="6" class="title">Герметичные</th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Модулей</th>
        <th colspan="5" class="b-green black title">Schneider KAEDRA</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td field="param1" class="b-red option"><val><?php echo $value['param1'] ?></val> мод</td>
          <td colspan="3" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
