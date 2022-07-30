<h2>ТЭНы воздушные Ø 6.5 и Ø 8.5 мм (гибкие)</h2>
<div class="container">
  <table id="<?php echo $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <rt>
        <th class="b-dark green title" style="border-right:1px solid grey;"> Длина </th>
        <th class="b-dark b-dark  red title" style="border-right:1px solid grey;"> Мощность </th>
        <th class="b-dark blue title" style="border-right:1px solid grey;"> Ø </th>
        <th colspan="4" class="b-dark yellow title" style="border-right:1px solid grey;"> Euro </th>
        <th colspan="2" class="b-dark purpur title"> ATN </th>
      </rt>
    </thead>
    <tbody>
      <?php $this->data = (new Order(['param1','param0','param2','param4']))->run($this->data); ?>
      <?php foreach($this->data as $key=>$value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td field="param1" class="b-green title"><?php echo $value['param1'] ?></td>
          <td field="param0" class="b-red title"><?php echo floatval($value['param0']) ?></td>

          <td field="param2" class="<? if($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-blue'; } ?> title"><?php echo $value['param2'] ?></td>

          <td colspan="2" field="param4" class="<? if($value['sku1']=='' && $value['sku2']!==''){ echo 'b-purpur'; } elseif ($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-yellow'; } ?> option"><?php echo $value['param4'] ?></td>

          <td field="sku1" class="<? if($value['sku1']=='' && $value['sku2']!==''){ echo 'b-purpur'; } elseif ($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-yellow'; } ?> sku"><?php echo $value['sku1'] ?></td>
          <td class="<? if($value['sku1']=='' && $value['sku2']!==''){ echo 'b-purpur'; } elseif ($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-yellow'; } ?> qty"><?php $this->get($value['sku1']); ?></td>
          <td field="sku2" class="<? if($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-purpur'; } ?> sku"><?php echo $value['sku2'] ?></td>
          <td class="<? if($value['param2']=='6.5'){ echo 'b-grey'; } else { echo 'b-purpur'; } ?> qty"><?php $this->get($value['sku2']); ?></td>

        </tr>
      <?php endforeach; ?>  
    </tbody>
  </table>