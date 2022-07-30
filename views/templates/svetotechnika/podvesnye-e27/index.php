<div class="box30">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="6" class="b-dark title">Подвесные светильники под Е-27</th>
      </tr>
      <tr class="bordered">
        <th colspan="4" class="b-green black title">Наименование</th>
        <th class="b-purpur black title">Артикул</th>
        <th class="b-sea black title">Кол-во</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
          <td colspan="4" field="param2" class="<?= $this->grid('b-yellow','b-brown',$bg);?> name"><?php echo $value['param2'] ?></td>
          <td field="sku1" class="b-purpur sku"><?php echo $value['sku1'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku1']) ?></td>
          <?php if($_SESSION['edit']): ?>
            <td field="_order" class="red center"><?php echo $value['_order'] ?></td>
          <?php endif; ?>

        </tr>
            <?php if($value['_order'] !== $this->data[$key+1]['_order']){$bg = !$bg;} ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>