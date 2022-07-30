<div class="container">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="7" class="title">ЭЛЕКТРОИНСТРУМЕНТ</th>
      </tr>
      <tr class="bordered">
        <th class="b-grey black title">Артикул</th>
        <th colspan="5" class="b-yellow black title">Наименование</th>
        <th class="b-blue black title">Количество</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <?php if(explode(' ',$value['param2'])[0] !== explode(' ',$this->data[$key-1]['param2'])[0]): ?>
          <tr>
            <th colspan="7" class="title"><?php echo explode(' ',$value['param2'])[0]; ?></th>
          </tr>
        <? endif; ?>
      <tr id="<?php echo $value['id'];?>">
        <td field="sku1" class="b-llgrey sku"><?php echo $value['sku1'] ?></td>
        <td colspan="5" field="param2" class="b-llyellow name"><?php echo $value['param2'] ?></td>         
        <td class="b-llblue qty"><?php $this->get($value['sku1']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>