<div class="container">
  <table  id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
       <th colspan="8" class="title white"> ТЭНы для бойлеров </th> 

     </tr>
     <tr class="bordered">
      <th class="title b-blue"> Тип фланца </th>
      <th class="title b-red"> Мощность </th>
      <th class="title b-green"> Материал </th>
      <th colspan="3" class="title b-yellow"> Производитель, особенности </th>
      <th class="title b-grey"> арт. </th>
      <th class="title b-grey"> кол-во </th>
    </tr>
  </thead>

  <tbody class="">
    <?php $this->data = (new Order(['param2'=>'asc','param0'=>'asc','param4'=>'desc']))->run($this->data); ?>
    <?php foreach ($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] !== $this->data[$key+1]['param0']){  'class="bordered"';} ?>>      
        <td field="param2" class="stop b-blue option"><?php echo $value['param2']; ?></td>
        <td field="param0" class="stop b-red option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>

        <td field="param4" class="stop <?php if($value['param4']=='медь'){ echo 'b-brown'; }else{ echo 'b-green'; } ?> option"><?php echo $this->replace($value['param4']) ?></td>
        <td colspan="3" field="param6" class="<?php if($value['param4']=='медь'){ echo 'b-brown'; }else{ echo 'b-yellow'; } ?> name"><?php echo $this->replace($value['param6']) ?></td>
        <td field="sku1" class="<?php if($value['param4']=='медь'){ echo 'b-brown'; }else{ echo 'b-grey'; } ?> sku"><?php echo $value['sku1']; ?></td>
        <td class="<?php if($value['param4']=='медь'){ echo 'b-brown'; }else{ echo 'b-grey'; } ?> qty"><?php $this->get($value['sku1']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

