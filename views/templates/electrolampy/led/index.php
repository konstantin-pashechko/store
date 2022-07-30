
<table id="<?php echo $this->view ?>" class="table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="22" class="center st">Светодиодные лампы E27 E40</th>
    </tr>
    <tr>
      <th class="center black" bgcolor="#FFBF00">E27/E40</th><th colspan="2" bgcolor="#FDFEFE"></th>
      <th colspan="3" class="center black bal">Delux (2 года)</th>
      <th colspan="3" class="center black bal">Maxus (3 года)</th>
      <th colspan="3" class="center black bal">Lebron (1-2 года)</th>
      <th colspan="2" class="center black bal"><nobr>Евросвет (1 год)</nobr></th>
      <th colspan="3" class="center black bal">Videx</th>
      <th colspan="2" class="center black bal">TNSy</th>
      <th colspan="3" class="center black bal">Velmax</th>
    </tr>    
  </thead>
  <tbody>
    <tr class="bordered">
      <td><b>Вт</b></td><td><b>К</b></td><td><b>тип</b></td>
      <td>арт.</td><td>код</td><td>кол.</td>
      <td>арт.</td><td>код</td><td>кол.</td>
      <td>арт.</td><td>код</td><td>кол.</td>
      <td>арт.</td><td>кол.</td>
      <td>арт.</td><td>код</td><td>кол.</td>
      <td>арт.</td><td>кол.</td>
      <td>арт.</td><td>код</td><td>кол.</td>
    </tr>
    <?php foreach($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
        <?php if($value['param1']==false && !$_SESSION['edit']){ continue; } ?>
        <td field="param1" class="title"><?php echo $value['param1'] ?></td>
        <td field="param3" class="title"><?php echo $value['param3'] ?></td>
        <td field="param2" class="title"><?php echo $value['param2'] ?></td>
        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>
        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>
        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>
        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>
        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>
        <td field="sku6" class="sku"><?php echo $value['sku6'] ?></td>
        <td class="qty"><?php $this->get($value['sku6']) ?></td>
        <td field="sku7" class="sku"><?php echo $value['sku7'] ?></td>
        <td field="name7" class="name"><?php echo $value['name7'] ?></td>
        <td class="qty"><?php $this->get($value['sku7']) ?></td>
      </tr>
    <?php endforeach; ?>
<!--     <tr>
      <th colspan="22" class="center"><p></p></th>
    </tr> -->
  </tbody>
</table>