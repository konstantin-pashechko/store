<div class="container">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="9" class="b-dark title">Вилки</th>
      </tr>
    </thead>
    <tbody>   
 
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-green option"><?php echo $value['param4'] ?></td>
          <td field="param6" class="b-purpur option left"><?php echo $value['param6'] ?></td>
          <td colspan="4" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>