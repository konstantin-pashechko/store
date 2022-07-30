<?php $this->nav() ?>
<div class="box30">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="4" class="b-dark title">Г О С Т</th>
      </tr>
      <tr class="bordered">
        <th colspan="2" class="b-yellow black title left">Наименование</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-purpur black title">Количество</th>
      </tr>
    </thead>
    <tbody>    
      <?php $this->data = (new Order(['name1'],'str'))->run($this->data) ?> 
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>

          <td colspan="2" field="name1" class="b-yellow option left"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku1']) ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
