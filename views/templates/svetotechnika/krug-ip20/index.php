<h2>КРУГ (IP20)</h2>
<?php //$this->dump($this->data[0]) ?>
<table id="<?php echo $this->view.'_nakl'; ?>" class="tl-fixed table table-dark table-striped table-bordered tbordered table-sm">
  <thead>
    <tr>
      <th colspan="18" class="title white">Накладной</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" bgcolor="#FDFEFE">Параметры</th>
      <th colspan="4" class="center black">LEBRON</th>
      <th colspan="4" class="center black">VIDEX</th>
      <th colspan="4" class="center black">MAXUS</th>
      <th colspan="4" class="center black">GLOBAL</th>
    </tr>    
  </thead>
  <tbody>
    <?php foreach($this->data['nakl'] as $key => $value): ?>
    <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[0][$key+1]['param1']){echo 'class="bordered"';} ?>>

      <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
      <td field="param2" class="name"><val><?php echo $value['param2'] ?></val> K</td>
      
      <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
      <td field="name2" colspan="2" class="name"><?php echo $value['name2'] ?></td>
      <td class="qty"><?php $this->get($value['sku2']) ?></td>
      
      <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
      <td field="name3" colspan="2" class="name"><?php echo $value['name3'] ?></td>
      <td class="qty"><?php $this->get($value['sku3']) ?></td>
      
      <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
      <td field="name4" colspan="2" class="name"><?php echo $value['name4'] ?></td>
      <td class="qty"><?php $this->get($value['sku4']) ?></td>
      
      <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
      <td field="name5" colspan="2" class="name"><?php echo $value['name5'] ?></td>
      <td class="qty"><?php $this->get($value['sku5']) ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<table id="<?php echo $this->view.'_vstr'; ?>" class="tl-fixed table table-dark table-striped table-bordered tbordered table-sm">
  <thead>
    <tr>
      <th colspan="18" class="title white">Встраиваемый</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" bgcolor="#FDFEFE">Параметры</th> 
      <th colspan="4" class="center black">LEBRON</th>
      <th colspan="4" class="center black">VIDEX</th>
      <th colspan="4" class="center black">MAXUS</th>
      <th colspan="4" class="center black">GLOBAL</th>
    </tr>    
  </thead>
  <tbody>
    <?php foreach($this->data['vstr'] as $key => $value): ?>
    <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[1][$key+1]['param1']){echo 'class="bordered"';} ?>>

      <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
      <td field="param2" class="name"><val><?php echo $value['param2'] ?></val> K</td>
      
      <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
      <td field="name2" colspan="2" class="name"><?php echo $value['name2'] ?></td>
      <td class="qty"><?php $this->get($value['sku2']) ?></td>
      
      <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
      <td field="name3" colspan="2" class="name"><?php echo $value['name3'] ?></td>
      <td class="qty"><?php $this->get($value['sku3']) ?></td>
      
      <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
      <td field="name4" colspan="2" class="name"><?php echo $value['name4'] ?></td>
      <td class="qty"><?php $this->get($value['sku4']) ?></td>
      
      <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
      <td field="name5" colspan="2" class="name"><?php echo $value['name5'] ?></td>
      <td class="qty"><?php $this->get($value['sku5']) ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
