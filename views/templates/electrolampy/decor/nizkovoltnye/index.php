<?php $this->nav() ?>
<div class="container">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr class="bordered">
        <th class="b-red black title">title</th>
        <th class="b-green black title">title</th>
        <th colspan="2" class="b-yellow black title">title</th>
        <th colspan="2" class="b-blue black title">manufacturer</th>
        <th colspan="2" class="b-purpur black title">manufacturer</th>
        <th colspan="2" class="b-sea black title">manufacturer</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>
          <td field="param2" class="b-green option"><?php echo $value['param2'] ?></td>
          <td colspan="2" field="param4" class="b-yellow name"><?php echo $value['param4'] ?></td>
          <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>
          <td field="sku1" class="b-sea sku"><?php echo $value['sku3'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku3']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
