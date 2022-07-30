<div class="box20">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="7" class="b-dark title">ПРИБОРЫ</th>
      </tr>
      <tr class="bordered">
        <th colspan="5" class="b-green black title">Наименование</th>
        <th class="b-purpur black title">Артикул</th>
        <th class="b-sea black title">Количество</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
          <td colspan="5" field="param2" class="<?= $this->grid('b-yellow','b-brown', $bg) ?> name"><?php echo $value['param2'] ?></td>
          <td field="sku1" class="b-purpur sku"><?php echo $value['sku1'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
        <?php if(substr($value['param2'], 0, 4) !== substr($this->data[$key+1]['param2'], 0, 4)){ $bg = !$bg; } ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
