<h3>G9 GU5.3 GU10</h3>
<div class="wrapper">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr class="bordered">
        <th class="b-red black title">Цоколь</th>
        <th class="b-green black title">Вт</th>
        <th colspan="6" class="b-yellow black title">Delux</th>
        <th colspan="6" class="b-purpur black title">Videx</th>
        <th colspan="6" class="b-grey black title">Maxus</th>
        <th colspan="6" class="b-sea black title">Global</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data = (new Order(['param2'=>'asc', 'param0'=>'asc']))->run($this->data) ?>  

      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
          <td field="param0" class="b-green option"><?php echo floatval($value['param0']) ?></td>

          <td colspan="4" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
          <td class="b-yellow qty"><?php $this->get($value['sku1']) ?></td>

          <td colspan="4" field="name2" class="b-purpur name"><?php echo $value['name2'] ?></td>
          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>

          <td colspan="4" field="name3" class="b-grey name"><?php echo $value['name3'] ?></td>
          <td field="sku3" class="b-grey sku"><?php echo $value['sku3'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku3']) ?></td>

          <td colspan="4" field="name4" class="b-sea name"><?php echo $value['name4'] ?></td>
          <td field="sku4" class="b-sea sku"><?php echo $value['sku4'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku4']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
